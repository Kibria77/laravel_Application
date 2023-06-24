@extends('master')

@section('title')
    Manege Student
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <thead class="text-black-50">
                            <td>SL NO</td>
                            <td>Student ID</td>
                            <td>Student Name</td>
                            <td>Student E-mail</td>
                            <td>Student Mobile</td>
                            <td>Action</td>
                        </thead>
                        @foreach($students as $student)
                            <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->mobile }}</td>
                                <td>
                                    <a href="{{ route('edite-data', ['id' => $student->id]) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
