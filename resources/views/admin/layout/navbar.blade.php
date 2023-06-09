 <div class="navbar-header">
          <div class="d-flex">
            <!-- LOGO {{asset('')}} -->
            <div class="navbar-brand-box">
              <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                  <img
                    src="{{asset('dist/images/logo-sm-dark.png')}}"
                    alt=""
                    height="22"
                  />
                </span>
                <span class="logo-lg">
                  <img src="{{asset('dist/images/logo-dark.png')}}" alt="" height="20" />
                </span>
              </a>

              <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                  <img
                    src="{{asset('dist/images/logo-sm-light.png')}}"
                    alt=""
                    height="22"
                  />
                </span>
                <span class="logo-lg">
                  <img src="{{asset('dist/images/logo-light.png')}}" alt="" height="20" />
                </span>
              </a>
            </div>

            <button
              type="button"
              class="btn btn-sm px-3 font-size-24 header-item waves-effect"
              id="vertical-menu-btn"
            >
              <i class="mdi mdi-backburger"></i>
            </button>

            <!-- App Search -->
            <form class="app-search d-none d-lg-block">
              <div class="position-relative">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search..."
                />
                <span class="mdi mdi-magnify"></span>
              </div>
            </form>
          </div>

          <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ml-2">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                id="page-header-search-dropdown"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="mdi mdi-magnify"></i>
              </button>
              <div
                class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                aria-labelledby="page-header-search-dropdown"
              >
                <form class="p-3">
                  <div class="form-group m-0">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Search ..."
                        aria-label="Recipient's username"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                          <i class="mdi mdi-magnify"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

           

            <div class="dropdown d-none d-lg-inline-block ml-1">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                data-toggle="fullscreen"
              >
                <i class="mdi mdi-fullscreen"></i>
              </button>
            </div>

           

            
            <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn header-item waves-effect"
                id="page-header-user-dropdown"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  class="rounded-circle header-profile-user"
                  src="{{asset('dist/uploads/'.Auth::guard('admin')->user()->photo) }}" 
                  alt="Header Avatar"
                />
                <span class="d-none d-sm-inline-block ml-1">{{Auth::guard('admin')->user()->name}}</span>
                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <!-- item{{asset('')}}-->
                <a class="dropdown-item" href="{{ route('admin_profile')}}"
                  ><i
                    class="mdi mdi-face-profile font-size-16 align-middle mr-1"
                  ></i>
                  Profile</a
                >
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('admin_logout')}}"
                  ><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i>
                  Logout</a
                >
              </div>
            </div>
          </div>
        </div>