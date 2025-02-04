<!-- exteinding master layout here -->
@extends('admin_panel.comman.masterLayout')
<!-- exteinding master layout here -->
@section('main-content')
{{-- table section satrt here --}}

<!-- sub navbar section start here -->
@include('admin_panel.module.sub-navbar.student-information-navbar')
<!-- sub navbar section start here -->

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
            <div class="col-lg-12">


                <!-- chart section start here -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel-heading mb-3"><b><i class="fa fa-user"></i>Students Class Wise Gender Count </b></div>

                        <div data-label="Class Wise Gender Report" class="df-example">
                            <div class="ht-250 ht-lg-300"><canvas id="chartBar2"></canvas></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="panel-heading mb-3"><b><i class="fa fa-user"></i>Students Class Wise Total Gender Count </b></div>
                    <div data-label="Class Wsie Student Total Gender Report" class="df-example">
                            <div class="ht-250 ht-lg-300"><canvas id="chartBar2"></canvas></div>
                        </div>
                    </div>
                </div>
                <!-- chart section end here -->

            </div>
        </div>
    </div>

</div>
</div>


</div>
{{-- table section satrt here --}}
@endsection