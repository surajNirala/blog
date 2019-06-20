<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.layout.partials.head')
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('admin.layout.partials.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('admin.layout.partials.nav')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        @yield('main_contain')
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('admin.layout.partials.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  @include('admin.layout.partials.footer-scripts')

</body>

</html>
