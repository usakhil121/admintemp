<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dashboard | Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon {{asset('')}} -->
    <link rel="shortcut icon" href="{{ asset('dist/images/favicon.ico') }}" />

    <!-- slick css -->
    @include('admin.layout.styles')
  </head>

  <body data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">
      <header id="page-topbar">
       @include('admin.layout.navbar')
      </header>

      <!-- ========== Left Sidebar Start ========== -->
      @include('admin.layout.sidebar')
      <!-- Left Sidebar End -->

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div
                  class="page-title-box d-flex align-items-center justify-content-between"
                >
                  <h4 class="mb-0 font-size-18">@yield('heading')</h4>

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="javascript: void(0);">it'sMeAkhil</a>
                      </li>
                      <li class="breadcrumb-item active">@yield('heading')</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- end page title -->

            @yield('main_content')

        @include('admin.layout.footer')
      </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT {{asset('')}}-->
    @include('admin.layout.script')

    @if($errors->any())
      @foreach($errors->all() as $error)
      <script>
        iziToast.error({
                            title: '',
                            position:'topRight',
                            message: '{{ $error }}',
                        });
      </script>
      
      
      @endforeach
    @endif

    @if(session()->get('error'))
    <script>
       iziToast.error({
                            title: '',
                            position:'topRight',
                            message: '{{session()->get('error')}}',
                        });
                    
    </script>
    @endif
    @if(session()->get('success'))
    <script>
       iziToast.success({
                            title: '',
                            position:'topRight',
                            message: '{{session()->get('success')}}',
                        });
                    
    </script>
    @endif
  </body>
</html>
