import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { routerTransition } from '../router.animations';
import { ServicesService } from '../service/services.service';

@Component({
    selector: 'app-login',
    templateUrl: './login.component.html',
    styleUrls: ['./login.component.scss'],
    animations: [routerTransition()]
})
export class LoginComponent implements OnInit {
public form ={
    email:null,
    password:null,
};
    constructor( public router: Router, private servicesService:ServicesService) { }
    

   
    ngOnInit() { 
        this.servicesService.login('peter@klaven', 'cityslicka').subscribe(
            res => {
              console.log(res);      
          });
      
        }
    onLoggedin() {
        localStorage.setItem('isLoggedin', 'true');
    }
}
