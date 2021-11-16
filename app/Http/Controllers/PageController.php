<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Products;
use App\Store;
use App\User;
use App\View;

class PageController extends Controller
{
    public function welcome(Request $request)
    {
        $product = Products::latest()->take(6)->get();
        return view('welcome', compact('product'));
    }

    public function katalog(Request $request, $search = "")
    {
        $product = Products::paginate(8);
        $category = Category::all();
        if (isset($request->category)) {
            $product = Products::where('id_category', '=', $request->category)->paginate(8)->get();
        } else {
            if (isset($request->search)) {
                $search = $request->search;
            }
            $product = Products::where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('crafter', 'LIKE', '%' . $search . '%')
                ->orWhere('description', 'LIKE', '%' . $search . '%')
                ->orWhere('price', 'LIKE', '%' . $search . '%')
                ->paginate(8);
        }
        return view('katalog', compact('product', 'category', 'search'));
    }

    public function detailProduk(Request $request, $id_product)
    {
        // adding view
        $view = new View();
        $view->reference_id = $id_product;
        $view->save();

        $product = Products::find($id_product);
        $data = Products::latest()->take(4)->get();
        return view('detailProduk', compact('product', 'data'));
    }
}
