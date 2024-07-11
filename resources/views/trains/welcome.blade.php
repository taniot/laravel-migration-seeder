@extends('layouts.demo.app')


@section('main')
    <h1>Train Page</h1>

    <div class="row">
        @foreach ($trains as $train)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->train_code }}</h5>
                        <p class="card-text">
                            Da: {{ $train->departure_station }}<br>
                            Data partenza: {{ $train->departure_time }}
                            <hr>
                            Da: {{ $train->arrival_station }}<br>
                            Data arrivo: {{ $train->arrival_time }}
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
