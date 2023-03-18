@extends('admin.layout.app')
@section('heading','Profile')
@section('main_content')
    
               
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card"> 
                            <form class="form-horizontal form-material mx-2" method="POST"  action="{{route('admin_profile_submit')}}" enctype="multipart/form-data">
                                 @csrf
                            <div class="card-body profile-card">
                                <center class="mt-4"> <img src="{{asset('dist/uploads/'.Auth::guard('admin')->user()->photo) }}"
                                        class="rounded-circle" width="150" />
                                     <br>
                                     <p>
                                    <div class="row text-center justify-content-center">
                                        <div class="col-9">
                                       <input type="file"  class="form-control mt_20" name="photo" id=""> 
                                        </div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" value="{{Auth::guard('admin')->user()->name}}"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" value="{{Auth::guard('admin')->user()->email}}"
                                                class="form-control ps-0 form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password" name="password"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Retype Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="retypepassword" name="retypepassword"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button class="btn btn-success mx-auto mx-md-0 text-white">Update
                                                Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
               
           
@endsection