@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">En que estas pensando ahora</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="">
                        <div class="form-group">
                            <label for="thought">Ahora estoy pensando en: </label>
                            <input type="text" class="form-control" name="thought">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Enviar pensamiento
                        </button>                        
                    </form>
                </div>
            </div>
        <br/>
            <div class="card">
                <div class="card-header">Publicado en 09/01/2020</div>

                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil consectetur iste molestias! Nemo consectetur asperiores ratione eius tenetur obcaecati atque nam, dolores expedita quo quam cupiditate, fuga vero sit possimus.</p>
                </div>

                <div class="panel-footer">
                    <button class="btn btn-default">
                        Editar
                    </button>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>
                </div>
            </div>
            <thought-component></thought-component>


        </div>
    </div>
</div>
@endsection
