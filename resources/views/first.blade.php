@extends('main')
@section('title', 'Galvenā')
@section('script')
    <script>
        $(function () {
            $("#1").attr("class","active");
        });
    </script>
@stop
@section('asideLeft')
    <p><a href="#">Ziņas</a></p>
    <p><a href="#">Navi</a></p>
    <p><a href="#">Gācija</a></p>
    <p><a href="#">Visādi jaukumi</a></p>
@stop
@section('content')
    <h1>Laipni lūgti spēļu fanu portālā!</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{ url('/') }}/pictures/index/a.png" alt=":)">
            </div>

            <div class="item">
                <img src="{{ url('/') }}/pictures/index/b.png" alt=":)">
            </div>

            <div class="item">
                <img src="{{ url('/') }}/pictures/index/c.png" alt=":)">
            </div>

            <div class="item">
                <img src="{{ url('/') }}/pictures/index/d.jpg" alt=":)">
            </div>

            <div class="item">
                <img src="{{ url('/') }}/pictures/index/e.jpg" alt=":)">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <hr>
    <p>Pakalpojumi:</p>
    <ul>
        <li>Ziņas un aktuāla informācija par konkrētu spēli mūsu mājaslapā</li>
        <li>Spēļu iegāde/noma</li>
        <li>Konsoļu noma mūsu veikalā</li>
    </ul>
@stop
@section('asideRight')
    <div class="well">
        <p>Reklāma</p>
    </div>
    <div class="well">
        <p>Reklāma</p>
    </div>
@stop