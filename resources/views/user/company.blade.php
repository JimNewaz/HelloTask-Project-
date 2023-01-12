@extends('layouts.app')


@section('main')

<div class="container">
    <div class="text-center mt-5">
        <h1>Welcome - {{ Auth::user()->name }}</h1>
        <p class="lead">All Companies</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>#</th>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Website</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($company as $comp => $com)
                    <tr>
                        <td>{{ ++$comp }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/companyLogo/'.$com -> logo) }}" alt=""
                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">John Doe</p>
                                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $com -> name }}</p>
                           
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $com -> email }}</p>  
                        </td>
                        <td>
                            <a href="{{ $com -> website }}">{{ $com -> website }}</a>
                            
                        </td>
                        
                        
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            
            <br>
            <div class="d-felx">
            {!! $company->links() !!}
            </div>
        </div>
    </div>
</div>

@endsection
