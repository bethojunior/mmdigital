@extends('layouts.page')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home/init.css') }}">
@endsection
@section('title', 'Painel ')
@section('content_header')
    <h1 class="m-0 text-dark">Blog</h1>
@stop

@section('content')
    @include('includes.alerts')
    <form class="row gol-lg-12" method="POST" enctype="multipart/form-data" action="{{route('blog.create')}}">
        @csrf
        <div class="col-lg-4 form-group">
            <label>Titulo</label>
            <input name="title" class="form-control">
        </div>
        <div class="col-lg-4 form-group ">
            <label>Escolher imagem</label>
            <input name="image" type="file" class="form-control" id="customFile">
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-8 form-group">
            <label>Conteúdo</label>
            <textarea name="content" class="form-control"></textarea>
        </div>
        <div class="col-lg-12">
            <input class="btn btn-success" type="submit" value="Salvar">
        </div>
    </form>

    <div class="col-lg-12">
        <hr>
    </div>

@stop

@section('js')
    <script src="{{ asset('js/modules/home/init.js') }}"></script>
@endsection

