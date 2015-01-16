@extends('templates.default')
@section('title')Testing
@stop
@section('content')
    <div class="row">
        <div class="col-md-4">
            @foreach($trips as $trip)

                <div>{{$trip->city->name}}</div>
                <div>{{$trip->transporter->name}}</div>

            @endforeach
        </div>
        <div class="col-md-4">
            @foreach($transporters as $transporter)
                <h3>{{$transporter->name}}</h3>
                @foreach($transporter->cities as $city)
                    <p>{{$city->name}}</p>
                @endforeach
            @endforeach
        </div>
        <div class="col-md-4">
            @foreach($cities as $city)
                <h3>{{$city->name}}</h3>
                @foreach($city->transporters as $transporter)
                    <p>{{$transporter->name}}</p>
                @endforeach
            @endforeach
        </div>
    </div>
    <hr/>
    <div class="row">
        @foreach($filter_trips as $trip)
            <div class="row">
                <div class="col-md-2">{{$trip->city->name}}</div>
                <div class="col-md-2">{{$trip->transporter->name}}</div>
                <div class="col-md-2">{{$trip->time}}</div>
                <div class="col-md-2">{{$trip->price}}</div>
            </div>
        @endforeach
    </div>
@stop
