@extends('master')

@section('title')
    Product Details
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-img h-700">
                        <img src="{{ $data['img'] }}" alt="" class="card-img h-700"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body h-700">
                        <h1>{{ $data['name'] }}</h1>
                        <p> {{ $data['price'] }}</p>
                        <p>{{ $data['descriiption'] }}</p>
                        <hr/>
                        <button type="button" class="btn btn-outline-success"> Add To Card </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
