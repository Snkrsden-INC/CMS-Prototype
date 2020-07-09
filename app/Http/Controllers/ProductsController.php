<?php

    namespace App\Http\Controllers;

    use App\Category;
    use App\Http\Requests\Product\CreateProductRequest;
    use App\Product;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Storage;

    class ProductsController extends Controller
    {
        /**
         * Display a listing of the Product resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index(Product $products)
        {
//            $products = Product::orderBy('id', 'DESC')->get();
            return view('products.index')->with('products', Product::orderBy('id', 'DESC')->get());
        }

        /**
         * Show the form for creating a new Product resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {

            return view('products.create')->with('categories', Category::all());
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(CreateProductRequest $request)
        {
            // Upload the image
//            $image = $request->image->store('products');
            // Store product
            Product::create([
                'name' => $request->name,
                'colorway' => $request->colorway,
                'style' => $request->style,
                'condition' => $request->condition,
                'ticker' => $request->ticker,
                'content' => $request->content,
                'desc' => $request->desc,
                'image' => $request->file('image')->store('products', 'public'),
                'release_date' => $request->release_date,
                'price' => $request->price,
            ]);
            // Flash message
            session()->flash('success', "{$request->name} Created.");

            // Redirect User

            return redirect(route('products.index'));
        }

        /**
         * Display the specified resource.
         *
         * @param \App\Product $product
         * @return \Illuminate\Http\Response
         */
        public function show(Product $product)
        {
            return view('products.show')->with('product', $product);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Product $product
         * @return \Illuminate\Http\Response
         */
        public function edit(Product $product)
        {

            return view('products.create')->with('product', $product);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Product $product
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Product $product)
        {
            $product->update($request->all());

            session()->flash('success', "$product->name updates successfully.");

            return redirect(route('products.index'));
        }


        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Product $product
         * @param $id
         * @return \Illuminate\Http\Response
         * @throws \Exception
         */
        public function destroy($id)
        {
            $product = Product::withTrashed()->where('id', $id)->firstOrFail();

            if ($product->trashed()) {
                Storage::delete($product->image);
                $product->forceDelete();
            } else {
                // Delete product(Product model has soft delete)
                $product->delete();
            }
            // Flash message to user
            session()->flash('success', "$product->name has been removed, you can restore this item by visiting your removed products list.");

            // Redirect user to Product index page
            return redirect(route('products.index'));
        }


        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Product $product
         * @return \Illuminate\Http\Response
         */
        public function trashed()
        {
            $trashed = Product::onlyTrashed()->get();
            return view('products.index')->withProducts($trashed);
        }
    }
