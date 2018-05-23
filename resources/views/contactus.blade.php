@extends('main')
@section('title','Saziņa')
@section('script')
    <script>
        $(function () {
            $("#7").attr("class","active");
        });
    </script>
@stop
@section('asideLeft')
    <p><a href="#">Navi</a></p>
    <p><a href="#">Gācija</a></p>
    <p><a href="{{ url('/contacts') }}">Kontakti</a></p>
    <p><a href="{{ url('/contactus') }}">Saziņa</a></p>
@stop
@section('content')
    <form action="{{ url('/contactus') }}" method="post">
        <div class="form-group">
            <label for="usr">Vārds:</label>
            <input type="text" class="form-control" id="usr" placeholder="Ievadi vārdu" name="name">
        </div>
        <div class="form-group">
            <label for="email">E-pasts:</label>
            <input type="email" class="form-control" id="email" placeholder="Ievadi e-pastu" name="email">
        </div>
        <div class="form-group">
            <label for="comment">Ziņojums:</label>
            <textarea class="form-control" rows="5" id="comment" placeholder="Man garšo banāni" name="messege"></textarea>
        </div>
        <button type="submit" class="btn btn-default" name="send">Sūtīt</button>
    </form>
@stop
@section('asideRight')
    <div class="well">
        <p>Reklāma</p>
    </div>
    <div class="well">
        <p>Reklāma</p>
    </div>
@stop