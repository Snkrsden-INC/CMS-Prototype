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
                                    <a href="{{ route('products.show', $product) }}"
                                       class="btn btn-success btn-rounded btn-sm">
                                        Show Case
                                    </a>
                                </td>
                                <td class="pt-3-half" contenteditable="true">
                                    <div class="container">
                                        {{ $product->desc }}
                                    </div>
                                </td>
                                <td class="pt-3-half" contenteditable="false">
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="thumbnail"
                                         class="img-fluid hoverable"
                                         style="width: 300px;">
                                </td>
                                <td class="pt-3-half" contenteditable="true">{{ $product->release_date }}</td>

                                <td>
                                    @if($product->trashed())
                                        <p class="text-danger">
                                            Currently Trashed..
                                        </p>
                                    @else
                                        <span class="table-remove">
                                        <a href="{{ route('products.edit', $product) }}" type="button"
                                           class="btn btn-danger btn-success btn-rounded btn-sm my-0">
                                            Edit
                                        </a>
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <span class="table-remove">
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                    class="btn btn-danger btn-rounded btn-sm my-0"
                                                    data-toggle="modal" data-target="#deleteModal">
                                             {{ $product->trashed() ? 'Delete' : 'Remove' }}
                                         </button>
                                        </form>
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
                            Remove Product
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="text-center modal-body">
                        {{ isset($product->deleted_at) ? "Are you sure? This can't be undone" : 'Are you sure you want to delete this product? You can undo this in your "removed products" folder.' }}
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
        // function handleDelete(id) {
        //     console.log(id);
        //     let form = document.getElementById('deleteProductForm');
        //     form.action = `/products/${id}`
        // }
    </script>
@endsection

{{--TODO: Change products to product in delete route to correct soft delete issue--}}
