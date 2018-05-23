@extends('main')
@section('title','Galerija')
@section('script')
    <script>
        $(function () {
            $("#3").attr("class","active");
        });
    </script>
@stop
@section('asideLeft')
    <p><a href="#">2015. gads</a></p>
    <p><a href="#">2016. gads</a></p>
    <p><a href="#">2017. gads</a></p>
@stop
@section('content')
    @for($i = 0;$i<15;$i++)
        <a href="{{ url('/') }}/pictures/gallery/bilde{{$i}}.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="{{ url('/') }}/pictures/gallery/bilde{{$i}}.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
    @endfor
@stop
@section('asideRight')
    <div class="well">
        <p>Reklāma</p>
    </div>
    <div class="well">
        <p>Reklāma</p>
    </div>
@stop