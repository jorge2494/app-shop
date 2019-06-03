@extends('layouts.app')

@section('title', 'registrar producto')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('http://api-tarhiata.michoacan.travel/files/af0a991f666ca273ed1d7e56e2f9e415/place-549-florenciamorales-4.jpg');">

</div>

<div class="main main-raised">
    <div class="container">


        <div class="section">
            <h2 class="title text-center">Registrar nuevo producto</h2>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action=" {{ url('/admin/products')}}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                   <div class="form-group label-floating">
                       <label class="control-label">Nombre del producto</label>
                       <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                   </div>
               </div>
               
               
               <div class="col-sm-6">
                   <div class="form-group label-floating">
                       <label class="control-label">Precio del producto</label>
                       <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                   </div>
               </div>
                </div>
               
                   <div class="form-group label-floating">
                       <label class="control-label">Descripción del producto</label>
                       <input type="text" name="description" class="form-control" value="{{ old('description') }}">
                   </div>
               <textarea class="form-control" placeholder="Descripción extensa del producto" rows="5" name="long_description">{{ old('long_description') }}</textarea>
               <button class="btn btn-primary">Registrar producto</button>
               <a href="{{ url('/admin/products') }}" class="btn btn-default">Cancelar</a>
            </form>

        </div>

    </div>

</div>

@include('includes.footer')
@endsection