import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '../../node_modules/@angular/common/http';
import { Observable } from '../../node_modules/rxjs';
import { map } from 'rxjs/operators';
import { Token } from '../../node_modules/@angular/compiler';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
token:string
  httpOptions={headers: new HttpHeaders({'Content-Type' : 'application/json','Accept' : 'application/json',
'Authorization':'Bearer '+ this.token
})};
  
  data;

  constructor(private http: HttpClient) { }

  getpackage(): Observable<any>
  {
    return this.http.get('http://localhost:8000/api/tourpackage', this.httpOptions);
  }
  

  bookingId(bookid) : Observable<any>
  { 
   // console.log(bookid);
    return this.http.get('http://localhost:8000/api/tourpackage/'+bookid, this.httpOptions);
  }

  signupUser(signupData) : Observable<any>
  {
    //console.log(signupData);
    return this.http.post('http://127.0.0.1:8000/api/tourist', signupData);
  }

  signinUser(signinData) : Observable<any>
  {
    return this.http.post('http://127.0.0.1:8000/api/auth/login', signinData);
  }

  bookingProcess(bookingData) : Observable<any>
  {
    return this.http.post('http://127.0.0.1:8000/api/tourbooking', bookingData);
  }

  enquiryUser(enquiryData) : Observable<any>
  {
    return this.http.post('http://127.0.0.1:8000/api/tourenquiry', enquiryData);
  }


 /* Transfering data from one component to another*/
  store(datarecieve){
    this.data=datarecieve;
  }
   /* Transfering data from one component to another*/
  getStoreData(){
    return this.data;
  }
  
/*Form validation*/

}
