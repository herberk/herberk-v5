<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-center">@{{titleModal}}</h3>
            </div>
            <div class="modal-body">
                <label><p>@{{messageModal}}</p></label>
                <!-- Tipos -->
                <p v-if="modalTipo">
                    <input type="text" class="form-control" placeholder="Tipo" v-model="titleTipo"
                           :readonly="modalTipo==3">
                </p>
                <div v-show="errorTitleTipo" class="columns text-center">
                    <div class="column text-center text-danger">
                        El nombre del Tipo no puede estar vacio
                    </div>
                </div>
                <!-- Atributos -->
                <div v-if="modalAtributo">
                    <input type="text" class="form-control" placeholder="Atributo" v-model="titleAtributo" :readonly="modalAtributo==3">
                    <input type="text" class="form-control" placeholder="Codigo max. 5 Car." v-model="codigoAtributo"
                           :readonly="modalCiudad==3">
                    <select class="form-control" :disabled="modalAtributo==3" v-model="idTipoAtributo">
                        <option v-for="tipo in  tipos" :value="tipo.id">@{{ tipo.name }}
                        </option>
                    </select>
                </div>
                 <div v-show="errorTitleAtributo" class="columns text-center">
                    <div class="column text-center text-danger">
                        El nombre del Atributo no puede estar vacio
                    </div>
                </div>
                <!-- Listado de Atributos -->
                <div v-if="modalLista">
                    <div v-if="!elatributos.length"><strong>No hay atributos para este tipo</strong></div>
                    <table v-else class="table table-condensed table-striped table-bordered" style="font-size: 12px">

                        <tbody>
                        <tr v-for="elatributo in elatributos">
                            <td>@{{ elatributo.name }}</td>
                            <td>@{{ elatributo.codigo }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- fin body -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" @click="closeModal()">Cancelar</button>
                <button type="button" class="btn btn-success" @click="createTipo()" v-if="modalTipo==1">Aceptar</button>
                <button type="button" class="btn btn-success" @click="updateTipo()" v-if="modalTipo==2">Aceptar</button>
                <button type="button" class="btn btn-danger" @click="destroyTipo()" v-if="modalTipo==3">Eliminar</button>
                <button type="button" class="btn btn-success" @click="createAtributo()" v-if="modalAtributo==1">Aceptar</button>
                <button type="button" class="btn btn-success" @click="updateAtributo()" v-if="modalAtributo==2">Aceptar</button>
                <button type="button" class="btn btn-danger" @click="destroyAtributo()" v-if="modalAtributo==3">Eliminar</button>
            </div>
        </div>
    </div>
</div>
