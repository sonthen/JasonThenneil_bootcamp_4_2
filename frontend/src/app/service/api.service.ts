import { Injectable } from '@angular/core';

import { Router } from '@angular/router';
import { Http, Headers, RequestOptions } from '@angular/http';
import { Observable } from 'rxjs/Rx';

import 'rxjs/add/operator/map';

@Injectable()
export class APIService {

  constructor(private http:Http, private router:Router) { }

  courseList: Object[] = [
    { "id": "1", "name": "course1", "lecture" : "lecture1"},
    { "id": "2", "name": "course2", "lecture" : "lecture2"},
    { "id": "3", "name": "course3", "lecture" : "lecture3"}
  ]
  // login(email:string, password:string){
  //   let data = {
  //     "email": email,
  //     "password": password
  //   };
  //   let body = JSON.stringify(data);
  //   let headers = new Headers ({ "Content-Type":"application/json"});
  //   let options = new RequestOptions({ headers : headers});

  //   this.http.post('http://localhost:8000/api/login', body, options)
  //   .subscribe(
  //     result => {
  //       localStorage.setItem('token', result.json().token); //untuk simpan ke cookies
  //       this.router.navigate(['user']);
  //     },
  //     err => {
  //       localStorage.removeItem('token');
  //       this.router.navigate(['register']);
  //     }
  //   )
  // }


  // validateuser(){
  //   let token = localStorage.getItem("token");
  //    if(token ==null)
  //    {
  //      this.router.navigate(['']);
  //    }

  //    else {
  //      //mekanisme untuk cek tokennya masih valid atau tidak
  //    }
  // }


 

}
