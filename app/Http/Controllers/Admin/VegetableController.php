<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class VegetableController extends Controller
{

    public function index()
    {
        $products = Product::query()
            ->orderBy('name')
            ->with(['product'])
            ->when(
                auth()->user()->is_product_admin,
                function ($query) {
                    $query->where('product_id', auth()->user()->product_id);
                }
            )
            ->get();

        return view('products.index', [
            'products' => $products,
        ]);
    }
    public function create()
    {
        return view('products.create', [
            'products' => Product::query()->orderBy('name')->get(),
        ]);
    }

    public function store(ProductRequest $request)
    {
        //        $validated = $request->validated();
//
//        $job = new Job();
//        $job->product_id = $validated['product_id'];
//        $job->name = $validated['name'];
//        $job->salary = $validated['salary'];
//        $job->save();

        Product::query()->create($request->validated());

        return redirect()->route('products.index')->with([
            'message' => 'Product created successfully',
        ]);
    }

    public function show(Product $products)
    {
        abort_unless(auth()->user()->product_id == $products->product_id, 404);

        return view('products.show', [
            'product' => $products,
        ]);
    }

    public function edit(Product $products)
    {
        abort_unless(auth()->user()->product_id == $products->product_id, 404);
        //        abort_if(auth()->user()->product_id != $job->product_id, 404);

        //        if($job->product_id != auth()->user()->product_id) {
//            abort(404);
//        }

        return view('products.edit', [
            'companies' => product::query()->orderBy('name')->get(),
            'product' => $products
        ]);
    }

    public function update(ProductRequest $request, Product $products)
    {
        abort_unless(auth()->user()->product_id == $products->product_id, 404);

        $products->update($request->validated());

        return redirect()->route('products.index')->with([
            'message' => 'Product updated successfully',
        ]);
    }

    public function destroy(Product $products)
    {
        abort_unless(auth()->user()->product_id == $products->product_id, 404);

        $products->delete();

        return redirect()->route('products.index')->with([
            'message' => 'Product deleted successfully',
        ]);
    }
}