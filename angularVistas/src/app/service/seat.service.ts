import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})

export class SeatService {
  constructor(private http: HttpClient) { }

  addSeat(data: any) {
    const url = environment.API_URL + 'seat';
    console.log(data);
    return this.http.post(url,JSON.stringify(data));
  }
}