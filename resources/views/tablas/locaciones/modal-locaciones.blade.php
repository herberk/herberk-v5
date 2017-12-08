<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-center">@{{titleModal}}</h3>
            </div>
            <div class="modal-body">
                <label><p>@{{messageModal}}</p></label>

                <!-- Listado de Atributos -->
                <div v-if="modalLista">
                    <div v-if="!elcomunas.length"><strong>No hay comunas para este tipo</strong></div>
                    <table v-else class="table table-condensed table-striped table-bordered" style="font-size: 12px">
                        <tbody>
                        <tr v-for="elcomuna in elcomunas">
                            <td>@{{ elcomuna.name }}</td>
                        </tr>
                       </tbody>
                    </table>
                </div>
            </div>
                <!-- fin body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" @click="closeModal()">Cancelar</button>
            </div>
        </div>
    </div>
</div>
