@extends('layouts.app')

@section('content')
    <!-- Material form contact -->
    <div class="card">

        <h5 class="card-header warning-color-dark white-text text-center py-4">
            <strong>Add Product</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" style="color: orange;"
                  action="{{ route('products.store') }}" method="POST"
                  enctype="multipart/form-data">
            @csrf
            <!-- Name -->
                <div class="md-form mt-3">
                    <input name="name" type="text" id="name" class="form-control">
                    <label for="name">Product Name</label>
                </div>
                <div class="md-form mt-3">
                    <!--Material textarea-->
                    <div class="md-form">
                        <textarea name="desc" id="desc" class="md-textarea form-control" rows="3"></textarea>
                        <label for="desc">Product Description</label>
                    </div>
                </div>
                <div class="md-form mt-3">
                    <input name="release_date" type="date" id="release_date" class="form-control">
                    <label for="release_date">Product Release Date</label>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input"
                               id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"
                               name="image">
                        <label class="custom-file-label" for="inputGroupFile01">Product Image</label>
                    </div>
                    <!-- Material input -->
                    <div class="input-group">
                        <div class="md-form">
                            <input name="price" type="number" id="price" class="form-control" step="0.01">
                           <label for="form1">Price</label>
                            <small class="text-success">$USD</small>
                        </div>
                    </div>
                </div>
                <!-- Send button -->
                <button class="btn btn-warning btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">
                    Add Product
                </button>
            </form>
            <!-- Form -->

        </div>

    </div>
    <!-- Material form contact -->
@endsection
