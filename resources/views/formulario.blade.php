@extends('template')

@section('desarrollo')

@if (session()->has('correcto'))
{!!
    "<script>
        Swal.fire(
        'Registro Correcto!',
        'Se almaceno en la Base de datos',
        'success'
)
    </script>"
!!}
@endif


<div class="container col-md-8 offset-md-2">
    <br>
    <div class="card text-left mb-5 border">

        <div class="card-body">

            <div>
                <h1 class="mb-4 fst-italic" style="color: black">Formulario</h1>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    @endforeach
                @endif

            </div>

            <form class="row row-cols-lg-auto g-3 align-items-center" action="registrar" method="POST">
                @csrf
                    <div class="col-12">
                    <input type="text" class="form-control" name="txtUsuario" id="nombre" placeholder="Nombre usuario" value="{{old('txtUsuario')}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('txtUsuario')}}
                    </p>
                    <!--</div>-->
                
                    <!--<div class="col-12">-->
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Corre</label>
                    <div class="input-group">
                        <div class="input-group-text">@</div>
                        <input type="email" class="form-control" id="inlineFormInputGroupUsername" name="txtCorreo" placeholder="Correo..." value="{{old('txtCorreo')}}">
                        
                    </div>
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('txtCorreo')}}
                    </p>
                    <!--</div>-->
                
                    <!--<div class="col-12">-->
                    <input type="password" class="form-control" name="txtContra" placeholder="Contraseña" value="{{old('txtContra')}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('txtContra')}}
                    </p>
                    <!--</div>-->
                
                    <!--<div class="col-12">-->
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