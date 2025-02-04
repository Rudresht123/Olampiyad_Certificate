<!-- exteinding master layout here -->
@extends('admin_panel.comman.masterLayout')
<!-- exteinding master layout here -->
@section('main-content')
{{-- table section satrt here --}}

<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('student.dashboard')}}">Student Information</a></li>
        <li class="breadcrumb-item active" aria-current="page">Student Analytics</li>
    </ol>
</nav>

<div class="custom-card col-lg-12 mx-auto p-3">
    <div class="panel panel-default">
        <div class="panel-body pd-b-0 row">
            <div class="panel-heading mb-3 border-bottom"><b><i class="fa fa-user"></i> Students Registration </b></div>
            <div class="col-lg-12">
                <form action="">
                    <fieldset class="form-fieldset">
                        <legend>Student Basic Information</legend>
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="" class="form-label">Student Name <span class="text-danger">*</span></label>
                                <input type="text" name="student_name" required class="form-control input-sm" placeholder="Student Name..">
                            </div>
                            <div class="col-lg-3">
                                <label for="" class="form-label">Student Father Name <span class="text-danger">*</span></label>
                                <input type="text" name="student_father_name" required class="form-control input-sm" placeholder="Student Father Name..">
                            </div>
                            <div class="col-lg-3">
                                <label for="" class="form-label">Student Father Number <span class="text-danger">*</span></label>
                                <input type="text" name="student_father_number" required class="form-control input-sm" placeholder="Student Father Number..">
                            </div>

                            <div class="col-lg-3">
                                <label for="" class="form-label">Student Father Email </label>
                                <input type="text" name="student_father_email" class="form-control input-sm" placeholder="Student Father Number..">
                            </div>

                            <div class="col-lg-3">
                                <label for="" class="form-label">Student City</label>
                                <input type="text" name="student_city" class="form-control input-sm" placeholder="Student City..">
                            </div>

                            <div class="col-lg-3">
                                <label for="" class="form-label">Student State</label>
                                <input type="text" name="student_state" class="form-control input-sm" placeholder="Student State..">
                            </div>

                            <div class="col-lg-3">
                                <label for="" class="form-label">Student Country</label>
                                <input type="text" name="student_country" class="form-control input-sm" placeholder="Student Country..">
                            </div>


                            <div class="col-lg-3">
                                <label for="" class="form-label">Student Address</label>
                                <textarea name="address" placeholder="Student Address.." class="form-control w-100" id=""></textarea>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset class="form-fieldset mt-4">
                        <legend>Student Academic Information</legend>
                        <div class="row">
                            <div class="col-lg-3">
                                @include('admin_panel.component.schools')
                            </div>
                            <div class="col-lg-3">
                                <label for="" class="form-label">Course/Class <span class="text-danger">*</span></label>
                                <select class="form-control" name="course_id" id="course">

                                </select>
                            </div>
                        </div>
                    </fieldset>
            </div>
            </form>
        </div>
    </div>

</div>
</div>


</div>
{{-- table section satrt here --}}



<!-- course select -->

@endsection