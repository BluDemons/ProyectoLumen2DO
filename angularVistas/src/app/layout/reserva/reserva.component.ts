import { Component, OnInit } from '@angular/core';
import { routerTransition } from '../../router.animations';
import { ServicesService } from '../../service/services.service';
import { Reserve } from '../../models/reserve';

@Component({
    selector: 'app-reserva',
    templateUrl: './reserva.component.html',
    styleUrls: ['./reserva.component.scss'],
    animations: [routerTransition()]
})
export class ReservaComponent implements OnInit {
    
    reserve: Reserve;
    reserves: Array<Reserve>;

    constructor(private service: ServicesService) { }

    ngOnInit() {
        this.get();
        this.reserve = new Reserve();
    }


    get() {
        this.service.get('reserve').subscribe(
            response => {
                this.reserves = response as Array<Reserve>;
            },
            error => {
                console.log(error);
            }
        );
    }

    post() {
        this.service.post('reserve', this.reserve).subscribe(
            response => {
                this.get();
            },
            error => {
                console.log(error);
            }

        );
    }
    put(reserve: Reserve) {
        this.service.put('reserve', this.reserve).subscribe(
            response => {
                this.get();
            },
            error => {
                console.log(error);
            }

        );
    }
    delete(reserve: Reserve) {
        this.service.delete('reserve', this.reserve).subscribe(
            response => {
                this.get();
            },
            error => {
                console.log(error);
            }

        );
    }
}