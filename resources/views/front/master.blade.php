<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
       @include('front.includes.style')

       @include('front.includes.meta')
        
        
</head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
           @include('front.includes.header')
            <!-- Header Area End Here -->


            <!-- Begin Slider With Banner Area -->
             @yield('body') 
            <!-- Li's Trendding Products Area End Here -->


            <!-- Begin Footer Area -->
           @include('front.includes.footer') 
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
           @include('front.includes.modal')            
            <!-- Quick View | Modal Area End Here -->
        </div>

        
        <!-- Body Wrapper End Here -->
         @include('front.includes.script')
        <!-- jQuery-V1.12.4 -->
   
    </body>

<!-- index30:23-->
</html>