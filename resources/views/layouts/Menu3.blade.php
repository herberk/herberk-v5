<style>
    .active {
        background: red;
    }
</style>


@extends('layouts.app')
@include('layouts.escritorio2')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<ul class="nav menu">
    <li class="active">
        <a>Inicio</a>
    </li>
    <li>
        <a>Registrar</a>
    </li>
    <li>
        <a>Otra Opcion</a>
    </li>
</ul>

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