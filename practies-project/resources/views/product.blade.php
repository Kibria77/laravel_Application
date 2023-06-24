@extends('master')

@section('title')
    Product List
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <div class="">
                            <a href="{{ $product['img'] }}" class="card-img-top"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{ $product['name'] }}</h3>
                            <h5 class="card-text">{{ $product['price'] }}</h5>
                            <hr/>
                            <button type="button" class="btn btn-outline-success">Details</button>
                            <button type="button" class="btn btn-outline-warning">Add to Card</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
