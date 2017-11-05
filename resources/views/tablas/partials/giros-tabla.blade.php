<table class="table table-condensed table-striped table-bordered">
    <thead>
    <tr>
        <th class="text-center">ID</th>
        <th>Codigo</th>
        <th>Nombre</th>
        <th class="text-center">Afecto</th>
        <th class="text-center">Cat.</th>

    </tr>
    </thead>
    <tbody>
    @foreach($giros as $giro)
        <tr>
            <td class="text-center">{{ $giro->id }}</td>
            <td class="text-center">{{ $giro->codigo }}</td>
            <td>{{ $giro->name }}</td>
            <td class="text-center">{{ $giro->afecto }}</td>
            <td class="text-center">{{ $giro->cat_tribut }}</td>

        </tr>
    @endforeach
    </tbody>
</table>
