   <div class="col-md-4">
       <div class="column text-center">
            <h2 style= "color: #108cfa">Regiones</h2>
       </div>
           <BR>
           <div v-if="!regiones.length">No hay Regiones </div>
          <table v-else class="table table-condensed table-striped table-bordered" style="font-size: 12px">
              <thead>
                <th style= "width: 30px;">#</th>
                <th>Region</th>
                <th style= "width: 30px;">Ver</th>

              </thead>
              <tbody>
                <tr v-for="regione in regiones">
                    <td>@{{ regione.id }}</td>
                    <td>@{{ regione.name }}</td>
                    <td class="text-center" @click="Query_comuna(regione.id,regione.name)">
                        <i class="fa fa-eye" aria-hidden="true"></i> </td>
                </tr>
             </tbody>
         </table>
    </div>


  <div class="col-md-8">
      <div class="column text-center">
            <h2 style= "color: #108cfa">Comunas</h2>
      </div>
      <BR>
         <div v-if="!comunas.length">No hay Comunas</div>
        <table v-else class="table table-condensed table-striped table-bordered" style="font-size: 12px">
          <thead>
            <th style= "width: 30px;">#</th>
            <th>Region</th>
            <th>Comunas</th>
          </thead>
          <tbody>
            <tr v-for="comuna in comunas">
                <td>@{{ comuna.id }}</td>
                <td>@{{ comuna.regiones.name }}</td>
                <td>@{{ comuna.name }}</td>
            </tr>
          </tbody>
      </table>
      @include('partials.paginador')
  </div>

