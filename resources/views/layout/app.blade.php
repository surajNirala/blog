<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.partials.head')
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
    <!-- Navbar -->
    @include('layout.partials.nav')
    <!-- Navbar -->
    @include('layout.partials.header')
  <!--Main Navigation-->

  <!--Main layout-->
    @yield('content')
  <!--Main layout-->

  <!--Footer-->
    @include('layout.partials.footer')
  <!--/.Footer-->

  <!-- SCRIPTS -->
    @include('layout.partials.footer-scripts')
</body>

</html>
