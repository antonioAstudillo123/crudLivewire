<div>
    @if (session()->has('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="card mt-5">
            <div class="card-header bg-secondary text-white">
                Formulario de docentes
            </div>
            <div class="card-body">
                <h5 class="card-title bg-emerald-300">Agregar docente al sistema</h5>
                <form class="p-2"  wire:submit="save">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">PWC</label>
                                <input  wire:model.blur="pwc" type="text" class="form-control" id="" placeholder="Ingresa el código de pwc del docente">
                                @error('pwc') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Nombre completo</label>
                                <input wire:model.blur="nombre" type="text" class="form-control" id="" placeholder="Ingresa el nombre completo del docente">
                                @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Correo</label>
                                <input wire:model.blur="correo" type="text" class="form-control" id="" placeholder="Ingresa el correo del docente">
                                @error('correo') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Telefono</label>
                                <input wire:model.blur="telefono" type="text" class="form-control" id="" placeholder="Ingresa el telefono del docente">
                                @error('telefono') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
