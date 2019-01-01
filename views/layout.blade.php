<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ LC_GetTitle() }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ LC_Asset() }}/img/icon.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{ LC_Asset() }}/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ LC_Asset() }}/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ LC_Asset() }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ LC_Asset() }}/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ LC_Asset() }}/css/demo.css">
    <link href="{{ asset('vendor/midia') }}/dropzone.css" rel="stylesheet">
    <link href="{{ asset('vendor/midia') }}/midia.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                
                <a href="index.html" class="logo">
                    <img src="/assets/img/logo2.png" alt="navbar brand" class="navbar-brand" style="max-width: 170px;">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                
                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="{{LC_User('avatar', 'https://dummyimage.com/128/2a3f54/fff&text='.LC_User('initial'))}}" alt="{{LC_User('name')}}" class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="{{LC_User('avatar', 'https://dummyimage.com/128/2a3f54/fff&text='.LC_User('initial'))}}" alt="{{LC_User('name')}}" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>{{LC_User('name')}}</h4>
                                                <p class="text-muted">{{LC_User('email')}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">My Profile</a>
                                        <a class="dropdown-item" href="#">Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ LC_Route('logout') }}"
                                          onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                                  Log Out
                                        </a>

                                        <form id="logout-form" action="{{ LC_Route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                        </form>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2" data-background-color="white">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    @include('livecms::sidebar')
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                @section('content')
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                                <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
                            </div>
                            <div class="ml-md-auto py-2 py-md-0">
                                <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                                <a href="#" class="btn btn-secondary btn-round">New</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection

                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/livecms">
                                    Powered by LiveCMS
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        Atlantis - Bootstrap Admin Template by <a href="https://www.themekita.com">ThemeKita</a>
                    </div>
                </div>
            </footer>
        </div>
        
    </div>
    <!--   Core JS Files   -->
    <script src="{{ LC_Asset() }}/js/core/jquery.3.2.1.min.js"></script>
    <script type="text/javascript">
        // CSRF
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });
        $( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
            console.log(jqxhr);
            if (jqxhr.status == 419 || jqxhr.status == 401) {
                location.reload();
            } else {
                alert("Error: " + textStatus + ": " + errorThrown);
            }
        });
    </script>

    <script src="{{ LC_Asset() }}/js/core/popper.min.js"></script>
    <script src="{{ LC_Asset() }}/js/core/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>

    <!-- jQuery UI -->
    <script src="{{ LC_Asset() }}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="{{ LC_Asset() }}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ LC_Asset() }}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Datatables -->
    <script src="{{ LC_Asset() }}/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ LC_Asset() }}/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->

    <!-- Sweet Alert -->
    <script src="{{ LC_Asset() }}/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="{{ LC_Asset() }}/js/atlantis.min.js"></script>


    <script src="{{ asset('vendor/tinymce') }}/tinymce.min.js"></script>
    <script src="{{ asset('vendor/midia') }}/clipboard.js"></script>
    <script src="{{ asset('vendor/midia') }}/dropzone.js"></script>
    <script src="{{ asset('vendor/midia') }}/midia.js"></script>
    <script type="text/javascript">
        if (typeof $.fn.midia == 'function') {
          $.fn.midia.defaultSettings.identifier = 'identifier';
          $.fn.midia.defaultSettings.tinyMCEUrl = '{{LC_Route('media-library.open', ['editor' => 'tinymce4'])}}';
          $.fn.midia.defaultSettings.customLoadUrl = function (limit, key) {
              return '{{LC_Route('index')}}/media-library/image/get/' + limit + '?key=' + key;
          }
          $.fn.midia.defaultSettings.customUploadUrl = function () {
              return '{{LC_Route('index')}}/media-library/image/upload';
          }
          $.fn.midia.defaultSettings.customRenameUrl = function (file) {
              return '{{LC_Route('index')}}/media-library/image/' + file + '/rename';
          }
          $.fn.midia.defaultSettings.customDeleteUrl = function (file) {
              return '{{LC_Route('index')}}/media-library/image/' + file + '/delete';
          }
          @if ($maxSizeFileConfig = config('medialibrary.max_file_size'))
          $.fn.midia.defaultSettings.dropzone.maxFilesize = '{{$maxSizeFileConfig / (1024 * 1024)}}';
          @endif
        }

    </script>

    <script>
      @if ($status = session('status'))
      Swal('', '{!! $status !!}');
      @endif
      @if ($success = session('success'))
      Swal('', '{!! $success !!}', 'success');
      @endif
      @if ($error = session('error'))
      Swal('', '{!! $error !!}', 'error');
      @endif

      if (['#login', '#register'].find(function(item) {
        return item == window.location.hash;
      })) {
        window.location.hash = '';
      }
    </script>
    @stack('js-bottom')
</body>
</html>