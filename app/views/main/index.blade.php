@extends('templates.default')
@section('title')Transport
@stop
@section('content')
    @include('partials.navigation')
    <div ng-app="transportApp">
        <ul class="nav nav-tabs" role="tablist" id="tabs">
            <li id="ng-tab1" role="presentation" class="active"><a href="#/home">Home</a></li>
            <li id="ng-tab2" role="presentation"><a href="#/data">Data</a></li>
            <li id="ng-tab3" role="presentation"><a href="#/routes">Routes</a></li>
        </ul>
        <br/>
        <div ng-view class="theSPA"></div>
    </div>

    <script src="{{asset('bower_components/angular/angular.min.js')}}"></script>
    <script src="{{asset('bower_components/angular-route/angular-route.min.js')}}"></script>
    <script src="{{asset('bower_components/angular-sanitize/angular-sanitize.min.js')}}"></script>
    <script src="{{asset('bower_components/angular-utils-pagination/dirPagination.js')}}"></script>

    {{--config file--}}
    <script src="{{asset('scripts/app.js')}}"></script>

    {{--controllers--}}
    <script src="{{asset('scripts/controllers/main.js')}}"></script>
    <script src="{{asset('scripts/controllers/data.js')}}"></script>
    <script src="{{asset('scripts/controllers/routes.js')}}"></script>

    {{--directives--}}
    <script src="{{asset('scripts/directives/cities-list.js')}}"></script>
    <script src="{{asset('scripts/directives/transporters-list.js')}}"></script>
    <script src="{{asset('scripts/directives/ng-confirm-click.js')}}"></script>

    {{--services--}}
    <script src="{{asset('scripts/services/TabService.js')}}"></script>
    <script src="{{asset('scripts/services/CityService.js')}}"></script>
    <script src="{{asset('scripts/services/TransporterService.js')}}"></script>
@stop

