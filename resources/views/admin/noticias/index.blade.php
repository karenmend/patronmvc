@extends('layouts.admin')

@section('titulo', 'Administracion | Título')
@section('titulo2', 'Texto del título')

@section('breadcrumbs')
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> 
            <div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Noticias</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($noticias as $noticia)
                            <tr>
                                <td>{{$noticia->titulo}}</td>
                                <td>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>

                        @endforach
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection

@section('estilos')
@endsection