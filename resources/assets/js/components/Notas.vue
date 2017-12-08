
<template>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1"> Descripción </label>
            <td></td>

            <input type="text" class="form-control" v-model="nota_temp.descripcion" />
        </div>
        <button type="button" class="btn btn-primary" v-on:click="guardarNota()"> Guardar nota </button>
        <hr />
        <ul>
            <li v-for="n in notas">
                {{n.created_at }}
                <strong> {{ n.descripcion }}</strong>
                |
                <a href="#" class="text text-danger" v-on:click="eliminarNota(n)"> Eliminarrr </a>
           </li>
        </ul>
    </form>
</template>
<!--  <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d-m-y') }}</td>-->
<script>
    export default {
        data(){
            return {
                nota_temp: {
                    descripcion: ''
                },
                notas: []
            }
        },
        methods: {
            mostrarNotas(){
                this.$http.get('/mostrar_notas').then(response => {
                    this.notas = response.body;
                }, response => {
                    alert('Error');
                });
            },
            guardarNota(){
                this.$http.post('/guardar_nota', {
                    descripcion: this.nota_temp.descripcion
                }).then(response => {
                    this.nota_temp.descripcion = '';
                    this.notas = response.body;
                }, response => {
                    alert('Error');
                });  
            },
            eliminarNota(p_nota){
                this.$http.post('/eliminar_nota', {
                    id: p_nota.id
                }).then(response => {                    
                    this.notas = response.body;
                }, response => {
                    alert('Error');
                });  
            }
        },
        created(){
            this.mostrarNotas();
        }
    }
</script>