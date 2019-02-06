import { Component, OnInit } from '@angular/core';
import { routerTransition } from '../../router.animations';
import { ReserveService } from '../../service/reserve.service';
import { Reserve } from '../../models/reserve';

@Component({
    selector: 'app-reserva',
    templateUrl: './reserva.component.html',
    styleUrls: ['./reserva.component.scss'],
    animations: [routerTransition()]
})
export class ReservaComponent implements OnInit {
    reserva: Reserve;
    constructor(private ReservaService: ReserveService
        ) { }
 
   
 addReserva(data) {
    this.ReservaService.addReserve(data).subscribe(
   response => {
             console.log(response);
            }
         )
       };


         ngOnInit() {
      this.reserva = new Reserve();
    }
}