@extends('master')

@section('title')
    BITM Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>{{$a}}</h1>
                            <h1>{{$sakil}}</h1>
                            <h4>{{ $spashal }}</h4>
                        </div>
                        <div class="card-body">
                            @foreach($fahim as $key => $value)
                                @foreach($value as $item)
                                    <span>{{ $item }}</span>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
