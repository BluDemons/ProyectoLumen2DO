import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})

export class TravelService {
  constructor(private http: HttpClient) { }

  addTravel(data: any) {
    const url = environment.API_URL + 'travel';
    console.log(data);
    return this.http.post(url,JSON.stringify(data));
  }
}