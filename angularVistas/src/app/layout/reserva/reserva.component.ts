import { Component, OnInit } from '@angular/core';
import { routerTransition } from '../../router.animations';

@Component({
    selector: 'app-reserva',
    templateUrl: './reserva.component.html',
    styleUrls: ['./reserva.component.scss'],
    animations: [routerTransition()]
})
export class ReservaComponent implements OnInit {
  nombre = '';
  prioridad = '';
  date = '';
  texto = '';
  lista = '';
  Seleccione = '';
  create: any;
  busy: Promise<any>;
  entidadSeleccionada: any;
  Seleccionada: number;
  constructor( ) { }
  estaSeleccionado(porVerificar): boolean {
    if (this.entidadSeleccionada == null) {
        return false;
    }
    return porVerificar.id === this.entidadSeleccionada.id;
}
    ngOnInit() {}
}
