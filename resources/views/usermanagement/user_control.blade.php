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
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-user-plus"></i>
                        <span class="nav-text">Management</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('userManagement') }}">All Users</a></li>
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
                        <h4>All Users</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="userManagement">User Management</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('userManagement')}}">Users</a></li>
                    </ol>
                </div>
            </div>
         
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Profile</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Status</th>
                                            <th>Role Name</th>
                                            <th class="text-center">Modify</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $item)
                                            <tr>
                                                <td class="id">{{ ++$key }}</td>
                                                <td class="name">{{ $item->name }}</td>
                                                <td class="name">
                                                    <div class="avatar avatar-xl">
                                                        <img class="rounded-circle" width="35" src="{{ URL::to('/assets/images/'. $item->avatar) }}" alt="{{ $item->avatar }}">
                                                    </div>
                                                </td>
                                                <td class="email">{{ $item->email }}</td>
                                                <td class="phone_number">{{ $item->phone_number }}</td>
                                                @if($item->status =='Active')
                                                <td class="status"><span class="badge bg-success">{{ $item->status }}</span></td>
                                                @endif
                                                @if($item->status =='Disable')
                                                <td class="status"><span class="badge bg-danger">{{ $item->status }}</span></td>
                                                @endif
                                                @if($item->status ==null)
                                                <td class="status"><span class="badge bg-danger">{{ $item->status }}</span></td>
                                                @endif
                                                @if($item->role_name =='Admin')
                                                <td class="role_name"><span  class="badge bg-success">{{ $item->role_name }}</span></td>
                                                @endif
                                                @if($item->role_name =='Super Admin')
                                                <td class="role_name"><span  class="badge bg-info">{{ $item->role_name }}</span></td>
                                                @endif
                                                @if($item->role_name =='Normal User')
                                                <td class="role_name"><span  class=" badge bg-warning">{{ $item->role_name }}</span></td>
                                                @endif
                                                <td class="text-center">
                                                    <a href="{{ route('user/add/new') }}">
                                                        <span class="btn btn-sm btn-info"><i class="la la-plus"></i></span>
                                                    </a>
                                                    <a href="{{ url('view/detail/'.$item->id) }}">
                                                        <span class="btn btn-sm btn-primary"><i class="la la-pencil"></i></span>
                                                    </a>  
                                                    <a href="{{ url('delete_user/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><span class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection