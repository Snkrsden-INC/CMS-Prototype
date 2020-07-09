@extends('layouts.app')

@section('content')
    <!-- Material form contact -->
    <div class="card">

        <h5 class="card-header warning-color-dark white-text text-center py-4">
            <strong>{{ isset($product) ? "Update {$product->name}" : "Create Product" }}</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" style="color: orange;"
                  action="{{ isset($product) ? route('products.update', $product) : route('products.store')}}"
                  method="POST"
                  enctype="multipart/form-data">
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif

            <!-- Name -->
                <div class="md-form mt-3">
                    <input name="name" type="text"
                           id="name" class="form-control"
                           value="{{ isset($product->name) ? "$product->name" : old('name')}}"
                    >
                    <label for="name">{{ isset($product->name) ? "$product->name" : "Product Name" }}</label>
                </div>
                <div class="md-form mt-3">
                    <input name="ticker" type="text"
                           id="ticker" class="form-control"
                           value="{{ isset($product->ticker) ? "$product->ticker" : old('ticker') }}"
                    >
                    <label for="name">{{ isset($product->ticker) ? "$product->ticker" : "Product Ticker" }}</label>
                </div>
                <div class="md-form mt-3">
                    <input name="style" type="text"
                           id="style" class="form-control"
                           value="{{ isset($product->style) ? "$product->style" : old('style') }}">
                    <label for="name">{{ isset($product->style) ? "$product->syle" : "Product Style" }}</label>
                </div>
                <div class="md-form mt-3">
                    @if(count($categories) > 0)
                        <select name="category" class="browser-default custom-select">
                            <option selected>Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    @endif

                </div>
                <div class="md-form mt-3">
                    {{--                    COLORWAY--}}
                    <input name="colorway" type="text"
                           id="colorway" class="form-control"
                           value="{{ isset($product->colorway) ? "$product->colorway" : old('colorway') }}">
                    <label
                        for="name">{{ isset($product->colorway) ? "$product->colorway" : "Product Colorway" }}</label>
                </div>
                <div class="md-form mt-3">
                    <input name="condition" type="text"
                           id="condition" class="form-control"
                           value="{{ isset($product->condition) ? "$product->condition" : old('condition') }}">
                    <label
                        for="condition">{{ isset($product->condition) ? "$product->condition" : "Product Condition" }}</label>
                </div>
                <div class="md-form mt-3">
                    <!--Material textarea-->
                    <div class="md-form">
                        <textarea name="content" id="content" class="md-textarea form-control"
                                  rows="3">{{isset($product) ? "$product->content" : ""}}{{ old('content') }}</textarea>
                        <label
                            for="content">{{ isset($product->content) ? "$product->content" : "Product Content" }}</label>
                    </div>
                </div>
                <div class="md-form mt-3">
                    <!--Material textarea-->
                    <div class="md-form">
                        <textarea name="desc" id="desc" class="md-textarea form-control"
                                  rows="5">{{isset($product) ? "$product->desc" : ""}}{{ old('desc') }}</textarea>
                        <label for="desc">{{ isset($product) ? "$product->desc" : "Product Description" }}</label>
                    </div>
                </div>
                <div class="md-form mt-3">
                    <input name="release_date" type="date"
                           id="release_date" class="form-control"
                           value="{{ isset($product) ? "$product->release_date" : "" }}"
                    >
                    <label
                        for="release_date">{{ isset($product->release_date) ? "$product->release_date" : "Product Release Date" }}</label>
                </div>
                <div class="input-group">
                    @if (isset($product))
                        <div class="text-center col-12">
                            <a href="">
                                <img src="{{ asset("storage/$product->image") }}"
                                     alt="thumbnail" class="img-thumbnail float-left"
                                     style="width: 200px">
                            </a>
                        </div>
                    @else
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input"
                                   id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"
                                   name="image">
                            <label class="custom-file-label" for="inputGroupFile01">Product Image</label>
                        </div>
                @endif

                <!-- Material input -->
                    <div class="input-group">
                        <div class="md-form">
                            @if(isset($product))
                                <input name="price" type="number"
                                       id="price" class="form-control"
                                       step="0.01" value="{{ $product->price }}">
                                <label for="form1">{{ $product->price }}</label>
                                <small class="text-success">$USD</small>
                            @else
                                <input name="price" type="number" id="price" class="form-control" step="0.01">
                                <label for="form1">Price</label>
                                <small class="text-success">$USD</small>
                            @endif
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

