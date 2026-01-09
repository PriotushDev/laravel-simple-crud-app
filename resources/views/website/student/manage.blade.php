@extends('website.master')

@section('title')
    student add
@endsection

@section('body')

    <!-- ===== BODY ===== -->
    <div class="container my-5">
        <div class="card shadow">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Student List</h5>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Class</th>
                            <th>Mobile</th>
                            <th>Blood Group</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->father_name}}</td>
                            <td>{{$student->class}}</td>
                            <td>{{$student->mobile}}</td>
                            <td>{{$student->blood_group}}</td>
                            <td>
                                <a href="{{route('student.edit', ['id' => $student->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{route('student.delete', ['id' => $student->id])}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection


