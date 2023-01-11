<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.includes.header');

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            
            <!-- Navbar -->
            @include('admin.layouts.includes.nav');


            <!-- Sidebar -->
            @include('admin.layouts.includes.sidebar');
            
            <!-- Main Content -->
            @yield('mainpage');

            <!-- Footer -->
            @include('admin.layouts.includes.footer');
        </div>
    </div>


    @include('admin.layouts.includes.scripts');
   
</body>




</html>
