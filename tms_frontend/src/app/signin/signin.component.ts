import { Component, OnInit } from '@angular/core';
import { FormGroup } from '../../../node_modules/@angular/forms';
import { FormBuilder, Validators } from '@angular/forms';
import { Router } from '../../../node_modules/@angular/router';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-signin',
  templateUrl: './signin.component.html',
  styleUrls: ['./signin.component.css']
}) 
export class SigninComponent implements OnInit {
  loginForm: FormGroup;

  constructor(private builder:FormBuilder,private api:ApiService, private route: Router) {
    this.loginForm =builder.group({
      username:[''],
      password:['']
    })
   }

  onSubmit(){
    var user={
      email:this.loginForm.controls.username.value,
      password:this.loginForm.controls.password.value 
    }
    this.api.store(this.loginForm.value);
    this.api.signinUser(user).subscribe(res=>{
      //console.log(res)
      this.api.token= res.access_token;
      this.api.storeToken(this.api.token);
      console.log(this.api.token);
      this.route.navigate(['/page']);
    },error=>{
        console.log("Wrong");
    }
  )
  }


  ngOnInit() {
  }

}
