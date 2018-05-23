@extends('main')
@section('title','Cenas')
@section('script')
    <script>
        $(function () {
            $("#4").attr("class","active");
        });
    </script>
@stop
@section('asideLeft')
    <p><a href="#">Cenas</a></p>
    <p><a href="#">Piegāde</a></p>
    <p><a href="#">Līgumi</a></p>
    <p><a href="#">U.c.</a></p>
@stop
@section('content')
    <table class="table table-bordered table-striped">
        <tr><th>Pakalpojums</th><th>Cena</th></tr>
        <tr><td>PlayStation party</td><td>200€</td></tr>
        <tr><td>Konsole</td><td>50€</td></tr>
        <tr><td>Spēles</td><td>70€</td></tr>
        <tr><td>Bārs</td><td>20€</td></tr>
        <tr><td>VR</td><td>35€</td></tr>
    </table>
@stop
@section('asideRight')
    <div class="well">
        <p>Reklāma</p>
    </div>
    <div class="well">
        <p>Reklāma</p>
    </div>
@stop