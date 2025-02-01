{{-- extending master layout here --}}
@extends('admin_panel.comman.masterLayout')
{{-- extending master layout here --}}


{{-- main content section start here --}}
@section('main-content')
<div class="container-fluid pd-x-0 pd-lg-x-10 pd-xl-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Attorney Dashboard</li>
                </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
        </div>
    </div>


</div>


<!-- top information section start here -->
<div class="row row-xs">
    <div class="col-sm-6 col-lg-4 mb-2">
        <div class="atorney-card card card-body">
            <div class="d-flex align-items-center">

                <img src="{{ asset('assets/img/icons/school_logo.png') }}"
                    class="border rounded-50 p-1 me-2" style="height:70px;width:70px;" alt="not found">
                <h3
                    class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1 fw-bold fs-6 text-dark">Total No. Of. School : </h3><br>
                <span
                    class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1 fw-bold fs-6 text-dark">{{schoolCount()}}</span>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-2">
        <div class="atorney-card card card-body">
            <div class="d-flex align-items-center">

                <img src="{{ asset('assets/img/icons/student.png') }}"
                    class="border rounded-50 p-1 me-2" style="height:70px;width:70px;" alt="not found">
                <h3
                    class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1 fw-bold fs-6 text-dark">Total No. Of. Student : <br><br><span
                        class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1 fw-bold fs-6 mt-3 text-dark">{{studentCount()}}</span></h3>

            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-2">
        <div class="atorney-card card card-body">
            <div class="d-flex align-items-center">

                <img src="{{ asset('assets/img/icons/school_logo.png') }}"
                    class="border rounded-50 p-1 me-2" style="height:70px;width:70px;" alt="not found">
                <h3
                    class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1 fw-bold fs-6 text-dark">Total No. Of. School : </h3><br>
                <span
                    class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1 fw-bold fs-6 text-dark">{{schoolCount()}}</span>
            </div>
        </div>
    </div>
</div>
<!-- top information end start here -->




{{-- report section --}}

<div class="row d-flex mt-3" style="box-sizing:border-box;">
    <div class="col-lg-6">
        <div class="custom-card">
            <div class="panel m-0 p-0  panel-default">
                <div class="panel-heading  border-bottom mb-2">
                    <h6 class="tx-14 m-0 p-0"><b class="d-flex"><i class="fa fa-users me-1"></i> Todays Online Registred Student
                            Last Date</b></h6>
                </div>
                <div class="panel-body  pt-0">
                    <div class="card card-widget card-contacts">
                        <div class="card-body pd-0" style="overflow-y: scroll;height:300px;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="avatar avatar-online"><img src="https://placehold.co/500" class="rounded-circle" alt=""></div>
                                    <div class="list-body">
                                        <h6>Katherine Lumaad</h6>
                                        <p>katherine@themepixels.me</p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="message-square"></i></a>
                                        <a href=""><i data-feather="mail"></i></a>
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                                <li class="list-group-item">
                                    <div class="avatar avatar-online"><img src="https://placehold.co/500" class="rounded-circle" alt=""></div>
                                    <div class="list-body">
                                        <h6>Katherine Lumaad</h6>
                                        <p>katherine@themepixels.me</p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="message-square"></i></a>
                                        <a href=""><i data-feather="mail"></i></a>
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                                <li class="list-group-item">
                                    <div class="avatar avatar-online"><img src="https://placehold.co/500" class="rounded-circle" alt=""></div>
                                    <div class="list-body">
                                        <h6>Katherine Lumaad</h6>
                                        <p>katherine@themepixels.me</p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="message-square"></i></a>
                                        <a href=""><i data-feather="mail"></i></a>
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                                <li class="list-group-item">
                                    <div class="avatar avatar-online"><img src="https://placehold.co/500" class="rounded-circle" alt=""></div>
                                    <div class="list-body">
                                        <h6>Katherine Lumaad</h6>
                                        <p>katherine@themepixels.me</p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="message-square"></i></a>
                                        <a href=""><i data-feather="mail"></i></a>
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                                <li class="list-group-item">
                                    <div class="avatar avatar-online"><img src="https://placehold.co/500" class="rounded-circle" alt=""></div>
                                    <div class="list-body">
                                        <h6>Katherine Lumaad</h6>
                                        <p>katherine@themepixels.me</p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="message-square"></i></a>
                                        <a href=""><i data-feather="mail"></i></a>
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>

                                <li class="list-group-item">
                                    <div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-primary">m</span></div>
                                    <div class="list-body">
                                        <h6>Marie Recamadas</h6>
                                        <p>(0929) 1234 567</p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="phone"></i></a>
                                        <a href=""><i data-feather="video"></i></a>
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                                <li class="list-group-item">
                                    <div class="avatar avatar-offline"><span class="avatar-initial rounded-circle bg-green">r</span></div>
                                    <div class="list-body">
                                        <h6>Rose Faye Orcullo</h6>
                                        <p>(0929) 0098 765</p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="phone"></i></a>
                                        <a href=""><i data-feather="video"></i></a>
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                                <li class="list-group-item">
                                    <div class="avatar avatar-offline"><span class="avatar-initial rounded-circle bg-purple">g</span></div>
                                    <div class="list-body">
                                        <h6>George Patinos</h6>
                                        <p>(0929) 0987 654</p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="phone"></i></a>
                                        <a href=""><i data-feather="video"></i></a>
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                                <li class="list-group-item">
                                    <div class="avatar avatar-online"><img src="https://placehold.co/500x281" class="rounded-circle" alt=""></div>
                                    <div class="list-body">
                                        <h6>Daryl Anne Smith</h6>
                                        <p>(0123) 4567 890</p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="phone"></i></a>
                                        <a href=""><i data-feather="video"></i></a>
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                            </ul>
                        </div><!-- card-body -->
                        <div class="card-footer bg-transparent">
                            <a href="" class="link-03 d-flex align-items-center gap-1">View All Contacts (525) <ion-icon name="arrow-forward-outline"></ion-icon></a>
                        </div><!-- card-footer -->
                    </div><!-- card -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="custom-card">
            <div class="panel m-0 p-0  panel-default">
                <div class="panel-heading  border-bottom mb-2">
                    <h6 class="tx-14 m-0 p-0"><b class="d-flex"><i class="fa fa-home me-1"></i> School Lists</b></h6>
                </div>
                <div class="panel-body  pt-0">
                    <div class="card card-widget card-contacts">
                        <div class="card-body pd-0" style="overflow-y: scroll;height:300px;">
                            <ul class="list-group list-group-flush">
                                @foreach($schools as $school)
                                @php
                                $letter = substr($school->school_name, 0, 1);
                                $colors=['bg-primary','bg-danger','bg-info','bg-secondary','bg-primary-subtle','bg-success','bg-success-subtle','bg-danger-subtle','bg-warning','bg-warning-subtle'];
                                @endphp
                                <li class="list-group-item">
                                    <div class="avatar avatar-online"><span class="avatar-initial rounded-circle {{ $colors[rand(0, 3)] }}">{{$letter}}</span></div>
                                    <div class="list-body">
                                        <h6>{{$school->school_name ?? ''}}</h6>
                                        <p>{{$school->email ?? ''}} {{$school->phone_no ?? ''}}</p>
                                    </div>
                                    <nav class="nav fw-bold">
                                        <h6>St. {{$school->no_of_student}}</h6>
                                    </nav>

                                    <nav class="nav">
                                        <a target="_blank" href="{{ $school->phone_no ? 'tel:'.$school->phone_no : 'javascript:void(0)' }}">
                                            <i data-feather="phone"></i>
                                        </a>

                                        <a target="_blank" href="{{ $school->phone_no ? 'mailTo:'.$school->email : 'javascript:void(0)' }}"><i data-feather="mail"></i></a>
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                                @endforeach
                            </ul>
                        </div><!-- card-body -->
                        <div class="card-footer bg-transparent">
                            <a target="_blank" href="{{route('admin.global-setting.school')}}" class="link-03 d-flex align-items-center gap-1">View All Schools ({{count($schools)}}) <ion-icon name="arrow-forward-outline"></ion-icon></a>
                        </div><!-- card-footer -->
                    </div><!-- card -->
                </div>
            </div>
        </div>
    </div>
</div>

{{-- report section end here --}}


<!-- graf section start here -->
 
<div class="row d-flex mt-3" style="box-sizing:border-box;">
    <div class="col-lg-6">
        <div class="custom-card">
            <div class="panel m-0 p-0  panel-default">
                <div class="panel-heading  border-bottom mb-2">
                    <h6 class="tx-14 m-0 p-0"><b class="d-flex"><i class="fa fa-users me-1"></i> Class Wise Student Gender Count</b></h6>
                </div>
                <div class="panel-body  pt-0">
                    <div class="card card-widget card-contacts">
                        <div class="card-body pd-0">
                          
        <div data-label="Example" class="df-example">
          <div class="ht-250 ht-lg-300"><canvas id="chartBar1"></canvas></div>
        </div>
                        </div><!-- card-body -->
                     
                    </div><!-- card -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="custom-card">
            <div class="panel m-0 p-0  panel-default">
                <div class="panel-heading  border-bottom mb-2">
                    <h6 class="tx-14 m-0 p-0"><b class="d-flex"><i class="fa fa-home me-1"></i> School Lists</b></h6>
                </div>
                <div class="panel-body  pt-0">
                    <div class="card card-widget card-contacts">
                        <div class="card-body pd-0" style="overflow-y: scroll;height:300px;">
                            <ul class="list-group list-group-flush">
                                @foreach($schools as $school)
                                @php
                                $letter = substr($school->school_name, 0, 1);
                                $colors=['bg-primary','bg-danger','bg-info','bg-secondary','bg-primary-subtle','bg-success','bg-success-subtle','bg-danger-subtle','bg-warning','bg-warning-subtle'];
                                @endphp
                                <li class="list-group-item">
                                    <div class="avatar avatar-online"><span class="avatar-initial rounded-circle {{ $colors[rand(0, 3)] }}">{{$letter}}</span></div>
                                    <div class="list-body">
                                        <h6>{{$school->school_name ?? ''}}</h6>
                                        <p>{{$school->email ?? ''}} {{$school->phone_no ?? ''}}</p>
                                    </div>
                                    <nav class="nav fw-bold">
                                        <h6>St. {{$school->no_of_student}}</h6>
                                    </nav>

                                    <nav class="nav">
                                        <a target="_blank" href="{{ $school->phone_no ? 'tel:'.$school->phone_no : 'javascript:void(0)' }}">
                                            <i data-feather="phone"></i>
                                        </a>

                                        <a target="_blank" href="{{ $school->phone_no ? 'mailTo:'.$school->email : 'javascript:void(0)' }}"><i data-feather="mail"></i></a>
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                                @endforeach
                            </ul>
                        </div><!-- card-body -->
                        <div class="card-footer bg-transparent">
                            <a target="_blank" href="{{route('admin.global-setting.school')}}" class="link-03 d-flex align-items-center gap-1">View All Schools ({{count($schools)}}) <ion-icon name="arrow-forward-outline"></ion-icon></a>
                        </div><!-- card-footer -->
                    </div><!-- card -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- graf section start here -->

</div>
@endsection
{{-- main content section start here --}}