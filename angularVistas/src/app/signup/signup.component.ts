import { Component, OnInit } from '@angular/core';
import { routerTransition } from '../router.animations';
import { ServicesService } from '../service/services.service';
import { Person } from '../models/person';

@Component({
    selector: '',
    templateUrl: './signup.component.html',
    styleUrls: ['./signup.component.scss'],
    animations: [routerTransition()]
})
export class SignupComponent implements OnInit {
    person : Person;
    people : Array<Person>;

  constructor(private service: ServicesService) { }

  ngOnInit() {
    this.get();
    this.person = new Person();
  }

  get() {
    this.service.get('person').subscribe(
      response => {
        this.people = response as Array<Person>;
      },
      error => {
        console.log(error);
      }
    );
  } 

  post(){
    this.service.post('person',this.person).subscribe(
      response => {
        this.get();
      },
      error => {
        console.log(error);
      }
      
    );
  }
  put(person:Person){
    this.service.put('person',person).subscribe(
      response => {
        this.get();
      },
      error => {
        console.log(error);
      }
      
    );
  }
  delete(person:Person){
    this.service.delete('person',person).subscribe(
      response => {
        this.get();
      },
      error => {
        console.log(error);
      }
      
    );
  }
  
}