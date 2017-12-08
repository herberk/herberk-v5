@extends('layouts.app')

@section('content')
    @include('layouts.Menus.menu_tablas')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="row"></div>
         <!-- Ciudades-->
         @include('tablas.locaciones.ciudades')
        <!-- Modal -->
       @include('tablas.locaciones.modal-ciudad')
    </div>
@endsection
@section('script')
    <script>
        let elemento = new Vue({
            el: '.app',
            mounted: function () {
                this.ciudadQuery();
            },
            data: {
                modalGeneral: 0, //Cuando hay mas tablas q usan el modal
                titleModal: '',
                messageModal: '',
                /***** Ciudades *****/
                modalCiudad: 0,  // Nuevo=1,editar=2 y eliminar=3
                titleCiudad: '',
                codigoCiudad: '',
                errorTitleCiudad: 0,
                ciudades:[],
                errorEmployee: 0,
                errorMessageCiudad: [],  // Mensaje del request
                pagination:{
                    'total':0,
                    'current_page':0,
                    'per_page':0,
                    'last_page':0,
                    'from':0,
                    'to':0
                },
                offset: 2,

            },
            watch: {
                modalGeneral: function (value) {
                    if (!value) this.ciudadQuery();
                }
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
                ciudadQuery(page) {
                    let me = this;
                    var urlciudad ='ciudadQuery?page='+page
                    axios.get(urlciudad)
                        .then(function (response) {
                            let answer = response.data;
                            me.ciudades = answer.ciudades.data;
                            me.pagination = answer.pagination;
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                },
                updateciudad() {
                    if (this.titleCiudad == '') {
                        this.errorTitleCiudad = 1;
                        return;
                    }
                    let me = this;
                    axios.put('{{route('ciudadupdate')}}', {
                        'name': this.titleCiudad,
                        'codigo': this.codigoCiudad,
                        'id': this.idCiudad
                    })
                        .then(function (response) {
                            me.titleCiudad = '';
                            me.idCiudad = 0;
                            me.codigoCiudad= '';
                            me.errorTitleCiudad = 0;
                            me.modalCiudad = 0;
                            me.closeModal();
                        })
                        .catch(function (error) {
                            console.log('error: ' + error);
                        });
                },
                closeModal() {
                    $('#myModal').modal('hide');
                    this.modalGeneral = 0;
                    this.titleModal = '';
                    this.messageModal = '';
                    this.modalCiudad = 0;

                },
                destroyciudad() {
                    var mensaje = confirm('Elimina '+this.titleCiudad);
                    if (mensaje) {
                        let me = this;
                        axios.delete('{{url('/ciudad/delete')}}' + '/' + this.idCiudad)
                            .then(function (response) {
                                me.idCiudad = 0;
                                me.titleCiudad = '';
                                me.codigoCiudad= '';
                                me.modalCiudad = 0;
                                me.closeModal();
                            })
                            .catch(function (error) {
                                console.log('error: ' + error);
                          });
                    }
                },
                createciudad() {
                    if (this.titleCiudad == '') {
                        this.errorTitleCiudad = 1;
                        return;
                    }
                    let me = this;
                    axios.post('{{route('ciudadcreate')}}', {
                        'name': this.titleCiudad,
                        'codigo': this.codigoCiudad
                    })
                        .then(function (response) {
                            me.titleCiudad = '';
                            me.codigoCiudad= '';
                            me.errorTitleCiudad = 0;
                            me.modalCiudad = 0;
                            me.closeModal();
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                 },
                changePage: function (page) {
                    this.pagination.current_page = page;
                    this.ciudadQuery(page);
                },
                openModal(type, action, data=[]) {
                    switch (type) {
                        case "ciudad": {
                            switch (action) {
                                case 'create': {
                                    this.modalGeneral = 1;
                                    this.titleModal = 'Creación de Ciudades';
                                    this.messageModal = 'Ingrese el nombre de la Ciudad';
                                    this.modalCiudad = 1;
                                    this.titleCiudad = '';
                                    this.codigoCiudad = '';
                                    this.errorTitleCiudad = 0;
                                    break;
                                }
                                case 'update': {
                                    this.modalGeneral = 1;
                                    this.titleModal = 'Modificación de la ciudad';
                                    this.messageModal = 'Modifique el nombre de la ciudad';
                                    this.modalCiudad = 2;
                                    this.titleCiudad = data['name'];
                                    this.codigoCiudad = data['codigo'];
                                    this.idCiudad = data['id'];
                                    this.errorTitleCiudad = 0;
                                    $('#myModal').modal('show');
                                    break;
                                }
                                case 'delete': {
                                    this.titleModal = 'Eliminación de ciudades';
                                    this.messageModal = 'Nombre de la ciudad';
                                    this.modalCiudad = 3;
                                    this.modalGeneral = 1;
                                    this.titleCiudad =  data['name'];
                                    this.idCiudad = data['id'];
                                    this.errorTitleCiudad = 0;
                                    $('#myModal').modal('show');
                                    break;
                                }

                            }
                            break;
                        }

                    }

                },
            },
        })
    </script>
@endsection