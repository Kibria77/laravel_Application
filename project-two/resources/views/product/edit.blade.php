@extends('master')

@section('title')
    Edite Product
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Add Product Form</div>
                    <div class="card-body">
                        <h3 class="text-center text-success">{{ Session::get('massege') }}</h3>
                        <form action="{{ route('update-product', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" value="{{$product->name}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Category Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="category" value="{{$product->category}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Brand Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="brand" value="{{$product->brand}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Product Price</label>
                                <div class="col-md-9">
                                    <input type="number" name="price" value="{{$product->price}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Product Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" class="form-control">{{$product->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control-file"/>
                                    <img src="{{asset($product->image)}}" alt="" height="120" width="100"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-block btn-outline-success" value="Update Product"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
