@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Customer Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Customer Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary p-4">
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-success') }} alert-dismissible fade show">
                                {{ Session::get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </p>
                        @endif
                        <div class="card-header">
                            <h3 class="card-title">Quick Add Customer Details</h3>
                        </div>
{{--                        @if(Session::has('message'))--}}
{{--                            <div class="alert alert-primary" role="alert">--}}
{{--                                {{Session::get('message')}}--}}
{{--                            </div>--}}
{{--                        @endif--}}


                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('addCustomerSubmit')}}" method="Post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body ">
                                <div class="form-group">
                                    <label for="exampleInputFile">Profile Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="profile" id="profile" required>
                                            <label class="custom-file-label" for="selectprofile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="customerName">Customer Name</label>
                                    <input type="text" class="form-control" id="customer" name="name" placeholder="Enter Customer Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile Number</label>
                                    <input type="mobile" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile" required>
                                </div>

                                <div class="form-group">
                                    <label for="address">Customer Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Customer Address" required>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.alert').alert()
    </script>
@endsection
