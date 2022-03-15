<!DOCTYPE html>
<html lang="en">

<!--   Tue, 07 Jan 2020 03:33:27 GMT -->
<head>
@include('admin.includes.style')
</head>
<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
         
        <!-- Start app top navbar -->
        @include('admin.includes.topnav')

        <!-- Start main left sidebar menu -->
        @include('admin.includes.menu')
      
        <!-- Start app main Content -->
        <div class="main-content">
           @yield('body')
        </div>

        <!-- Start app Footer part -->
        @include('admin.includes.footer')

    </div>
</div>

<!-- General JS Scripts -->

      @include('admin.includes.script')
     
</body>

<!--   Tue, 07 Jan 2020 03:35:12 GMT -->
</html>