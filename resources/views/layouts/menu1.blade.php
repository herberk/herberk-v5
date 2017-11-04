<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="#">Overview </a></li>
                <li><a href="escritorioblanco">Escritorio Blanco</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item</a></li>
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
                <li><a href="">More navigation</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
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