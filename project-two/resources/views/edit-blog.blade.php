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
                            <h4 class="text-center text-success">{{ Session::get('massage') }}</h4>
                            <form action="{{ route('update', ['id' => $createBlog->id]) }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"> Bloge Name </label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ $createBlog->blog_name }}" class="form-control" name="blog_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"> Blog Location </label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ $createBlog->blog_location }}" class="form-control" name="blog_location"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"> Blog Description </label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control">{{ $createBlog->description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">  </label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-block btn-outline-success" value="Update Blog INFO"/>
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
