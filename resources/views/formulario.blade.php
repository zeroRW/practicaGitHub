@extends('template')

@section('desarrollo')

<div class="container col-md-8 offset-md-2">
    <br>
    <div class="card text-left mb-5 border">

        <div class="card-body">

            <div>
                <h1 class="mb-4 fst-italic" style="color: black">Formulario</h1>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{$error}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endforeach
                @endif

            </div>

            <form class="row row-cols-lg-auto g-3 align-items-center" action="registrar" method="POST">
                @csrf
                    <div class="col-12">
                    <input type="text" class="form-control" name="txtUsuario" placeholder="Nombre usuario" value="{{old('txtUsuario')}}">
                    </div>

                    <div class="col-12">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Corre</label>
                    <div class="input-group">
                        <div class="input-group-text">@</div>
                        <input type="email" class="form-control" id="inlineFormInputGroupUsername" name="txtCorreo" placeholder="Correo..." value="{{old('txtCorreo')}}">
                    </div>
                    </div>
                
                    <div class="col-12">
                    <input type="password" class="form-control" name="txtContra" placeholder="Contraseña" value="{{old('txtContra')}}">
                    </div>
                
                    <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                        <label class="form-check-label" for="inlineFormCheck">
                        Aceptas politicas de privacidad
                        </label>
                    </div>
                    </div>
                
                    <div class="col-12">
                    <button type="submit" class="btn btn-danger">Guardar</button>
                    </div>
            </form>
        </div>
    </div>
</div>

    
@stop