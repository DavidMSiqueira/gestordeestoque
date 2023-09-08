@extends('layout.main')
@section('title', 'MSC')

@section('content')

    <h1>Lista de itens</h1>


    <ul>
        @foreach ($products as $product)         
            <li>{{ $product->name }} | <a href="{{ route('products.edit', ['product' => $product->id]) }}">Edit</a> | <a href="">Delete</a></li> 
            <!-- Adicione mais campos conforme necessário -->
        @endforeach
    </ul>

    <a type="button" href="/storage/create" class="btn btn-light">Cadastrar itens</a>
@endsection