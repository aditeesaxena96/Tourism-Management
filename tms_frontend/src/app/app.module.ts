import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { TourImageComponent } from './tour-image/tour-image.component';
import { TourPackageComponent } from './tour-package/tour-package.component';
import { TourEnquiryComponent } from './tour-enquiry/tour-enquiry.component';
import { HomeComponent } from './home/home.component';

import { RouterModule, Routes } from '@angular/router';
import { HttpClientModule } from '@angular/common/http';
import { HttpModule } from '@angular/http';
import { FormsModule } from '@angular/forms';
import { ApiService } from './api.service';
import { UserbookingComponent } from './userbooking/userbooking.component';
import { SignupComponent } from './signup/signup.component';
import { SigninComponent } from './signin/signin.component';
import { ReactiveFormsModule }    from '@angular/forms';
import { AdminComponent } from './admin/admin.component';
import { AdminHeaderComponent } from './admin-header/admin-header.component';
import { AdminDashboardComponent } from './admin-dashboard/admin-dashboard.component';
import { ContactUsComponent } from './contact-us/contact-us.component';


/*routing define for components*/
const routes: Routes=
[
  { path : '', redirectTo: 'home',   pathMatch: 'full' },
  { path : 'home' , component : HomeComponent },
  { path: 'userbooking', component : UserbookingComponent},
  { path: 'signup', component : SignupComponent},
  { path: 'signin', component : SigninComponent },
  { path : 'enquiry', component : TourEnquiryComponent},
  { path: 'contactus', component: ContactUsComponent },
  { path : '**', component : HomeComponent }
];


@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    TourImageComponent,
    TourPackageComponent,
    TourEnquiryComponent,
    HomeComponent,
    UserbookingComponent,
    SignupComponent,
    SigninComponent,
    AdminComponent,
    AdminHeaderComponent,
    AdminDashboardComponent,
    ContactUsComponent,
  ],
  imports: [
    BrowserModule,
    HttpModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    RouterModule.forRoot(routes)
  ],
  providers: [ApiService],
  bootstrap: [AppComponent]
})
export class AppModule { }
