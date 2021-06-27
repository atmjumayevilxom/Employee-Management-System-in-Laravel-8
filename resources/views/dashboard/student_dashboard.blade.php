@extends('layouts.st_master')
{{-- @section('menu')
@extends('sidebar.dashboard')
@endsection --}}
@section('content')
    <div class="dlabnav">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label first">Main Menu</li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('home') }}">Admin</a></li>
                        <li><a href="{{ route('student_dashboard') }}">Students</a></li>
                        <li><a href="{{ route('teacher_dashboard') }}">Teachers</a></li>
                        <li><a href="{{ route('parent_dashboard') }}">Parents</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-user"></i>
                        <span class="nav-text">Professors</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="all-professors.html">All Professor</a></li>
                        <li><a href="add-professor.html">Add Professor</a></li>
                        <li><a href="edit-professor.html">Edit Professor</a></li>
                        <li><a href="professor-profile.html">Professor Profile</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-users"></i>
                        <span class="nav-text">Students</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('all/student/list') }}">All Students</a></li>
                        <li><a href="{{ route('add/student/new') }}">Add Students</a></li>
                        <li><a href="edit-student.html">Edit Students</a></li>
                        <li><a href="about-student.html">About Students</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-graduation-cap"></i>
                        <span class="nav-text">Courses</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="all-courses.html">All Courses</a></li>
                        <li><a href="add-courses.html">Add Courses</a></li>
                        <li><a href="edit-courses.html">Edit Courses</a></li>
                        <li><a href="about-courses.html">About Courses</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-book"></i>
                        <span class="nav-text">Library</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="all-library.html">All Library</a></li>
                        <li><a href="add-library.html">Add Library</a></li>
                        <li><a href="edit-library.html">Edit Library</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-building"></i>
                        <span class="nav-text">Departments</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="all-departments.html">All Departments</a></li>
                        <li><a href="add-departments.html">Add Departments</a></li>
                        <li><a href="edit-departments.html">Edit Departments</a></li>
                    </ul>
                </li>
                
                <li class="nav-label">Forms</li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-file-text"></i>
                        <span class="nav-text">Forms</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="form-element.html">Form Elements</a></li>
                        <li><a href="form-wizard.html">Wizard</a></li>
                        <li><a href="form-editor-summernote.html">Summernote</a></li>
                        <li><a href="form-pickers.html">Pickers</a></li>
                        <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Admin Dashboard</h4>
                        <span class="ml-1">Student</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Student</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body">
                            <div class="media ai-icon">
                                <span class="mr-3">
                                    <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" style="stroke-dasharray: 25, 45; stroke-dashoffset: 0;"></path>
                                        <path d="M8,7A4,4 0,1,1 16,7A4,4 0,1,1 8,7" style="stroke-dasharray: 26, 46; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Patient</p>
                                    <h4 class="mb-0">3280</h4>
                                    <span class="badge badge-primary">+3.5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body">
                            <div class="media ai-icon">
                                <span class="mr-3">
                                    <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path>
                                        <path d="M14,2L14,8L20,8" style="stroke-dasharray: 12, 32; stroke-dashoffset: 0;"></path>
                                        <path d="M16,13L8,13" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path>
                                        <path d="M16,17L8,17" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path>
                                        <path d="M10,9L9,9L8,9" style="stroke-dasharray: 2, 22; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Bills</p>
                                    <h4 class="mb-0">2570</h4>
                                    <span class="badge badge-warning">+3.5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body">
                            <div class="media ai-icon">
                                <span class="mr-3">
                                    <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                        <path d="M12,1L12,23" style="stroke-dasharray: 22, 42; stroke-dashoffset: 0;"></path>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" style="stroke-dasharray: 43, 63; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Revenue</p>
                                    <h4 class="mb-0">364.50K</h4>
                                    <span class="badge badge-danger">-3.5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body">
                            <div class="media ai-icon">
                                <span class="mr-3">
                                    <svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
                                        <path d="M3,5A9,3 0,1,1 21,5A9,3 0,1,1 3,5" style="stroke-dasharray: 41, 61; stroke-dashoffset: 0;"></path>
                                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" style="stroke-dasharray: 21, 41; stroke-dashoffset: 0;"></path>
                                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" style="stroke-dasharray: 49, 69; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Patient</p>
                                    <h4 class="mb-0">364.50K</h4>
                                    <span class="badge badge-success">-3.5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-xxl-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Student List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Exam Name</th>
                                            <th>Grade</th>
                                            <th>Percent</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#0025</td>
                                            <td>Class Test</td>
                                            <td>A</td>
                                            <td>99.00 > 100</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>#0025</td>
                                            <td>Class Test</td>
                                            <td>B</td>
                                            <td>99.00 > 100</td>
                                            <td>2011/07/25</td>
                                        </tr>
                                        <tr>
                                            <td>#0025</td>
                                            <td>Class Test</td>
                                            <td>C</td>
                                            <td>99.00 > 100</td>
                                            <td>2009/01/12</td>
                                        </tr>
                                        <tr>
                                            <td>#0025</td>
                                            <td>Class Test</td>
                                            <td>A</td>
                                            <td>99.00 > 100</td>
                                            <td>2012/03/29</td>
                                        </tr>
                                        <tr>
                                            <td>#0025</td>
                                            <td>Class Test</td>
                                            <td>B</td>
                                            <td>99.00 > 100</td>
                                            <td>2012/03/29</td>
                                        </tr>
                                        <tr>
                                            <td>#0025</td>
                                            <td>Class Test</td>
                                            <td>C</td>
                                            <td>99.00 > 100</td>
                                            <td>2012/03/29</td>
                                        </tr>
                                        <tr>
                                            <td>#0025</td>
                                            <td>Class Test</td>
                                            <td>D</td>
                                            <td>99.00 > 100</td>
                                            <td>2012/03/29</td>
                                        </tr>
                                        <tr>
                                            <td>#0025</td>
                                            <td>Class Test</td>
                                            <td>C</td>
                                            <td>99.00 > 100</td>
                                            <td>2012/03/29</td>
                                        </tr>
                                        <tr>
                                            <td>#0025</td>
                                            <td>Class Test</td>
                                            <td>A</td>
                                            <td>99.00 > 100</td>
                                            <td>2012/03/29</td>
                                        </tr>
                                        <tr>
                                            <td>#0025</td>
                                            <td>Class Test</td>
                                            <td>B</td>
                                            <td>99.00 > 100</td>
                                            <td>2012/03/29</td>
                                          
                                        </tr>
                                        <tr>
                                            <td>#0025</td>
                                            <td>Class Test</td>
                                            <td>C</td>
                                            <td>99.00 > 100</td>
                                            <td>2011/01/25</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>About Me</h4>
                        </div>
                        <div class="student-info">
                            <div class="text-center container-fluid">
                                <div class="profile-photo">
                                    <img class="img-fluid rounded-circle" width="100" src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->avatar }}">
                                </div>
                                <h3 class="item-title">{{ Auth::user()->name }}</h3>
                                    <p>Web Developer and Web Designer</p>
                            </div>
                            <div class="table-responsive info-table">
                                <table class="table text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>Name:</td>
                                            <td class="font-medium text-dark-medium">Soeng Souy</td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td class="font-medium text-dark-medium">Male</td>
                                        </tr>
                                        <tr>
                                            <td>Father Name:</td>
                                            <td class="font-medium text-dark-medium">Fahim Rahman</td>
                                        </tr>
                                        <tr>
                                            <td>Mother Name:</td>
                                            <td class="font-medium text-dark-medium">Jannatul Kazi</td>
                                        </tr>
                                        <tr>
                                            <td>Date Of Birth:</td>
                                            <td class="font-medium text-dark-medium">07.08.2006</td>
                                        </tr>
                                        <tr>
                                            <td>Religion:</td>
                                            <td class="font-medium text-dark-medium">Islam</td>
                                        </tr>
                                        <tr>
                                            <td>Father Occupation:</td>
                                            <td class="font-medium text-dark-medium">Graphic Designer</td>
                                        </tr>
                                        <tr>
                                            <td>E-Mail:</td>
                                            <td class="font-medium text-dark-medium">soengsouy@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>Admission Date:</td>
                                            <td class="font-medium text-dark-medium">05.01.2019</td>
                                        </tr>
                                        <tr>
                                            <td>Class:</td>
                                            <td class="font-medium text-dark-medium">2</td>
                                        </tr>
                                        <tr>
                                            <td>Section:</td>
                                            <td class="font-medium text-dark-medium">Pink</td>
                                        </tr>
                                        <tr>
                                            <td>Roll:</td>
                                            <td class="font-medium text-dark-medium">10005</td>
                                        </tr>
                                        <tr>
                                            <td>Adress:</td>
                                            <td class="font-medium text-dark-medium">PP #10, Road #6,
                                                Australia</td>
                                        </tr>
                                        <tr>
                                            <td>Phone:</td>
                                            <td class="font-medium text-dark-medium">+ 88 9856418</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Messages</h5>
                        </div>
                        <div class="card-body">
                            <div id="DZ_W_Message" class="widget-message dz-scroll" style="height:350px;">
                                <div class="media mb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="{{URL::to('assets/images/avatar/1.jpg')}}">
                                    <div class="media-body">
                                        <h5>Jacob Tucker<small class="text-primary">April 29, 2018</small></h5>
                                        <p class="mb-2">I shared this on my fb wall a few months back, and I thought.</p>
                                        <a href="javascript:void()" class="btn btn-primary btn-sm d-inline-block px-3">Reply</a>
                                        <a href="javascript:void()" class="btn btn-outline-danger btn-sm d-inline-block px-3">Delete</a>
                                    </div>
                                </div>
                                <div class="media mb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="{{URL::to('assets/images/avatar/2.jpg')}}">
                                    <div class="media-body">
                                        <h5>Noah Baldon <small class="text-primary">April 28, 2018</small></h5>
                                        <p class="mb-2">I shared this on my fb wall a few months back, and I thought.</p>
                                        <a href="javascript:void()" class="btn btn-primary btn-sm d-inline-block px-3">Reply</a>
                                        <a href="javascript:void()" class="btn btn-outline-danger btn-sm d-inline-block px-3">Delete</a>
                                    </div>
                                </div>
                                <div class="media mb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="{{URL::to('assets/images/avatar/3.jpg')}}">
                                    <div class="media-body">
                                        <h5>Muhammad Clay <small class="text-primary">March 24, 2020</small></h5>
                                        <p class="mb-2">I shared this on my fb wall a few months back, and I thought.</p>
                                        <a href="javascript:void()" class="btn btn-primary btn-sm d-inline-block px-3">Reply</a>
                                        <a href="javascript:void()" class="btn btn-outline-danger btn-sm d-inline-block px-3">Delete</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="{{URL::to('assets/images/avatar/4.jpg')}}">
                                    <div class="media-body">
                                        <h5>William Logan <small class="text-primary">Dec 24, 2019</small></h5>
                                        <p class="mb-2">I shared this on my fb wall a few months back, and I thought.</p>
                                        <a href="javascript:void()" class="btn btn-primary btn-sm d-inline-block px-3">Reply</a>
                                        <a href="javascript:void()" class="btn btn-outline-danger btn-sm d-inline-block px-3">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Speciality</h4>
                        </div>
                        <div class="card-body dz-scroll" style="height:350px;" id="DZ_W_Speciality">
                            <div class="media mb-3 align-items-center dz-scroll" id="DZ_W_Speciality">
                                <img class="mr-3 p-2 border" alt="image" width="40" src="{{URL::to('assets/images/icons/20.png')}}">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 text-pale-sky">Certified</h5>
                                    <span class="text-muted mb-0">Cold Laser Therapy</span>
                                </div>
                            </div>
                            <div class="media mb-3 align-items-center">
                                <img class="mr-3 p-2 border" alt="image" width="40" src="{{URL::to('assets/images/icons/21.png')}}">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 text-pale-sky">Medication Laser</h5>
                                    <span class="text-muted mb-0">Hair Lose Product</span>
                                </div>
                            </div>
                            <div class="media mb-3 align-items-center">
                                <img class="mr-3 p-2 border" alt="image" width="40" src="{{URL::to('assets/images/icons/22.png')}}">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 text-pale-sky">Professional</h5>
                                    <span class="text-muted mb-0">Certified Hair Lose Surgery</span>
                                </div>
                            </div>
                            <div class="media mb-3 align-items-center">
                                <img class="mr-3 p-2 border" alt="image" width="40" src="{{URL::to('assets/images/icons/23.png')}}">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 text-pale-sky">Dentist Certified</h5>
                                    <span class="text-muted mb-0">Dentist </span>
                                </div>
                            </div>
                            <div class="media mb-3 align-items-center">
                                <img class="mr-3 p-2 border" alt="image" width="40" src="{{URL::to('assets/images/icons/21.png')}}">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 text-pale-sky">Medication Laser</h5>
                                    <span class="text-muted mb-0">Hair Lose Product</span>
                                </div>
                            </div>
                            <div class="media mb-3 align-items-center">
                                <img class="mr-3 p-2 border" alt="image" width="40" src="{{URL::to('assets/images/icons/22.png')}}">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 text-pale-sky">Professional</h5>
                                    <span class="text-muted mb-0">Certified Hair Lose Surgery</span>
                                </div>
                            </div>
                            <div class="media mb-3 align-items-center">
                                <img class="mr-3 p-2 border" alt="image" width="40" src="{{URL::to('assets/images/icons/23.png')}}">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 text-pale-sky">Dentist Certified</h5>
                                    <span class="text-muted mb-0">Dentist </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-6">					
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Doctor List</h4>
                        </div>
                        <div class="py-2">
                            <ul class="list-group list-group-flush dz-scroll" id="DZ_W_Doctor_List" style="height:350px;">
                                <li class="list-group-item">
                                    <a class="timeline-panel text-muted d-flex align-items-center" href="#">
                                        <img class="rounded-sm" alt="image" width="50" src="{{URL::to('assets/images/avatar/1.jpg')}}">
                                        <div class="col">
                                            <h5 class="mb-1">James Logan</h5>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <small class="d-block">Dentist - Specialist</small>
                                                <div class="rating-bar">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a class="timeline-panel text-muted d-flex align-items-center" href="#">
                                        <img class="rounded-sm" alt="image" width="50" src="{{URL::to('assets/images/avatar/5.jpg')}}">
                                        <div class="col">
                                            <h5 class="mb-1">Muhammad Clay</h5>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <small class="d-block">Fever - Specialist</small>
                                                <div class="rating-bar">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a class="timeline-panel text-muted d-flex align-items-center" href="#">
                                        <img class="rounded-sm" alt="image" width="50" src="{{URL::to('assets/images/avatar/4.jpg')}}">
                                        <div class="col">
                                            <h5 class="mb-1">Jacob Tucker</h5>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <small class="d-block">Dentist - Specialist</small>
                                                <div class="rating-bar">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a class="timeline-panel text-muted d-flex align-items-center" href="#">
                                        <img class="rounded-sm" alt="image" width="50" src="{{URL::to('assets/images/avatar/3.jpg')}}">
                                        <div class="col">
                                            <h5 class="mb-1">Harry Parker</h5>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <small class="d-block">Fever - Specialist</small>
                                                <div class="rating-bar">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a class="timeline-panel text-muted d-flex align-items-center" href="#">
                                        <img class="rounded-sm" alt="image" width="50" src="{{URL::to('assets/images/avatar/2.jpg')}}">
                                        <div class="col">
                                            <h5 class="mb-1">George Carson</h5>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <small class="d-block">Clinical Doctor</small>
                                                <div class="rating-bar">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection