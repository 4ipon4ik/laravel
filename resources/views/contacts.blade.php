@extends('main')
@section('title','Kontakti')
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
    <p>SIA “Spēļu fans”</p>
    <p>Robežu 2, Rīga, LV-1111</p>
    <p>Tālrunis: +37126164798</p>
    <p>E-pasts: sfans@gmail.com</p>
    <p>Darba laiks:</p>
    <p>P. 14-18</p>
    <p>O. 14-18</p>
    <p>T. 14-18</p>
    <p>C. 14-18</p>
    <p>Pk. 14-16</p>
    <p>S. Slēgts</p>
    <p>Sv. Slēgts</p>
    <div class="col-sm-12 text-left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.04546185604!2d24.084808641941976!3d56.91999789730693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eed04bb9242559%3A0x8e8cfbf89fce73d8!2zUm9iZcW-dSBpZWxhIDIsIFplbWdhbGVzIHByaWVrxaFwaWxzxJN0YSwgUsSrZ2EsIExWLTEwMDQ!5e0!3m2!1sru!2slv!4v1511623771854" width="1080" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@stop
@section('asideRight')
    <div class="well">
        <p>Reklāma</p>
    </div>
    <div class="well">
        <p>Reklāma</p>
    </div>
@stop