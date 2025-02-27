<!-- exteinding master layout here -->
@extends('admin_panel.comman.masterLayout')
<!-- exteinding master layout here -->

<!-- model section start here -->
@section('ModelTitle','Add New School')
@section('ModelTitleInfo','Manage Education School')
@section('EditModelTitle','Edit School ')
@section('EditModelTitleInfo','Manage Education School')
@section('ModelSize', 'modal-xl')
@section('AddModelPage')
    @include('admin_panel.module.globalsetting.Masteradmin.Add.add_school')
@endsection

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

<div class="custom-card col-lg-12 mx-auto">
    <div class="panel panel-default">
        <div class="panel-heading"><b><i class="fa fa-list"></i> School</b></div>
        <div class="panel-body pd-b-0 row">
            <div class="col-lg-2">
            @include('admin_panel.layouts.actionbutton.ActionButton')
            </div>
            <div class="col-lg-10 vhr">
            <table id="example2" class="table datatable table-bordered dataTable example2" >
                    <thead class="bg-light fw-bold">
                        <tr class="py-3">
                            <th class="fw-bold">Sr. No.</th>
                            <th class="fw-bold">School Name</th>
                            <th class="fw-bold">Print Certificate</th>
                            <th class="fw-bold">Phone</th>
                            <th class="fw-bold">Email</th>
                            <th class="fw-bold">No.Student</th>
                            <th class="fw-bold">Principle Name</th>
                            <th class="fw-bold">Is-Active</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if(isset($schoolinformation))
                      @foreach($schoolinformation as $school)
                      <tr editUrl="{{route('admin.global-setting.edit.school',$school->id)}}"  deleteurl="{{ route('RecordDelete', ['id' => $school->id, 'table_name' => 'school_information']) }}">
                        <td>{{$loop->iteration ?? ''}}</td>
                        <td>{{$school->school_name ?? ''}}</td>
                        <td>{{$school->print_certificate_school_name ?? ''}}</td>
                        <td>{{$school->phone_no ?? ''}}</td>
                        <td>{{$school->email ?? ''}}</td>
                        <td>{{$school->no_of_student ?? ''}}</td>
                        <td>{{$school->principle_name ?? ''}}</td>
                        <td class="text-center">{!! $school->is_active == 'yes' ? '<span class="badge text-bg-success">Active</span>
                                ' : '<span class="badge text-bg-danger">In-Active</span>'
                                !!}</td>
                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                      </table>
            </div>
        </div>
        </div>

</div>
</div>


</div>
{{-- table section satrt here --}}
@endsection