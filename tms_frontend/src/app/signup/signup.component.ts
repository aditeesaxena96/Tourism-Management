import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '../../../node_modules/@angular/router';
import { ApiService } from '../api.service';
import { FormControl} from '@angular/forms';


@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {

  registerForm: FormGroup;
  loading = false;
  submitted = false;
  Form=new FormGroup({
    name:new FormControl(''),
    mobile:new FormControl(''),
    email:new FormControl(''),
    password:new FormControl('')
  });

  constructor(  private formBuilder: FormBuilder,private router: Router,private api: ApiService)
   {
    var dataformstorage =api.getStoreData();
    if(dataformstorage!=null)
    {
      this.Form=new FormGroup({ 
        name:new FormControl(dataformstorage.name,[ Validators.required,
        Validators.maxLength(24),
        Validators.minLength(1),
        Validators.pattern("^[A-Za-z]+$")
      ]),
        mobile :new FormControl(dataformstorage.mobile,[
        Validators.required,
        Validators.maxLength(10),  
        Validators.pattern('[0-9]*')
      ]),
        email:new FormControl(dataformstorage.email,[
        Validators.required,
        Validators.maxLength(55),
        Validators.pattern('^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$')
      ]),
      //   pass : new FormControl(dataformstorage.pass,[
      //   Validators.required,
      //   Validators.pattern('((?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+={};:"|,.<>]).{0,16})')
      // ]) 
      });
    }
  }

  Data()
  {
    this.api.store(this.Form.value);
    console.log(this.Form.value);
    var signupData={
      name:this.Form.controls.name.value,
      mobileNumber:this.Form.controls.mobile.value,
      email:this.Form.controls.email.value,
      password:this.Form.controls.password.value
    }
    this.api.signupUser(signupData).subscribe(res =>
      {   
          //console.log(res);
          this.api.store(res);
          this.router.navigate(['/home']);
      },
        err => { console.log(err);})
    // this.router.navigate(['/home']);
 }

  ngOnInit() 
  {
    this.registerForm = this.formBuilder.group({
      name: ['', Validators.required],
      mobile: ['', Validators.required],
      email: ['', Validators.required],
     // pass: ['', [Validators.required, Validators.minLength(6)]]
  });
  }

}
