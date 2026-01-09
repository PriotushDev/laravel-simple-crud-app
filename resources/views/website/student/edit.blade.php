@extends('website.master')

@section('title')
    student edit
@endsection

@section('body')

    <!-- ===== BODY ===== -->
    <div class="container my-5">
        <div class="card col-md-8 shadow mx-auto">
            <div class="card-header bg-success text-white  col-md-12 ">
                <h5 class="col-md-12">Edit Student</h5>
            </div>

            <div class="card-body">
                <form action="{{route('student.update', ['id' => $student->id])}}" method="POST">
                    @csrf
                    <p>{{session('message')}}</p>
                    <div class="row g-3">

                        <div class="col-md-12">
                            <label class="form-label">Student Name *</label>
                            <input type="text" name="name" class="form-control" value="{{$student->name}}" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Mobile *</label>
                            <input type="tel" name="mobile" class="form-control" value="{{$student->mobile}}" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Father's Name *</label>
                            <input type="text" name="father_name" class="form-control" value="{{$student->father_name}}" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Mother's Name *</label>
                            <input type="text" name="mother_name" class="form-control" value="{{$student->mother_name}}" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Email *</label>
                            <input type="email" name="email" class="form-control" value="{{$student->email}}" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Class *</label>
                            <select name="class" class="form-select" required>
                                <option value="">Select Class</option>
                                <option value="six"   @selected($student->class) == "six">Six</option>
                                <option value="seven" @selected($student->class) == "seven")>Seven</option>
                                <option value="eight" @selected($student->class) == "eight")>Eight</option>
                                <option value="nine"  @selected($student->class) == "nine")>Nine</option>
                                <option value="ten"   @selected($student->class) == "ten")>Ten</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label  class="form-label">Blood Group *</label>
                            <select name="blood_group" class="form-select" required>
                                <option value="">Select</option>
                                <option value="A+"   @selected($student->blood_group) == "A+")>A+</option>
                                <option value="A-"   @selected($student->blood_group) == "A-")>A-</option>
                                <option value="B+"   @selected($student->blood_group) == "B+")>B+</option>
                                <option value="B-"   @selected($student->blood_group) == "B-")>B-</option>
                                <option value="O+"   @selected($student->blood_group) == "O+")>O+</option>
                                <option value="O-"   @selected($student->blood_group) == "A+")>O-</option>
                                <option value="AB+"   @selected($student->blood_group) == "AB+")>AB+</option>
                                <option value="AB-"   @selected($student->blood_group) == "AB-")>AB-</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Present Address *</label>
                            <textarea name="address" class="form-control" rows="2" required>{{$student->address}}</textarea>
                        </div>

                    </div>

                    <div class="mt-4 text-end col-md-12">
                        <button type="submit" class="btn btn-info">Update Student Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

