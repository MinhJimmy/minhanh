<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     *  index
     */
    public function index()
    {
        return view('admin.product.dashboard');
    }

    public function view()
    {
        $products = [
            "all" => Product::orderBy('id_product', 'desc')->get()
        ];

        return view('admin.product.view', compact('products'));
    }

    /**
     *  create new
     */
    public function create(Request $request)
    {
        $categories = Category::orderBy('id_catalog', 'desc')->get();
        if ($request->ajax()) {
            return view('admin.product.create', compact('categories'))->render();
        }
    }

    public function insert(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required',
            'id_catalog' => 'required',
            // 'img' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'pricesale' => 'required',
            'number' => 'required',
        ]);

        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = time() . '.' . $request->img->extension();
            $file->move(public_path('frontend/shop/images/home'), $filename);
            $request->img = $filename;
            Product::create([
                'name' => $request->name,
                'id_catalog' => $request->id_catalog,
                'detail' => $request->detail,
                'img' => $filename,
                'price' => $request->price,
                'pricesale' => $request->pricesale,
                'number' => $request->number
            ]);
        }

        return redirect()->back();
    }

    /**
     *  edit
     */
    public function edit(Request $request, $id)
    {
        $categories = Category::orderBy('id_catalog', 'desc')->get();
        if ($request->ajax()) {
            $data = Product::findOrFail($id);

            return view('admin.product.edit', compact('data', 'categories'))->render();
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'id_catalog' => 'required',
            // 'img' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'pricesale' => 'required',
            'number' => 'required',
        ]);

        $data = Product::findOrFail($id);

        $data->name = $request->name;
        $data->id_catalog = $request->id_catalog;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->pricesale = $request->pricesale;
        $data->number = $request->number;

        $data->save();
        return redirect()->back();
    }

    /**
     *  delete
     */
    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            Product::where('id_product', $id)->delete();

            return redirect()->back();
        }
    }
}
