<div>
    <div class="container p-3">
        <div class="p-3">
            <input wire:model.live='search' type="text" class="form-control" placeholder="Buscar docente...">
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre completo</th>
                <th scope="col">Correo</th>
                <th scope="col">Teléfono</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($docentes as $docente)
                <tr>
                    <td>{{ $docente->id_pwc }}</td>
                    <td>{{ $docente->nombres }}</td>
                    <td>{{ $docente->correo }}</td>
                    <td>{{ $docente->telefono }}</td>
                </tr>

            @endforeach
            </tbody>
          </table>



    </div>

    <div class="container d-flex justify-center">
        {{ $docentes->links() }}
    </div>

</div>
