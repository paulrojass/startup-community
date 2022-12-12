@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('startups.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" :v-model="name" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input class="form-control" type="file" id="logo" name="logo">
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Ubicación</label>
                            <select class="form-select" aria-label="Default select example" name="country" id="country" required>
                                <option selected>-- Seleccione --</option>
                                <option value="España">España</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <p v-if="show_msg">Guardado con exito</p>
                        </div>
                        <button type="submit" class="btn btn-primary me-5">Guardar</button>
                        <button type="reset" class="btn btn-primary me-5">Borrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection