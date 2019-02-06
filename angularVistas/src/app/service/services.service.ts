import { Injectable } from '@angular/core';
import {environment} from 'src/environments/environment';
import {HttpClient} from '@angular/common/http'

@Injectable({
  providedIn: 'root'
})
export class ServicesService {

  constructor(private http: HttpClient) { }

  get(url:string){
    return this.http.get (environment.API_URL+url);
  };

  post(url:string,data:any){
    return this.http.post(environment.API_URL+url,data);
  };

  
  put(url:string,data:any){
    return this.http.put(environment.API_URL+url,data);
  };

  delete(url:string,data:any){
    return this.http.delete(environment.API_URL+url,data);
  };
  login(username:string, password:string) {
    return this.http.post('https://reqres.in/api/login', {
      email: username,
      password: password,     
    });     
  }
}
