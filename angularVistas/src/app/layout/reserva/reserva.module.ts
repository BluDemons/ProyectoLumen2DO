import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CalendarModule } from 'primeng/calendar';

import { ReservaRoutingModule } from './reserva-routing.module';
import { ReservaComponent } from './reserva.component';

@NgModule({
    imports: [
      CommonModule,
      ReservaRoutingModule,
      CalendarModule
    ],
    declarations: [ReservaComponent]
})
export class ReservaModule {}