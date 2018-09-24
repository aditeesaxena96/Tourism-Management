import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { FormControl} from '@angular/forms';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '../../../node_modules/@angular/router';


@Component({
  selector: 'app-userbooking',
  templateUrl: './userbooking.component.html',
  styleUrls: ['./userbooking.component.css']
})
export class UserbookingComponent implements OnInit {
  data;
  bookId;
  success;
  form:FormGroup
  constructor(private api : ApiService, private route:Router,private builder:FormBuilder) { 
    this.data =api.getStoreData();
    this.form =builder.group({
      fromdate:[''],
      todate:['']
    })
  }
  


  book()
  {
    console.log(this.data,this.form.value);
    var bookingData=
    {
      packageId:this.data.id,
      email:'aditeesaxena96@gmail.com',
      fromDate:this.form.controls.fromdate.value,
      toDate:this.form.controls.todate.value,
      status:0
    }
     this.api.bookingProcess(bookingData).subscribe(res =>
      {   
          this.api.store(res);
          this.success="Successfully booked",
          this.route.navigate(['/userbooking']);
      },
        err => { console.log(err);})
  }
  

  ngOnInit() {
  }

}
