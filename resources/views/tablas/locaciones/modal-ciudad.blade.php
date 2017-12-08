<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-center">@{{titleModal}}</h3>
            </div>
            <div class="modal-body">
                <label><p class="lead">@{{messageModal}}</p></label>
                <!-- depto -->
                <p v-if="modalCiudad">
                    <input type="text" class="form-control" placeholder="Ciudad" v-model="titleCiudad"
                           :readonly="modalCiudad==3">
                     <input type="text" class="form-control" placeholder="Codigo max. 5 Car." v-model="codigoCiudad"
                           :readonly="modalCiudad==3">
                </p>
                <div v-show="errorTitleCiudad" class="columns text-center">
                    <div class="column text-center text-danger">
                        El nombre de la ciudad no puede estar vacio
                    </div>
                </div>
                <div v-show="errorEmployee" class="columns text-center">
                    <div class="column text-center text-danger">
                        <div v-for="error in errorMessageCiudad">
                            @{{ error }}
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                <!-- fin body -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" @click="closeModal()">Cancelar</button>
                <button type="button" class="btn btn-success" @click="createciudad()" v-if="modalCiudad==1">Aceptar</button>
                <button type="button" class="btn btn-success" @click="updateciudad()" v-if="modalCiudad==2">Aceptar</button>
                <button type="button" class="btn btn-danger" @click="destroyciudad()" v-if="modalCiudad==3">Eliminar</button>

            </div>
        </div>
    </div>
</div>
