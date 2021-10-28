<?php

namespace App\Http\Controllers;

use App\Products;
use App\Store;
use Illuminate\Http\Request;

use DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Products::all();
        return view('cms.product.product',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_view()
    {
        return view('cms.product.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_process(Request $request)
    {
        $request->validate([
            'id_category' => 'required',
            'crafter' => 'required',
            'title' => 'required',
            'description' => 'required',
            'foto' => 'required',
        ]);

        $store = Store::where('id_user', '=', Auth::id())->first();

        $product = new Products();
        $product->id_store = $store->id;
        $product->id_category = $request->id_category;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->photo = Storage::disk('public')->put('product', $request->file('foto'));

        $product->save();

        return redirect()->route('product')->withSuccess('Product created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_view($id)
    {
        $data = Products::find($id);
        return view('cms.category.update', compact('data'));
    }

    public function update_process(Request $request, $id)
    {
        $request->validate([
            'id_category' => 'required',
            'crafter' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        
        $store = Store::where('id_user', '=', Auth::id())->first();

        $product = Products::find($id);
        $product->id_category = $request->id_category;
        $product->title = $request->title;
        $product->description = $request->description;

        if (isset($request->foto)) {
            $image_path = 'storage/' . $product->photo;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $product->photo = Storage::disk('public')->put('product', $request->file('foto'));
        }

        $product->save();

        return redirect()->route('product')->withSuccess('Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();

        return redirect()->route('product')->withSuccess('Product deleted successfully.');
    }
}
