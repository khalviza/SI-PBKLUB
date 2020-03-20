<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Bahan</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
  <link rel="stylesheet" href="{{asset('bundles/bootstrap-social/bootstrap-social.css')}}">
  <link rel="stylesheet" href="{{asset('bundles/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('bundles/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('bundles/summernote/summernote-bs4.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset('img/PBKLUBLogo.ico')}}" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
                </a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right"> 
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
                        fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
                        fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
                        fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
                        fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Nunuk</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
                    fa-user"></i> Profile
              </a> 
              <div class="dropdown-divider"></div>
              <a href="login" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="dashboard"> <img alt="image" src="img/PBKLUBLogo.png" class="header-logo" /> <span
                class="logo-name">SI-PBKLUB</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="dropdown">
              <a href="dashboard" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown active">
              <a href="dashboard" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="package"></i><span>Bahan</span></a>
              <ul class="dropdown-menu">
                <li class="active"><a class="nav-link" href="bahan">Daftar Bahan</a></li>
                <li><a class="nav-link" href="formpengadaanbahan">Pengajuan Bahan</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="/analis" class="nav-link"><i data-feather="user"></i><span>Analis</span></a>
            </li>
            <li class="dropdown">
              <a href="/pengguna" class="nav-link"><i data-feather="users"></i><span>Pengguna</span></a>
            </li>
            <li class="dropdown">
              <a href="login" class="nav-link"><i data-feather="log-out"></i><span>Keluar</span></a>
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
               <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Daftar Bahan Kimia</h4>
                    <div class="card-header-action">
                    <a href="/bahan/formbahan" class="btn btn-primary">Tambah Data</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Kode</th>
                            <th>Jenis</th>
                            <th>Nama Bahan</th>
                            <th>Jumlah Tersedia</th>
                            <th>Tempat Penyimpanan</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data_bahan as $bahan)
                          <tr>
                            <td></td>
                            <td>{{$bahan->kode}}</td>
                            <td>{{$bahan->jenis}}</td>  
                            <td>{{$bahan->nama}}</td>
                            <td>{{$bahan->jumlah}} {{$bahan->satuan}}</td>
                            <td>{{$bahan->tempat_penyimpanan}}</td>
                            <td>
                              <a  href="/editbahan/{{ $bahan->id }}"class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Ubah"><i
                                class="fas fa-pencil-alt"></i></a>
                              <a href="bahan/delete/{{ $bahan->id }}" class="btn btn-danger btn-action" data-toggle="tooltip" title="Hapus"
                              id="swal-6"><i class="fas fa-trash"></i></a>
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
      </div>

      <!--Footer-->
      <footer class="main-footer">
        <div class="footer-left">
          <strong>Copyright &copy; 2020 <a href="http://biofarmaka.ipb.ac.id">Pusat Studi Biofarmaka Tropika IPB</a></strong>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset('js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('js/custom.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('js/page/widget-data.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{asset('bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('bundles/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('js/page/datatables.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('bundles/sweetalert/sweetalert.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('js/page/sweetalert.js')}}"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>