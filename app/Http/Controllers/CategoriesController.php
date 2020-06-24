<?php

    namespace App\Http\Controllers;

    use App\Category;
    use App\Http\Requests\Category\CreateCategoryRequest;
    use App\Http\Requests\Category\UpdateCategoryRequest;
    use Illuminate\Http\Request;

    class CategoriesController extends Controller
    {
        /**
         * Display a listing of Category the resource.
         *
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function index()
        {
            //

            return view('categories.index')->with('categories', Category::all());
        }

        /**
         * Show the form for creating a new  Category resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //

            return view('categories.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(CreateCategoryRequest $request)
        {

            Category::create([
                'name' => $request->name
            ]);

            session()->flash('success', "{$request->name} Added");

            return redirect(route('categories.index'));
        }

        /**
         * Display the specified resource.
         *
         * @param \App\Category $category
         * @return \Illuminate\Http\Response
         */
        public function show(Category $category)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Category $category
         * @return \Illuminate\Http\Response
         */
        public function edit(Category $category)
        {
            //

            return view('categories.edit')->with('category', $category);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Category $category
         * @return \Illuminate\Http\Response
         */
        public function update(UpdateCategoryRequest $request, Category $category)
        {
            $category->update([
                'name' => $request->name
            ]);
            session()->flash('success', "$category->name Updated");

            return redirect(route('categories.index'));
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Category $category
         * @return \Illuminate\Http\Response
         */
        public function destroy(Category $category)
        {
            //
            $category->delete();
            session()->flash('success', "$category->name Deleted.");

            return redirect(route('categories.index'));
        }
    }
