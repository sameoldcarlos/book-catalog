@extends('templates.template')

@section('content')
    <h1 class="text-center">CRUD</h1>
    <div class="text-center mt-3 mb-4">
        <a href="{{url('books/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-8 m-auto">
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>

            @foreach($book as $books)
                @php
                    $user = $books->relUsers;
                @endphp
                <tr>
                    <th scope="row">{{$books->id}}</th>
                    <td>{{$books->title}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$books->price}}</td>
                    <td>
                        <a href="{{url("books/$books->id")}}">
                            <button class="btn btn-dark">Ver</button>
                        </a>
                        <a href="{{url("books/{$books->id}/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <form action="{{url("books/{$books->id}")}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deletar</button>
                            
                        </form>
                        
                    </td>
                </tr>

            @endforeach


            </tbody>
        </table>
        {{$book->links()}}
    </div>
@endsection
