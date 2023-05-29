<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $showProduct = Product::paginate(6);
        return view('home.userpage', compact('showProduct'));
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.home');
        } else {
            return view('home.userpage');
        }
    }

    public function product_details($id)
    {
        $showProduct = Product::find($id);
        return view('home.product_details', compact('showProduct'));
    }
}
