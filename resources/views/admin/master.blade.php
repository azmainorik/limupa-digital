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

    <script>
      
      $(document).on('change', '#categoryId', function () {
       
        var categoryId = $(this).val();

        var result;

        console.log(categoryId);

        $.ajax({
          method: 'GET',
            url: "{{url('/get-sub-category-by-id')}}",
            data: {cat_id: categoryId},
            dataType: 'json',
           
          success: function(res){

            result=res;
            var option = '';
            option +='<option value="" disabled selected>--Select subcategory Name--</option>'
            $.each(res, function (key, value)
            {
                option += '<option value="'+value.id+'">'+value.name+'</option>';                
            }                        
           );

           ;
    console.log("Inside ajax: "+result);                

            $('#subCategoryID').empty().append(option);

          },

          error: function (e)
          {
              console.log(e);
          }

        });

        console.log("Outside ajax: "+result); 
    });


   </script>
</body>

<!--   Tue, 07 Jan 2020 03:35:12 GMT -->
</html>