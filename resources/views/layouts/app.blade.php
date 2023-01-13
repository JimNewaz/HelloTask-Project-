<!doctype html>
<html lang="en">

@include('layouts.includes.header')

<body>
    @include('layouts.includes.nav')

    <div class="container">
        <div class="text-center mt-5">
            <h1>Welcome - {{ Auth::user()->name }}</h1>
            <p class="lead">Please checkout the employee and the company page</p>
        </div>
    </div>


    @yield('main')

    


    @include('layouts.includes.scripts')
</body>
