@extends('layouts.master')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <!-- ADD PRODUCT BUTTON-->
    <button class="btn btn-link" data-toggle="modal" data-target="#myModal">
        Add Product
    </button>

    <!-- TEMPORARY CONTENT -->
    @include('layouts.monthlyreport')
    @include('layouts.visitorsreport')

    <!-- ADD PRODUCT FORM-->
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                  <p class="login-box-msg" style="font-weight: bold; font-size: 20px;">Add Product!</p>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('product') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="c_name" class="col-md-4 col-form-label text-md-right">Category Name</label>
                            <div class="col-md-6">
                                <select class="form-control" type="text" name="c_name">
                                    <option>Laptop</option>
                                    <option>Cellphone</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="p_name" class="col-md-4 col-form-label text-md-right">Product Name</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="p_name" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="b_name" class="col-md-4 col-form-label text-md-right">Brand Name</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="b_name" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="y_model" class="col-md-4 col-form-label text-md-right">Year Model</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="y_model" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="description" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="qty" class="col-md-4 col-form-label text-md-right">Quantity</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="qty" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="price" >
                            </div>
                        </div>      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div> <!-- END MODAL -->
</div>
@endsection
