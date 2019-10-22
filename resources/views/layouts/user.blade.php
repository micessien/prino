<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Utilisateur - Tableau de bord</title>

  <!-- ========== Favicon Icon ========== -->
  <link rel="shortcut icon" href="{{ asset('assets/img/logo-prix-innovation.png') }}" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://cdn.tiny.cloud/1/przgmzfaioiisrc6rjnssfkp36q9iscbyi8az9573ti8fztu/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148032140-1
"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-148032140-1');
  </script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
          <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" style="margin-top: 35px !important;">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tableau de bord</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/projects/index">
          <span>Postuler</span>
        </a>

        <a class="nav-link collapsed" href="/profile">
          <span>Mon Profil</span>
        </a>
      </li>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        @yield('content');

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; prixinnovation 2019</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Prêt à partir ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à mettre fin à votre session en cours.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Déconnexion') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

  <!-- Core plugin JavaScript -->
  <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
  <script>
    if (window.location.pathname === "/home") {
      // Set the date we're counting down to
      var countDownDate = new Date("Nov 16, 2019 12:00:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demoCountdown"
        document.getElementById("demoCountdown").innerHTML = "Il ne vous reste plus que " + "<strong>" + days + "jours " + hours + "H " +
          minutes + "min " + seconds + "sec " + "</strong>" + " pour finaliser le dépôt de votre dossier.";

        // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demoCountdown").innerHTML = "Application clôturée, rendez-vous l'année prochaine, Merci !";
        }
      }, 1000);
    }
  </script>
</body>

</html>