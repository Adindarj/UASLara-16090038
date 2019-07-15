<!DOCTYPE html>
<html lang="en">

@include('templates.partials._head')

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('templates.partials._navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('templates.partials._sidebar')
      <!-- partial -->
      <div class="main-panel">
      <div class="content-wrapper">
        @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('templates.partials._footer')
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

@include('templates.partials._script')
</body>

</html>