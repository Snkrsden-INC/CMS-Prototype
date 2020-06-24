{{--TODO: Category - Center delete modal header--}}
@extends('layouts.app')
@section('content')
    <!-- Editable table -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Categories Table</h3>
        <div class="card-body">
            <div id="table" class="table-editable">
                        <span class="table-add float-right mb-3 mr-2">
                            <a href="{{ route('categories.create') }}" class="text-success">
                                <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
                            </a>
                        </span>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Move</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($categories) > 0)
                        @foreach($categories as $category)
                            <tr>
                                <td class="pt-3-half" contenteditable="true">{{ $category->name }}</td>
                                <td class="pt-3-half">
                                        <span class="table-up">
                                            <a href="#!" class="indigo-text">
                                                <i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i>
                                            </a>
                                        </span>
                                    <span class="table-down">
                                            <a href="#!" class="indigo-text">
                                                <i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i>
                                            </a>
                                        </span>
                                </td>
                                <td>
                                    <span class="table-remove">
                                        <a href="{{ route('categories.edit', $category) }}" type="button"
                                           class="btn btn-danger btn-success btn-rounded btn-sm my-0">
                                            Edit
                                        </a>
                                    </span>
                                </td>
                                <td>
                                    <span class="table-remove">
                                         <button type="button" class="btn btn-danger btn-rounded btn-sm my-0"
                                                 data-toggle="modal"
                                                 data-target="#deleteModal" onclick="handleDelete({{ $category->id }})">
                                             Remove
                                         </button>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-fluid modal-full-height modal-bottom" role="document">
            <form action="" method="POST" id="deleteCategoryForm">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header danger-color text-center">
                        <h5 class="modal-title col-12 text-center" id="deleteModalLabel">Remove Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="text-center modal-body">
                        Are you sure you want to delete this category? This action can't be undone.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">No, Go Back</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Editable table -->
@endsection

@section('scripts')
    <script>
        function handleDelete(id) {
            let form = document.getElementById('deleteCategoryForm');
            form.action = `/categories/${id}`
            console.log(form)
        }
    </script>
@endsection
