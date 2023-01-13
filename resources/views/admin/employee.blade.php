@extends('admin.layouts.datatable');

@section('title')
Employee Details
@endsection

@php
$page="Employee"
@endphp

<!-- @section('mainpage') -->
<style>
    .modal-backdrop {
        display: none;
        z-index: 999999999999 !important;
    }

    .modal-content {
        margin: 2px auto;
        z-index: 9999999999999 !important;
    }

</style>

<div class="main-content">
    <section class="section">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h4>Employee Details</h4>


                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addemployee"><i
                                data-feather="plus"></i>
                            Add New Employee
                        </button>
                    </div>



                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr class="text-left">
                                        <th class="">
                                            #
                                        </th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employee as $comp => $emp)
                                    <tr class="text-left">
                                        <td>
                                            {{ ++$comp }}
                                        </td>

                                        <td>
                                            {{ $emp -> firstname }}
                                        </td>

                                        <td>
                                            {{ $emp -> lastname }}
                                        </td>
                                        <td>
                                            {{ $emp ->companyname->name ?? 'None'}}
                                            
                                        </td>
                                        <td>
                                            {{ $emp -> email }}
                                        </td>
                                        <td>
                                            {{ $emp -> phone }}
                                        </td>
                                        <td>
                                            <div class="">

                                                <button data-toggle="modal"
                                                    data-target="{{ '#Edit'. $emp->id .'CompanyModal' }}"
                                                    class="btn btn-primary  mb-2">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>

                                                <form action="{{ route('employee.destroy', $emp->id) }}" method="POST">
                                                    @csrf

                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>

                                                </form>
                                            </div>

                                        </td>
                                    </tr>


                                    <!-- Employee Update Modal -->

                                    <div class="modal fade" id="{{ 'Edit' . $emp->id . 'CompanyModal'  }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit -
                                                        {{ $emp->firstname }}
                                                    </h5>


                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{ route('employee.update', $emp->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                        @method('PUT')
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <label for="companyname"
                                                                    class="col-sm-3 col-form-label">First Name</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control"
                                                                        id="companyname" name="firstname"
                                                                        value="{{ $emp->firstname }}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="companyname"
                                                                    class="col-sm-3 col-form-label">Last Name</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control"
                                                                        id="companyname" name="lastname"
                                                                        value="{{ $emp->lastname }}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="companyemail"
                                                                    class="col-sm-3 col-form-label">Email</label>
                                                                <div class="col-sm-9">
                                                                    <input type="email" class="form-control"
                                                                        id="companyemail" name="email"
                                                                        value="{{ $emp->email }}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="companyemail"
                                                                    class="col-sm-3 col-form-label">Phone</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control"
                                                                        id="companyemail" name="phone"
                                                                        value="{{ $emp->phone }}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="companyemail" class="col-sm-3 col-form-label">Select Company</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control" name="company_id">
                                                                        @foreach($company as $com)
                                                                            <option value="{{ $com->id }}">{{ $com->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                    <button type="submit" class="btn btn-primary">Update
                                                                        Employee</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>


                                                </div>
                                                <div class="modal-footer bg-whitesmoke br">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- Modal -->

            </div>
        </div>


    </section>
</div>

<!-- Employee Add Modal -->
<div class="modal fade" id="addemployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle">Add a New Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="card-body">
                        <div class="form-group row">
                            <label for="companyname" class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="companyname" name="firstname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="companyname" class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="companyname" name="lastname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="companyemail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="companyemail" name="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="companyemail" class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="companyemail" name="phone">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="companyemail" class="col-sm-3 col-form-label">Select Company</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="company_id">
                                    @foreach($company as $com)
                                        <option value="{{ $com->id }}">{{ $com->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Add New
                                    Employee</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    //Change this to your no-image file
    let noimage =
        "https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png";

    function readURL(input) {
        console.log(input.files);
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#img-preview").attr("src", e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            $("#img-preview").attr("src", noimage);
        }
    }

</script>

<!-- @endsection -->
