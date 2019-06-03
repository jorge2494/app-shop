@extends('layouts.app')

@section('title', 'Listado de productos')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('http://api-tarhiata.michoacan.travel/files/af0a991f666ca273ed1d7e56e2f9e415/place-549-florenciamorales-4.jpg');">
    
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section text-center">
            <h2 class="title">Listado de productos</h2>

            <div class="team">
                <div class="row">
                    <a href=" {{ url('admin/products/create') }}" class="btn btn-primary btn-round">Nuevo producto</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="col-md-2 text-center">Nombre</th>
                                <th class="col-md-5 text-center">Descripción</th>
                                <th class="text-center">Categoría</th>
                                <th class="text-right">Precio</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td class="text-center">{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->category ? $product->category->name: 'General' }}</td>
                                <td class="text-right">$ {{ $product->price }}</td>
                                <td class="td-actions text-right">
                                   
                                    <form method="post" action="{{ url('/admin/products/'.$product->id) }}">
                                        {{ csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        
                                         <a href="#" type="button" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-info"></i>
                                    </a>
                                    <a href="{{ url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip" title="Editar Producto" class="btn btn-success btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ url('/admin/products/'.$product->id.'/images')}}" type="button" rel="tooltip" title="Imagenes del producto" class="btn btn-warning btn-simple btn-xs">
                                        <i class="fa fa-image"></i>
                                    </a>
                                       <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button> 
                                    </form>
                                    
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
</table>

                {{ $products->links() }}

                </div>
            </div>

        </div>


    </div>

</div>

@include('includes.footer')
@endsection