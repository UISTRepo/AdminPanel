@extends('templates.default')
@section('title')Transport
@stop
@section('content')
    @include('partials.navigation')
    <div ng-app="transportApp">
        <ul class="nav nav-tabs" role="tablist" id="tabs">
            <li id="ng-tab1" role="presentation" class="active"><a href="#/home">Home</a></li>
            <li id="ng-tab2" role="presentation"><a href="#/transporters">Transporters</a></li>
            <li id="ng-tab3" role="presentation"><a href="#/destinations">Destinations</a></li>
        </ul>
        <br/>
        <div ng-view class="theSPA"></div>
    </div>

    <script src="{{asset('bower_components/angular/angular.min.js')}}"></script>
    <script src="{{asset('bower_components/angular-route/angular-route.min.js')}}"></script>
    <script src="{{asset('bower_components/angular-sanitize/angular-sanitize.min.js')}}"></script>

    <script src="{{asset('scripts/app.js')}}"></script>

    <script src="{{asset('scripts/controllers/main.js')}}"></script>
    <script src="{{asset('scripts/controllers/transporters.js')}}"></script>
    <script src="{{asset('scripts/controllers/destinations.js')}}"></script>

    <script src="{{asset('scripts/services/TabService.js')}}"></script>
@stop

