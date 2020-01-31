@extends('layouts.admin')

@section('titulo','Administración | Título')
@section('titulo2','Noticias')

@section('breadcrumbs')
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Crear noticias </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" name="txtTitulo" class="form-control"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection

@section('estilos')
@endsection