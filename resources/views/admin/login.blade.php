<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Login |  Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        @include('admin.layout.styles')

    </head>

    <body class="bg-primary bg-pattern">
        

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Admin Panel Login</h5>
                                    @if(session()->get('success'))
                                                    <div class="text-success">{{ session()->get('success') }}
                                                    @endif
                                    <form class="form-horizontal" method="POST" action="{{route('admin_login_submit')}}">
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" vale="{{old('email')}}" placeholder="Enter Email" >
                                                    @error('email')
                                                      <div class="text-danger">{{ $message }}
                                                    @enderror
                                                    @if(session()->get('error'))
                                                    <div class="text-danger">{{ session()->get('error') }}
                                                    @endif
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="userpassword">Password</label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password"placeholder="Enter password">
                                                    @error('password')
                                                      <div class="text-danger">{{ $message }}
                                                    @enderror
                                                     
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-md-right mt-3 mt-md-0">
                                                            <a href="{{route('forgetpw')}}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
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
