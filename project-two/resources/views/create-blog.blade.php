@extends('master')

@section('title')
    Blog Create Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Blog Information Create</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{ Session::get('massege') }}</h4>
                            <form action="{{ route('create-blog') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"> Bloge Name </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="blog_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"> Blog Location </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="blog_location"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"> Blog Description </label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">  </label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-block btn-outline-success"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
