 <body class="sidebar-fixed sidebar-dark header-fixed header-light" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>



              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Sleek Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">



                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="{{asset('backend/assets/javascript:void(0)')}}" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Home</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="{{route('all.brands')}}">
                                <span class="nav-text">Home Brand</span>

                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{route('about')}}">
                                <span class="nav-text">Home About</span>

                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{route('all.multipic')}}">
                                <span class="nav-text">Home Portfolio</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="{{route('company.slider')}}">
                                <span class="nav-text">Home Slider</span>

                                <span class="badge badge-success">new</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="{{asset('backend/javascript:void(0)')}}" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Contact</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">


                        <li >
                              <a class="sidenav-item-link" href="{{route('contact.profile')}}">
                                <span class="nav-text">Contact Profile</span>

                                <span class="badge badge-success"></span>

                              </a>
                            </li>

                        <li >
                              <a class="sidenav-item-link" href="{{route('company.form')}}">
                                <span class="nav-text">Contact Message</span>

                                <span class="badge badge-success"></span>

                              </a>
                            </li>

                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Charts</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="charts"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">ChartJS</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Pages</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="user-profile.html">
                                <span class="nav-text">User Profile</span>

                              </a>
                            </li>





                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                            aria-expanded="false" aria-controls="authentication">
                            <span class="nav-text">Authentication</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="authentication">
                            <div class="sub-menu">

                              <li >
                                <a href="sign-in.html">Sign In</a>
                              </li>

                              <li >
                                <a href="sign-up.html">Sign Up</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                            aria-expanded="false" aria-controls="others">
                            <span class="nav-text">Others</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="others">
                            <div class="sub-menu">

                              <li >
                                <a href="invoice.html">invoice</a>
                              </li>

                              <li >
                                <a href="error.html">Error</a>
                              </li>

                            </div>
                          </ul>
                        </li>



                      </div>
                    </ul>
                  </li>









              </ul>

            </div>


            </div>
          </div>
        </aside>




