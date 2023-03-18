<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Recover Password | Admin Dashboard</title>
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
                                    <h5 class="mb-5 text-center">Reset Password</h5>
                                    <form  method="POST" class="form-horizontal" action="{{route('admin_forget_password_submit')}}">
                                      @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-warning alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    Enter your <b>Email</b> and instructions will be sent to you!
                                                </div>

                                                <div class="form-group mt-4">
                                                    <label for="useremail">Email</label>
                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"  id="useremail" placeholder="Enter email">
                                                    @error('email')
                                                      <div class="text-danger">{{ $message }}
                                                    @enderror
                                                    @if(session()->get('error'))
                                                    <div class="text-danger">{{ session()->get('error') }}
                                                    @endif
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Send Email</button>
                                                    
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
