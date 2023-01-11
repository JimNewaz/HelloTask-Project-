@extends('admin.layouts.datatable');

@section('title')
Company Details
@endsection


<!-- @section('mainpage') -->


<div class="main-content">
    <section class="section">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h4>Company Details</h4>


                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcompany"><i
                                data-feather="plus"></i>
                            Add New Company
                        </button>
                    </div>

                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message')}}
                    </div>

                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr class="text-left">
                                        <th class="">
                                            #
                                        </th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Logo</th>
                                        <th>Website</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($company  as $comp => $com)
                                    <tr class="text-left">
                                        <td>
                                            {{ ++$comp }}
                                        </td>

                                        <td>
                                            {{ $com -> name }}
                                        </td>

                                        <td>
                                            {{ $com -> email }}
                                        </td>
                                        <td>
                                            <img src="{{ asset('storage/companyLogo/'.$com -> logo) }}" alt=""
                                            title="" width="100" height="80">
                                        </td>
                                        <td>
                                            {{ $com -> website }}
                                        </td>
                                        <td>
                                        <a href="#" data-toggle="modal"
                                            data-target=""
                                            class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
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

<!-- Modal -->
<div class="modal fade" id="addcompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle">Add a New Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="companyname" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="companyname" name="name" placeholder="Name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="companyemail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="companyemail" name="email"
                                    placeholder="example@gmail.com">
                            </div>
                        </div>


                        <div class="form-group ">
                            <label>Company Logo</label>
                            <img id="img-preview" class="mb-4"
                                src="https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png"
                                width="" style="width:100%; height:200px" />

                            <div class="custom-file">
                                <input type="file" name="company_logo" class="custom-file-input" id="customFile"
                                    onchange="readURL(this)">
                                <label class="custom-file-label" for="customFile">Choose File</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="companywebsite" class="col-sm-3 col-form-label">Website</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="companywebsite" name="website"
                                    placeholder="Website URL">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary">Create Company</button>
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