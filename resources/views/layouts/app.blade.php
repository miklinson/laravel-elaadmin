<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    @yield('html-head')
</head>
<body>
  <!-- Left Panel -->
  @include('layouts.sidebar.left')
  <!-- End of Left Panel -->
  <!-- Top Panel with Right -->
  <div id="right-panel" class="right-panel">
    @include('layouts.navbar.top')
  <!-- End of Top Panel with Right -->
    <!-- Content -->
    <div class="content">
      @yield('content')
    </div>
    <!-- End of Content-->
    <div class="clearfix"></div>
    <!-- Footer -->
    @include('layouts.footer.site')
    <!-- End of Footer -->
  </div>
  @yield('javascript')
</body>
</html>
