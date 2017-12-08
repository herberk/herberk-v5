   <div class="col-md-4">
       <div class="column text-center">
            <h2 style= "color: #108cfa">Tipo</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" @click="openModal('tipo','create')">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Tipo de atributos</button>
        </div>
           <BR>
           <div v-if="!tipos.length">No hay tipos </div>
          <table v-else class="table table-condensed table-striped table-bordered" style="font-size: 12px">
              <thead>
                <th>#</th>
                <th>Tipo</th>
                <th style= "width: 30px;">Ver</th>
                <th style= "width: 30px;">Eliminar</th>
                <th style= "width: 30px;">Editar</th>
              </thead>
              <tbody>
                <tr v-for="tipo in tipos">
                    <td>@{{ tipo.id }}</td>
                    <td>@{{ tipo.name }}</td>
                    <td class="text-center" @click="Query_atributo(tipo.id,tipo.name)">
                        <i class="fa fa-eye" aria-hidden="true"></i> </td>
                    <td class="text-center" @click="openModal('tipo','delete',tipo)">
                        <i class="fa fa-ban" aria-hidden="true"></i> </td>
                    <td class="text-center" @click="openModal('tipo','update',tipo)">
                        <i class="fa fa-pencil" aria-hidden="true"></i> </td>
                </tr>
              </tbody>
          </table>
        <!-- div v-if="!tipos.elatributos">No hat </div -->

        </div>


  <div class="col-md-8">
      <div class="column text-center">
       <h2 style= "color: #108cfa">Atributos</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" @click="openModal('atributo','create')">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Atributos</button>
      </div>
      <BR>
         <div v-if="!atributos.length">No hay atributos</div>
        <table v-else class="table table-condensed table-striped table-bordered" style="font-size: 12px">
          <thead>
            <th>#</th>
            <th>Tipo</th>
            <th>Atributo</th>
            <th style= "width: 30px;">Codigo</th>
            <th style= "width: 30px;">Eliminar</th>
            <th style= "width: 30px;">Editar</th>
          </thead>
          <tbody>
            <tr v-for="atributo in atributos">
                <td>@{{ atributo.id }}</td>
                <td>@{{ atributo.tipos.name }}</td>
                <td>@{{ atributo.name }}</td>
                <td>@{{ atributo.codigo }}</td>
                <td class="text-center" @click="openModal('atributo','delete',atributo)">
                    <i class="fa fa-ban" aria-hidden="true"></i>
                </td>
                <td class="text-center" @click="openModal('atributo','update',atributo)">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </td>
            </tr>
          </tbody>
      </table>
      @include('partials.paginador')
  </div>

