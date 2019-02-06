import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})

export class ReserveDateailService {
  constructor(private http: HttpClient) { }

  addReserveD(data: any) {
    const url = environment.API_URL + 'reservedetail';
    console.log(data);
    return this.http.post(url,JSON.stringify(data));
  }
}