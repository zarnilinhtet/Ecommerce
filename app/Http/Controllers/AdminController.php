<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // Add category
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category()
    {
        $add_category = request()->validate([
            'category_name' => ['required']
        ]);

        Category::create($add_category);
        return redirect()->back()->with('success_category', 'Create Category is Successful');
    }
    public function delete_category($id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('success_delete', 'Delete Category is Successful');
    }

    public function view_product()
    {
        $category = Category::all();
        return view('admin.product', compact('category'));
    }



    // ADD Product
    public function add_product(Request $request)
    {

        request()->validate([
            'title' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'quantity' => ['required'],
            'discount_price' => ['required'],
            'category' => ['required'],
            'image' => ['required'],

        ], [
            'title' => 'Title cannot be empty',
            'description' => 'Description cannot be empty',
            'price' => 'Price cannot be empty',
            'quantity' => 'quantity cannot be empty',
            'discount_price' => 'Discount Price cannot be empty',
            'category' => 'Category Price cannot be empty',
            'image' => 'Image Price cannot be empty',

        ]);

        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->discount_price;
        $product->category = $request->category;

        // Upload Image
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image = $imagename;

        $product->save();

        return redirect()->back()->with('success_add_product', 'Adding Product is Successful');
    }
}
