import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})

export class BusService {
  constructor(private http: HttpClient) { }

  addBus(data: any) {
    const url = environment.API_URL + 'bus';
    console.log(data);
    return this.http.post(url,JSON.stringify(data));
  }
}