@extends('layouts.app')


@section('main')

    <div class="container">
        <div class="text-center mt-5">
            <h1>Welcome - {{ Auth::user()->name }}</h1>
            <p class="lead">Please checkout the employee and the company page</p>
        </div>
    </div>



@endsection

 

    

    



