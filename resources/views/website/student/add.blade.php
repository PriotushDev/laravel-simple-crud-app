@extends('website.master')

@section('title')
    student add
@endsection

@section('body')

    <!-- ===== BODY ===== -->
    <div class="container my-5">
        <div class="card col-md-8 shadow mx-auto">
            <div class="card-header bg-success text-white  col-md-12 ">
                <h5 class="col-md-12">Create Student</h5>
            </div>

            <div class="card-body">
                <form action="{{route('student.create')}}" method="POST">
                    @csrf
                    <p>{{session('message')}}</p>
                    <div class="row g-3">

                        <div class="col-md-12">
                            <label class="form-label">Student Name *</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Mobile *</label>
                            <input type="tel" name="mobile" class="form-control" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Father's Name *</label>
                            <input type="text" name="father_name" class="form-control" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Mother's Name *</label>
                            <input type="text" name="mother_name" class="form-control" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Email *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Class *</label>
                            <select name="class" class="form-select" required>
                                <option value="">Select Class</option>
                                <option>Six</option>
                                <option>Seven</option>
                                <option>Eight</option>
                                <option>Nine</option>
                                <option>Ten</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label  class="form-label">Blood Group *</label>
                            <select name="blood_group" class="form-select" required>
                                <option value="">Select</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>O+</option>
                                <option>O-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Present Address *</label>
                            <textarea name="address" class="form-control" rows="2" required></textarea>
                        </div>

                    </div>

                    <div class="mt-4 text-end col-md-12">
                        <button type="submit" class="btn btn-info">Create New Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
