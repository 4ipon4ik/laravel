@extends('main')
@section('title','Spēles')
@section('script')
    <script>
        $(function () {
            $("#2").attr("class","active");
        });
    </script>
@stop
@section('asideLeft')
    <p><a href="#">Katalogs</a></p>
    <p><a href="#">Bildes</a></p>
    <p><a href="#">Video</a></p>
@stop
@section('content')
    <a href="{{ url('/') }}/game.php?GameID=1"><img src="{{ url('/') }}/pictures/games/Counter Strike.jpg" alt="Counter Strike GO" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail"></a>
    <a href="{{ url('/') }}/game.php?GameID=3"><img src="{{ url('/') }}/pictures/games/Assassin's creed Origins.jpg" alt="Assassin's creed Origins" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail"></a>
    <a href="{{ url('/') }}/game.php?GameID=6"><img src="{{ url('/') }}/pictures/games/Call of Duty WWII.jpg" alt="Call of Duty WWII" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail"></a>
    <a href="{{ url('/') }}/game.php?GameID=2"><img src="{{ url('/') }}/pictures/games/Grand theft Auto V.jpg" alt="Grand theft Auto V" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail"></a>
    <img src="{{ url('/') }}/pictures/games/For Honor.jpg" alt="For Honor" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
    <img src="{{ url('/') }}/pictures/games/Hitman (2016).jpg" alt="Hitman (2016)" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
    <img src="{{ url('/') }}/pictures/games/Detroit Become Human.jpg" alt="Detroit Become Human" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
    <img src="{{ url('/') }}/pictures/games/Infamous.jpg" alt="Infamous Second Son" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
    <img src="{{ url('/') }}/pictures/games/unch.jpg" alt="Uncharted 4" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
    <img src="{{ url('/') }}/pictures/games/God of War 4.jpg" alt="God of War 4" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
    <img src="{{ url('/') }}/pictures/games/Red Dead Redemption 2.jpg" alt="Red Dead Redemption 2" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
    <img src="{{ url('/') }}/pictures/games/Spider-Man PS4.jpg" alt="Spider-Man PS4" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
    <img src="{{ url('/') }}/pictures/games/The Last of US 2.jpg" alt="The Last of US 2" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
@stop
@section('asideRight')
    <div class="well">
        <p>Reklāma</p>
    </div>
    <div class="well">
        <p>Reklāma</p>
    </div>
@stop
