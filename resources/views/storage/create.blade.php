@extends('layout.main')
@section('title', 'MSC')

@section('content')

    <h1>Cadastrar produto</h1>
    <form action="create" method="POST">
        @csrf
        
            

            
        
        <button type="submit" class="btn btn-light">Cadastrar</button>
        <a type="submit" href="storage.products" class="btn btn-danger">Cancelar</a>
      </form>
@endsection