@extends('layouts.app')

@section('content')
    <!-- Material form contact -->
    <div class="card">

        <h5 class="card-header warning-color-dark white-text text-center py-4">
            <strong>Add Category</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
            <form class="text-center" style="color: orange;" action="{{ route('categories.store') }}" method="POST">
            @csrf
            <!-- Name -->
                <div class="md-form mt-3">
                    <input name="name" type="text" id="name" class="form-control">
                    <label for="name">Category Name</label>
                </div>
                <!-- Send button -->
                <button class="btn btn-warning btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">
                    Add
                </button>
            </form>
            <!-- Form -->

        </div>

    </div>
    <!-- Material form contact -->
@endsection
