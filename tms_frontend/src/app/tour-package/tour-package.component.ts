import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { Package } from '../package';
import { Router } from '../../../node_modules/@angular/router';

@Component({
  selector: 'app-tour-package',
  templateUrl: './tour-package.component.html',
  styleUrls: ['./tour-package.component.css']
})
export class TourPackageComponent implements OnInit {

  constructor(private api : ApiService, private route : Router) { }

  packages: Package[];
  packageId;
  book(bookId)
  {
    this.api.bookingId(bookId.id).subscribe(res =>
      {   
          //console.log(res);
          this.api.store(res);
          this.route.navigate(['userbooking']);
      },
        err => { console.log(err);})
  }

  ngOnInit() 
  { 
    this.api.getpackage().subscribe(res =>
      { this.packages = res.data
         console.log(this.packages)
      },
  err => { console.log(err);})
  }

}
