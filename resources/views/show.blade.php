@extends('templates.template')

@section('content')
    <h1 class = "text-center">Visualizar</h1>
    <div class="col-8 m-auto">
        @php
            $user = $book->relUsers;
        @endphp
        ID: {{$book->id}} <br>
        Titulo: {{$book->title}} <br>
        Preço: R$ {{$book->price}} <br>
        Páginas: {{$book->pages}} <br>
        Autor: {{$user->name}} <br>
        Email do autor: {{$user->email}}
    </div>
@endsection
