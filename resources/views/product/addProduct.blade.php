@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Product Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product Form</li>
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
                            <h3 class="card-title">Quick Add Product Details</h3>
                        </div>

                    <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('addProductSubmit')}}" method="Post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body ">

                                <div class="form-group">
                                    <label for="customerName">Product Name</label>
                                    <input type="text" class="form-control" id="customer" name="p_name" placeholder="Enter Product Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Description</label>
                                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter Product Description" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Price</label>
                                    <input type="text" class="form-control" name="price" id="price" placeholder="Enter Product Price" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Order Date</label>
                                    <input type="date" class="form-control" id="order_date" name="order_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Product Quantity</label>
                                    <input type="number" class="form-control" id="qty" name="qty"  required>
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
