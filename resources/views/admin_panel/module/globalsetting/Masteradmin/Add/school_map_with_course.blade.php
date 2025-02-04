<!-- exteinding master layout here -->
@extends('admin_panel.comman.masterLayout')
<!-- exteinding master layout here -->

@section('main-content')
{{-- main section start here --}}

@if ($errors->any())

@foreach ($errors->all() as $error)
alert('{{ $error }}');
@endforeach
@endif



{{-- table section satrt here --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Global Setting</li>
        <li class="breadcrumb-item active" aria-current="page">School</li>
    </ol>
</nav>

@php

    if(isset($couresedata)){
   $course_ids=collect($couresedata->schoolCourse)->pluck('course_id')->toArray();
    }

@endphp
<div class="custom-card col-lg-12 mx-auto">
    <div class="panel panel-default">
        <div class="panel-heading"><b><i class="fa fa-list"></i> School</b></div>
        <div class="panel-body pd-b-0 row">
        <form action="{{route('admin.global-setting.map-school-create-withcourse')}}" method="POST">
        @csrf
            <div class="col-lg-6">
                    <label for="" class="form-label">Select School <span class="text-danger">*</span></label>
                    <select name="school_id" class="select2 form-select" id="school_select">
                        <option value="">Please Select School</option>
                        @foreach($schools as $school)
                        <option value="{{$school->id ?? ''}}" {{isset($couresedata) && $couresedata->id == $school->id ? 'selected' : ''}}>
                            <span class="fw-bold">{{$school->school_name ?? ''}}</span> {{$school->contact_no ?? ''}}
                        </option>
                        @endforeach
                    </select>
            </div>
            <div class="col-lg-12 mt-5 mx-auto">
              
                <div class="row">
                    <label for="" class="form-label ms-3">Please Select Courses <span class="text-danger">*</span></label>
                    @foreach($courses as $course)
                    <div class="col-lg-2">
                        <div class="input-group mb-3">
                            <div class="input-group-text" style="background-color: #caeadb;">
                                <input class="form-check-input mt-0" name="course_id[]" {{$loop->iteration == 1 ? 'required' : ''}} type="checkbox" value="{{$course->id ?? ''}}"  {{isset($course_ids) && in_array($course->id,$course_ids) ? 'checked' : ''}} aria-label="Checkbox for following text input">
                            </div>
                            <input type="text" value="{{$course->course_name ?? ''}}" class="form-control bg-light" aria-label="Text input with checkbox">
                            <div class="input-group-text">
                                <input type="text" style="border:0px !important;" class="form-control1 bd-0 bg-success-light rounded wd-30 text-center" value="{{$loop->iteration}}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary w-100"><i class="fa fa-edit"></i> Update</button>
                       
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#school_select').on('change', function(e) {
            e.preventDefault();
            let selectedValue = $(this).val();
            let actionUrl = "{{ route('admin.global-setting.map-school-withcourse-get-data', ':id') }}";
            
            actionUrl = actionUrl.replace(':id', selectedValue);

            // Redirect to the new URL
            window.location.href = actionUrl; // This will navigate to the new URL
        });
    });
</script>

{{-- table section satrt here --}}
@endsection