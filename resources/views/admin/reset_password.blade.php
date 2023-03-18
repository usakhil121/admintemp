<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Recover Password | Apaxy - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        
        <!-- Icons Css -->
         @include('admin.layout.styles')
        

    </head>

    <body class="bg-primary bg-pattern">
        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="index.html" class="logo"><img src="assets/images/logo-light.png" height="24" alt="logo"></a>
                            <h5 class="font-size-16 text-white-50 mb-4">Responsive Bootstrap 4 Admin Dashboard</h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Reset Password</h5>
                                    <form  method="POST" class="form-horizontal" action="{{route('admin_reset_password_submit')}}">
                                      @csrf
                                      <input type="hidden" name="token" value="{{$token}}">
                                      <input type="hidden" name="email" value="{{$email}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-warning alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    Enter your <b>New</b> Password!
                                                </div>

                                                <div class="form-group mt-4">
                                                    <label for="newpassword">New Password</label>
                                                    <input type="text" class="form-control @error('password') is-invalid @enderror" name="password"  id="newpassword" placeholder="Enter New Password">
                                                    @error('password')
                                                      <div class="text-danger">{{ $message }}
                                                    @enderror
                                                    
                                                </div>
                                                <div class="form-group mt-4">
                                                    <label for="retypepassword">Retype New Password</label>
                                                    <input type="text" class="form-control @error('retypepassword') is-invalid @enderror" name="retypepassword"  id="retypepassword" placeholder="Retype New Password">
                                                    @error('retypepassword')
                                                      <div class="text-danger">{{ $message }}
                                                    @enderror
                                                    
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Update</button>
                                                    
                                                </div>
                                                <div class="mt-4">
                                                 <a href="{{route('admin_login')}}"> Back to Login page </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->


        <!-- JAVASCRIPT -->
         @include('admin.layout.script')

    </body>
</html>
