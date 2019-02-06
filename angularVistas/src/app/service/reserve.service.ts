import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})

export class ReserveService {
  constructor(private http: HttpClient) { }

  addReserve(data: any) {
    const url = environment.API_URL + 'reserve';
    console.log(data);
    return this.http.post(url,JSON.stringify(data));
  }
}