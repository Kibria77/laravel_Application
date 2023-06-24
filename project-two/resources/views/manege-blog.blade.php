@extends('master')

@section('title')
    Manege Student
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center text-success">{{ Session::get('masseges') }}</h4>
                    <table class="table table-bordered table-hover">
                        <thead class="text-dark">
                        <td>SL NO</td>
                        <td>Blog ID</td>
                        <td>Blog Name</td>
                        <td>Blog Location</td>
                        <td>Blog Description</td>
                        <td>Action</td>
                        </thead>
                        @foreach($blogs as $blog)
                            <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->blog_name }}</td>
                                <td>{{ $blog->blog_location }}</td>
                                <td>{{ $blog->description }}</td>
                                <td>
                                    <a href="{{ route('edit-blog', ['id' => $blog->id]) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-danger btn-sm" onclick="deleteStudent({{ $blog->id }})">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form action="{{ route('delete-blog', ['id' => $blog->id]) }}" id="deleteStudentForm{{ $blog->id }}" method="POST">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script>
        function deleteStudent(id)
        {
            event.preventDefault();
            var check = confirm('Are You Sure Delete This...');
            if(check)
            {
                document.getElementById('deleteStudentForm'+id).submit();
            }
        }

    </script>
@endsection
