@extends('layouts.page')
@section('css')
        <link rel="stylesheet" href="{{ asset('css/slide/index.css') }}">
@endsection
@section('title', 'Painel ')
@section('content_header')
    <h1 class="m-0 text-dark">Slides</h1>
@stop

@section('content')
    @include('includes.alerts')

    <form class="row gol-lg-12" method="POST" enctype="multipart/form-data" action="{{route('home.createSlider')}}">
        @csrf
        <div class="col-lg-4 form-group ">
            <label>Escolher imagem</label>
            <input name="image" type="file" class="form-control" id="customFile">
        </div>
        <div class="col-lg-12">
            <input class="btn btn-success" type="submit" value="Salvar">
        </div>
    </form>

    <hr>

    <div class="row col-lg-12">
        @foreach($slides as $slide)
            <div class="card slide{{$slide->id}}" style="width: 18rem;">
                <img src="{{  url('storage/').'/'.$slide->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a id="{{ $slide->id }}" class="btn btn-danger delete-slide">Apagar</a>
                </div>
            </div>
        @endforeach
    </div>

@stop

@section('js')
    <script src="{{ asset('js/controllers/Slide/SlideController.js') }}"></script>
    <script src="{{ asset('js/modules/slide.js') }}"></script>
@endsection

