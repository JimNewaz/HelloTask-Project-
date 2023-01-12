@extends('layouts.app')


@section('main')

<div class="container">
    <div class="text-center mt-5">
        <h1>Welcome - {{ Auth::user()->name }}</h1>
        <p class="lead">All Employees</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th class="">
                            #
                        </th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Phone</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($employee as $comp => $emp)
                    <tr>
                        <td>{{ ++$comp }}</td>
                        <td>
                            {{ $emp -> firstname }} {{ $emp -> lastname }}
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $emp -> company_id }}</p>

                        </td>
                        <td>
                            <a class="text-success" href="mailto:{{ $emp -> email }}"><i class="bi bi-envelope-at"></i>
                                {{ $emp -> email }}</a>
                        </td>

                        <td>
                            <a class="text-danger" href="tel:{{ $emp -> phone }}"><i
                                    class="bi bi-telephone-outbound"></i> {{ $emp -> phone }}</a>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>

            <br>
            <div class="d-felx">
            {!! $employee->links() !!}
            </div>
            
        </div>
    </div>
</div>



@endsection
