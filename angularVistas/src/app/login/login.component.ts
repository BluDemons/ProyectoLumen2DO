import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { routerTransition } from '../router.animations';
import {Http} from '@angular/http'
import { from } from 'rxjs';

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
    constructor( public router: Router) { }
    

   
    ngOnInit() { }

    onLoggedin() {
        localStorage.setItem('isLoggedin', 'true');
    }
}
