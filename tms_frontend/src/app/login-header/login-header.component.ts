import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { NavigationEnd, Router } from '../../../node_modules/@angular/router';

@Component({
  selector: 'app-login-header',
  templateUrl: './login-header.component.html',
  styleUrls: ['./login-header.component.css']
})
export class LoginHeaderComponent implements OnInit {
item;
token;

  constructor(private api: ApiService,private route: Router) {
    this.item=api.getStoreData();
    console.log(this.item);
   }

   logout()
   {
     this.token=this.api.getstoreToken();
     this.api.logoutUser(this.token);
     this.route.navigate(['home']);
   }
  ngOnInit() {
  }

}
