import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { Package } from '../package';
import { Router } from '../../../node_modules/@angular/router';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

  constructor(private api :ApiService, private route : Router) { }
  packages: Package[];

  getpackageList()
  {
    this.api.getpackage().subscribe(res =>
      { this.packages = res.data
         console.log(this.packages)
      },
    err => { console.log(err);})
 }
 
 home()
 {
   this.route.navigate(['home']);
 }

 signup()
 {
   this.route.navigate(['signup']);
 }

 signin()
 {
   this.route.navigate(['signin']);
 }

 contactUs()
 {
   this.route.navigate(['/contactus']);
 }

 enquiry()
 {
   this.route.navigate(['/enquiry']);
 }
  ngOnInit() {
  }

}
