@extends('layouts.default')
@section('content')
    <div class="row center">
        <img src="/img/restHome.png">
        <div class="row center">
            <img src="/img/smallIcon.png">
            <p>Find the perfect place</p>
        </div>
    </div>
    <div id="app" class="row center">
        <component-main-home :some='@json($response)'></component-main-home>
    </div>
@stop
