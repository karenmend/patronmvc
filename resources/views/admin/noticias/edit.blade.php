@extends('layouts.admin')

@section('titulo', 'Administracion | Editar noticia')
@section('titulo2', 'Noticia')

@section('breadcrumbs')
@endsection

@section('contenido')

<div class="container-fluid">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> 
                <h3 class="card-title">Editar Noticia {{$noticia->id}}</h3>
            <div>
            <div class="card-body">
            <form method="POST" action="{{route('noticias.store')}}"> 
            @csrf
                <div class="form-group">
                    <label>Tìtulo</label>
                        <input type="text" name="txtTitulo" value="{{$noticia->titulo}}" class="form-control"/>
                </div>
                    <div class="form-group">
                    <label>Cuerpo</label>
                        <textarea class="form-control" rows="12" name="txtCuerpo" value="{{$noticia->cuerpo}}">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection

@section('estilos')
@endsection