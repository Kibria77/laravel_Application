@extends('master')

@section('title')
    Add Student Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header"> Add Student Form</div>
                        <div class="card-body">
                            <h4 class="text-success text-center">{{Session::get('massage')}}</h4>
                            <form action="{{ route('new-student') }}" method="POST">
                                <div class="form-group row">
                                    @csrf
                                    <label for="" class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" required class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">E-mail</label>
                                    <div class="col-md-9">
                                        <input type="email" required class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" required class="form-control" name="mobile"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-block btn-outline-success" value="Create New Student"/>
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
