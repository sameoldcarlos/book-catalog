@extends('templates.template')

@section('content')
    <h1 class="text-center">Editar</h1>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                   {{$erro}}<br>
                @endforeach
            </div>
        @endif

        <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
            @method('PUT')
            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Titulo" value= "{{$book->title}}" required><br>
            <select class="form-control" name="id_user" id="id_user" required>
                <option value="{{$book->relUsers->id}}">{{$book->relUsers->name}}</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select><br>
            <input class="form-control" type="text" name="pages" id="pages" placeholder="Páginas" value="{{$book->pages}}" required><br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço" value="{{$book->price}}" required><br>
            <input class="btn btn-primary" type="submit" value="Salvar">

        </form>
    </div>
@endsection
