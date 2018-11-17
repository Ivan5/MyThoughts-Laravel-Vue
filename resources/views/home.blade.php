@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¿En qué estás pensando ahora?</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="">
                        <div class="form-group">
                            <label for="thought">Ahora estoy pensando en: </label>
                            <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Pensamiento</button>
                    </form>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Publicado en 17/0/2018</div>

                <div class="card-body">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit eum asperiores officiis blanditiis modi, perferendis explicabo nam cumque iste nostrum pariatur voluptatum, optio saepe? Perferendis eos voluptatibus repudiandae saepe laudantium?</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-default">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
