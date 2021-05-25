@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Product Status Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product Status Form</li>
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
                            <h3 class="card-title">Quick Add Product Status Details</h3>
                        </div>

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('addProductStatusSubmit')}}" method="Post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body ">

                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control" name="status">
                                        <option value="Initial">initial</option>
                                        <option value="Deported">Deported</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Delivered">Delivered</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address">Order Date</label>
                                    <input type="date" class="form-control" id="status_date" name="status_date" required>
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
