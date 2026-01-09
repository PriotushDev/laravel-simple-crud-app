@extends('website.master')

@section('title')
    home
@endsection

@section('body')

    <div class="container py-3">
        <div class="row">
            <h2 class="text-center text-danger color-red">Student Add and Management System</h2>
            <div class="row col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center text-info">Student Profile</div>
                    <div class="card-body">
                        <img src="{{asset('/')}}student/priotush_sd.jpg" alt="" width="50%" class="mx-auto d-block" />
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet et, quibusdam. Ab dolor exercitationem in iusto labore laudantium minima neque!</p>

                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-info">Details Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
