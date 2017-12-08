@extends('layouts.app')

@section('content')
    @include('layouts.Menus.menu_tablas')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

  <!-- Mostrar Regiones comunas-->
  @include('tablas.locaciones.locaciones')

   <!-- Modal  -->
    @include('tablas.locaciones.modal-locaciones')

    </div>
@endsection
@section('script')
    <script>
        let elemento = new Vue({
            el: '.app',
            mounted: function () {
                this.Query_locaciones();
            },
            data: {
                modalGeneral: 0, //Cuando hay mas tablas q usan el modal
                titleModal: '',
                messageModal: '',
                /***** Regioness *****/
                modalTipo: 0,  // Nuevo=1,editar=2 y eliminar=3
                titleTipo: '',
                errorTitleTipo: 0,
                regiones: [],
                errorEmployee: 0,
                errorMessageTipo: [],  // Mensaje del request

                /********* comunas ***********/
                comunas: [],
                elcomunas: [],
                modalLista: 0,
                pagination:{
                    'total':0,
                    'current_page':0,
                    'per_page':0,
                    'last_page':0,
                    'from':0,
                    'to':0
                },
                total: 1,
                offset: 3

            },
            watch: {
                   modalGeneral: function (value) {
                      if (!value) this.Tipo_Query(), this.Atibuto_Query();
                  },
                /*   idFilterTipo: function (value) {
                        let me = this;
                        this.filterTipo.map(function (x) {
                            if (x.id === value) {
                                me.filterAtributo = x.atributos;
                                if (!me.nowatch) {
                                    me.idFilterAtributo = me.filterAtributo[0].id;
                                } else {
                                    me.idFilterAtributo = me.nowatch;
                                }
                            }
                        });
                        this.nowatch = 0;
                    }*/
            },
            computed:{
                isActived: function () {
                    return this.pagination.current_page;
                },
                pagesNumber: function () {
                    if(!this.pagination.to){
                        return[];
                    }
                    var from = this.pagination.current_page - this.offset;
                    if(from < 1){
                        from = 1;
                    }
                    var to = from +(this.offset * 2);
                    if(to >= this.pagination.last_page){
                        to = this.pagination.last_page;
                    }
                    var pagesArray = [];
                    while(from <= to){
                        pagesArray.push(from);
                        from++;
                    }
                    return pagesArray;
                }
            },
            methods: {
                Query_locaciones(page) {
                    let me = this;
                    var urlkeeps = 'locacionesQuery?page='+page;
                    axios.get(urlkeeps)
                        .then(function (response) {
                            let answer = response.data;
                            me.comunas = answer.comunas.data;
                            me.regiones = answer.regiones;
                            me.pagination = answer.pagination;
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                },

                Query_comuna(tipo,nombre){
                    let me = this;
                    var urlhay = 'hayComunas?tipo='+tipo;
                    axios.get(urlhay)
                        .then(function (response) {
                            let answer = response.data;
                            me.elcomunas = answer.elcomunas;
                            me.modalGeneral = 1;
                            me.titleModal = 'Region : '+nombre;
                            me.modalLista = 4;
                            $('#myModal').modal('show');
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                  },
                closeModal() {
                    $('#myModal').modal('hide');
                    this.modalGeneral = 0;
                    this.titleModal = '';
                    this.messageModal = '';

                    this.modalTipo = 0;
                    this.modalAtributo = 0;
                    this.modalLista = 0;
                },
                changePage: function (page) {
                    this.pagination.current_page = page;
                    this.Query_locaciones(page);
                },
               /* openModal(type, action, data=[]) {
                    switch (type) {
                        case "tipo": {
                            switch (action) {
                                case 'create': {
                                    this.modalGeneral = 1;
                                    this.titleModal = 'Creación de un Tipo de atributo';
                                    this.messageModal = 'Ingrese el nombre del Tipo';
                                    this.modalTipo = 1;
                                    this.titleTipo = '';
                                    this.errorTitleTipo = 0;
                                    this.errorTitleAtributo = 0;
                                    break;
                                }
                                case 'update': {
                                    this.modalGeneral = 1;
                                    this.titleModal = 'Modificación de un Tipo de atributo';
                                    this.messageModal = 'Modifique el nombre del Tipo';
                                    this.modalTipo = 2;
                                    this.titleTipo = data['name'];
                                    this.idTipo = data['id'];
                                    this.errorTitleTipo = 0;
                                    $('#myModal').modal('show');
                                    break;
                                }
                                case 'delete': {
                                        let me = this;
                                        var urlkeeps = 'contar/'+data['id'];
                                        axios.get(urlkeeps)
                                            .then(function (response) {
                                                let answer = response.data;
                                                me.total = answer.total;
                                            })
                                            .catch(function (error) {
                                                console.log(error);
                                            });
                                    if (!this.total == 0){
                                              toastr.error(data['name']+' NO se puede eliminar pues tiene atributos!','Borrar');
                                         }else{
                                        this.titleModal = 'Eliminación de un Tipo de atributo';
                                        this.messageModal = 'Nombre del tipo';
                                        this.modalTipo = 3;
                                        this.modalGeneral = 1;
                                        this.titleTipo =  data['name'];
                                        this.idTipo = data['id'];
                                        this.errorTitleTipo = 0;
                                       $('#myModal').modal('show');
                                       break;
                                    }
                                }
                            }
                            break;
                        }
                        case "atributo": {
                            switch (action) {
                                case 'create': {
                                    this.modalGeneral = 1;
                                    this.titleModal = 'Creación de Atributo';
                                    this.messageModal = 'Ingrese el nombre del atributo';
                                    this.modalAtributo = 1;
                                    this.titleAtributo = '';
                                    this.codigoAtributo ='';
                                    this.errorTitleAtributo = 0;
                                    this.errorTitleTipo = 0;
                                    this.idTipoAtributo = this.tipos[0].id;
                                    break;
                                }
                                case 'update': {
                                    $('#myModal').modal('show');
                                    this.modalGeneral = 1;
                                    this.titleModal = 'Modificacion del Atributo';
                                    this.messageModal = 'Modifica el Atributo';
                                    this.modalAtributo = 2;
                                    this.titleAtributo = data['name'];
                                    this.idAtributo = data['id'];
                                    this.codigoAtributo = data['codigo'];
                                    this.idTipoAtributo = data['tipos']['id'];
                                    this.errorTitleAtributo = 0;
                                    break;
                                }
                                case 'delete': {
                                    $('#myModal').modal('show');
                                    this.modalGeneral = 1;
                                    this.titleModal = 'Eliminacion de Atributo';
                                    this.messageModal = 'Confirmear';
                                    this.modalAtributo = 3;
                                    this.titleAtributo = data['name'];
                                    this.idAtributo = data['id'];
                                    this.errorTitleAtributo = 0;
                                    this.idTipoAtributo = data['tipos']['id'];

                                    break;
                                }
                            }
                            break;
                        }
                    }
                },*/
            },
        })
    </script>
@endsection