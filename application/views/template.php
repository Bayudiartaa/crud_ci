
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Pendaftaran</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url()?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/modules/select2/dist/css/select2.min.css">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url()?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"> <?= $this->session->username;?> </div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon" id="changepassword">
                <i class="fas fa-cog"></i> Changepassword
              </a>
              <a href="#" class="dropdown-item dropdown-footer tombol-logout has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Pendaftaran Sekolah</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PS</a>
          </div>
          <ul class="sidebar-menu">        
            <li class="nav-item <?= $title == 'Siswa' | $title == 'Add Siswa' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('siswa'); ?>"><i class="fas fa-users"></i><span>Pendaftaran Siswa</span></a>
            </li> 
        </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
          <?= $contents ?>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; <?= date('Y')?> <div class="bullet"></div> Development By Byu</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url()?>assets/modules/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/modules/popper.js/dist/umd/popper.min.js" ></script>
  <script src="<?= base_url()?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?= base_url()?>assets/modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url()?>assets/modules/moment.min.js"></script>
  <script src="<?= base_url()?>assets/modules/swal/sweetalert2.all.min.js"></script>
  <script src="<?= base_url()?>assets/modules/select2/dist/js/select2.min.js"></script>
  <script src="<?= base_url()?>assets/js/myscript.js"></script>
  <script src="<?= base_url()?>assets/js/stisla.js"></script>
  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?= base_url()?>assets/js/scripts.js"></script>
  <script src="<?= base_url()?>assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script>
        $(function() {

            $("#dataTable").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>

</body>
</html>
