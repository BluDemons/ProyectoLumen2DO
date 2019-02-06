import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { routerTransition } from '../router.animations';

import { PersonService } from '../service/person.service';
import { Person } from '../models/person';

@Component({
    selector: 'app-signup',
    templateUrl: './signup.component.html',
    styleUrls: ['./signup.component.scss'],
    animations: [routerTransition()]
})
export class SignupComponent implements OnInit {  
      
    person: Person;
    
    constructor(public router: Router, private PersonService: PersonService) {}

    addPerson(data) {
        this.PersonService.addPerson(data).subscribe(
            response => {
                console.log(response);
            }
        )
    }

    ngOnInit() {
        this.person = new Person();
    }
}