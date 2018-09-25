import { Component, OnInit } from '@angular/core';
import { FormGroup } from '../../../node_modules/@angular/forms';
import { FormBuilder, Validators } from '@angular/forms';
import { ApiService } from '../api.service';
import { Router } from '../../../node_modules/@angular/router';

@Component({
  selector: 'app-tour-enquiry',
  templateUrl: './tour-enquiry.component.html',
  styleUrls: ['./tour-enquiry.component.css']
})
export class TourEnquiryComponent implements OnInit {
 
  enquiryForm: FormGroup;

  constructor(private builder:FormBuilder, private api:ApiService, private route: Router) {
    this.enquiryForm =builder.group({
      name:[''],
      email:[''],
      mobile:[''],
      subject:[''],
      description:[''],
    })
   }

   onSubmit(){
    var enquiryData={
      name:this.enquiryForm.controls.name.value,
      email:this.enquiryForm.controls.email.value,
      mobileNumber:this.enquiryForm.controls.mobile.value, 
      subject:this.enquiryForm.controls.subject.value,
      description:this.enquiryForm.controls.description.value
    }
    this.api.enquiryUser(enquiryData).subscribe(res=>{
      console.log(res);
      this.route.navigate(['home']);
    },error=>{
        console.log("Wrong");
    }
  )
  }

  ngOnInit() {
  }

}
