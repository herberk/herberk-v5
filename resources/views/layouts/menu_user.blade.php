@extends('layouts.app')
@include('layouts.escritorios.escritorio_user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <h3 class="text-center">Usuarios</h3>
                <li><a href="#"><i class="fa fa-user fa-fw" aria-hidden="true">
                        </i> Editar Perfil</a></li>
                <li><a href="#"><i class="fa fa-users fa-fw" aria-hidden="true">
                        </i> Lista de usuarios</a></li>
                <li><a href="#"><i class="fa fa-key fa-fw" aria-hidden="true">
                        </i> Cambio de clave</a></li>
            </ul>

        </div>
    </div>
</div>

<script>
    $(function() {
        // elementos de la lista
        var menues = $(".nav li");
        // manejador de click sobre todos los elementos
        menues.click(function() {
            // eliminamos active de todos los elementos
            menues.removeClass("active");
            // activamos el elemento clicado.
            $(this).addClass("active");
        });
    });
</script>