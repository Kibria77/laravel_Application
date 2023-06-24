@extends('master')

@section('title')
    Full Name
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header"> Create Your Full Name</div>
                        <div class="card-body">
                            <form action="{{ route('name') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">First Name </label>
                                    <div class="col-md-9">
                                        <input type="text" required class="form-control" name="first_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Last Name </label>
                                    <div class="col-md-9">
                                        <input type="text" required class="form-control" name="last_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Full Name </label>
                                    <div class="col-md-9">
                                        <input type="text" readonly class="form-control" value="{{ isset($result) ? $result : '' }}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-block btn-outline-success" name="btn" value="SubmiT"/>
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
