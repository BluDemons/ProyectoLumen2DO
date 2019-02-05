import { Component, OnInit } from '@angular/core';
import { routerTransition } from '../../router.animations';
@Component({
    selector: 'app-dashboard',
    templateUrl: './dashboard.component.html',
    styleUrls: ['./dashboard.component.scss'],
    animations: [routerTransition()]
})

export class DashboardComponent implements OnInit {
   
    public sliders: Array<any> = [];
    constructor() {
        this.sliders.push(
            {
                imagePath: 'assets/images/01.jpg',
                label: 'Trasporte',
                text:
                    'Moderno.'
            },
            {
                imagePath: 'assets/images/02.jpg',
                label: 'Trasporte',
                text: 'Comodidad.'
            },
            {
                imagePath: 'assets/images/03.jpg',
                label: 'Trasporte',
                text:
                    'Elegante.'
            },
            {
                imagePath: 'assets/images/04.jpg',
                label: 'Trasporte',
                text:
                    'Calidad.'
            }
        );
    }

    ngOnInit() {}

}


