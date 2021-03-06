@extends('layouts.plantillabase');

@section('contenido')
<a href="productos/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->ID}}</td>
            <td>{{$producto->Codigo}}</td>
            <td>{{$producto->Descripcion}}</td>
            <td>{{$producto->Cantidad}}</td>
            <td>{{$producto->Precio}}</td>
            <td>
                <a class="btn btn-info">Editar</a>
                <button class="btn btn-danger">borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

