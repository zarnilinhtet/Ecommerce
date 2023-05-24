<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="slide-left">
        <div>
            @include('admin.header')
            @include('admin.sidebar')
        </div>


        <div class="content-wrapper">
            @if(session('success_add_product'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success_add_product')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @endif
            <div class="container" style="margin-bottom:150px">
                <h1 class="text-center" style="font-size: 30px">Add Products</h1>
                <div class="col-md-6 offset-3 mt-4">
                    <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Title</label>
                            <input type="text" name="title" class="form-control text-dark" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Product Title"
                                style="background: rgb(255, 255, 255)">
                            @error('title')
                            <div class="text-danger mb-4">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>

                            <input type="text" name="description" class="form-control text-dark" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Product Description"
                                style="background: rgb(255, 255, 255)">
                            @error('description')
                            <div class="text-danger mb-4">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Price</label>

                            <input type="number" name="price" class="form-control text-dark" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Product Description"
                                style="background: rgb(255, 255, 255)">
                            @error('price')
                            <div class="text-danger mb-4">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Discount Price</label>
                            <input type="number" name="discount_price" class="form-control text-dark"
                                id="exampleInputPassword1" placeholder="Enter Discount Price"
                                style="background: rgb(255, 255, 255)">
                            @error('discount_price')
                            <div class="text-danger mb-4">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Quantity</label>
                            <input type="number" name="quantity" class="form-control text-dark" min="0"
                                id="exampleInputPassword1" placeholder="Enter Product Quantity"
                                style="background: rgb(255, 255, 255)">
                            @error('quantity')
                            <div class="text-danger mb-4">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Category</label>
                            <select name="category" class="form-control text-dark"
                                style="background: rgb(255, 255, 255)">
                                <option value="" selected=""> Add Category</option>
                                @foreach ($category as $category)

                                <option value="{{ $category->category_name }}"> {{ $category->category_name }}
                                </option>
                                @endforeach
                            </select>
                            @error('category')
                            <div class="text-danger mb-4">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Image</label>
                            <input class="form-control text-dark  form-control-lg" id="formFileLg" type="file"
                                name="image" style="background: rgb(255, 255, 255)">
                            @error('image')
                            <div class="text-danger mb-4">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
     
            @include('admin.script')

</html>
