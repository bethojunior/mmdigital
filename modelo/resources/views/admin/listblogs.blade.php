@extends('layouts.page')
@section('css')
{{--    <link rel="stylesheet" href="{{ asset('css/home/init.css') }}">--}}
@endsection
@section('title', 'Painel ')
@section('content_header')
    <h1 class="m-0 text-dark">Listagem de Blogs</h1>
@stop

@section('content')
    @include('includes.alerts')
    <div class="row col-lg-12">
        @foreach($blogs as $blog)
            <div class="card ml-2 blog{{$blog->id}}" style="width: 18rem;">
                <img  class="card-img-top"  src="{{  url('storage').'/'.$blog->image }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p class="card-text">{{ substr($blog->content,0,400) }} ...</p>
                    <a id="{{ $blog->id }}" href="#" class="btn btn-danger delete-blog">Apagar</a>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('js')
    <script src="{{ asset('js/controllers/Blog/BlogController.js') }}"></script>
    <script src="{{ asset('js/modules/blog/list.js') }}"></script>
@endsection

