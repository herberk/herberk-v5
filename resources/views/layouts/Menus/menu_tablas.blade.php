<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <h3 class="text-center">Tablas maestros</h3>
               <li><a  href="{{ url('#') }}"><i class="fa fa-address-card fa-fw" aria-hidden="true">
                       </i> Regiones</a></li>
                <li><a  href="{{ url('#') }}"><i class="fa fa-id-card-o fa-fw" aria-hidden="true">
                        </i>&nbsp;Comunas</a></li>
                <li><a href="{{url('#')}}"><i class="fa fa-address-book-o" aria-hidden="true">
                        </i> Ciudades</a></li>
                 <li><a href="{{ url('/giros') }}"><i class="fa fa-address-book" aria-hidden="true">
                         </i> Giros</a></li>
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