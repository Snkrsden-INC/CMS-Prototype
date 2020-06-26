{{--TODO: Category - Add delete functionality to modal--}}
@extends('layouts.app')
@section('content')
    <!-- Editable table -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Products Table</h3>
        <div class="card-body">
            <div id="table" class="table-editable">
                        <span class="table-add float-right mb-3 mr-2">
                            <a href="{{ route('products.create') }}" class="text-success">
                                <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
                            </a>
                        </span>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">View</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Release Date</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Remove</th>
                        <th class="text-center text-sm-center">Average Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($products) > 0)
                        @foreach($products as $product)
                            <tr>
                                <td class="pt-3-half" contenteditable="true">{{ $product->name }}</td>
                                <td class="pt-3-half">
                                    <a href="{{ route('products.show', $product) }}" class="btn btn-success btn-rounded btn-sm">
                                        Show Case
                                    </a>
                                </td>
                                <td class="pt-3-half" contenteditable="true">{{ $product->desc }}</td>
                                <td class="pt-3-half" contenteditable="true">
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="thumbnail"
                                         class="img-thumbnail hoverable"
                                         style="width: 200px">
                                </td>
                                <td class="pt-3-half" contenteditable="true">{{ $product->release_date }}</td>

                                <td>
                                    <span class="table-remove">
                                        <a href="{{ route('products.edit', $product) }}" type="button"
                                           class="btn btn-danger btn-success btn-rounded btn-sm my-0">
                                            Edit
                                        </a>
                                    </span>
                                </td>
                                <td>
                                    <span class="table-remove">
                                         <button type="button" class="btn btn-danger btn-rounded btn-sm my-0"
                                                 data-toggle="modal"
                                                 data-target="#deleteModal" onclick="handleDelete({{ $product->id }})">
                                             Remove
                                         </button>
                                    </span>
                                </td>
                                <td>
                                    <p class="lead text-success"> ${{ $product->price }}</p>
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
            <form action="" method="POST" id="deleteProductForm">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header danger-color text-center">
                        <h5 class="modal-title col-12 text-center" id="deleteModalLabel">
                            Remove Category
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="text-center modal-body">
                        {{ isset($product->deleted_at) ? "Are you sure? This can't be undone" : 'Are you sure you want to delete this product? You can undo this in your "trash" folder.' }}
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
            let form = document.getElementById('deleteProductForm');
            form.action = `/products/${id}`
        }
    </script>
@endsection
