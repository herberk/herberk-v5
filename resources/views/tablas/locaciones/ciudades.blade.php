<div class="columns">
    <div class="col-md-6">
        <div class="column text-center">
            <h2 style= "color: #108cfa">Ciudades</h2>
              <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" @click="openModal('ciudad','create')">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Ciudad</button>

        </div>
        <BR>
        <div v-if="!ciudades.length">
            No hay ciudades
        </div>
            <table v-else class="table table-condensed table-striped table-bordered" style="font-size: 12px">
            <thead>
            <th>#</th>
            <th>Nombre</th>
            <th style= "width: 30px;">Codigo</th>
            <th style= "width: 30px;">Eliminar</th>
            <th style= "width: 30px;">Editar</th>
            </thead>
            <tbody>
            <tr v-for="ciudad in ciudades">
                <td>@{{ ciudad.id }}</td>
                <td>@{{ ciudad.name }}</td>
                <td>@{{ ciudad.codigo }}</td>
                <td class="text-center" @click="openModal('ciudad','delete',ciudad)" >
                    <i class="fa fa-ban" aria-hidden="true"></i>
                </td>
                <td class="text-center" @click="openModal('ciudad','update',ciudad)">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </td>
              </tr>
            </tbody>
        </table>
        @include('partials.paginador')
    </div>
</div>

