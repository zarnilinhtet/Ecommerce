<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>

    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.header')
            <!-- partial -->
            <div class="content-wrapper">
                <p style="font-size: 30px">Show Product</p>
                @if(session('success_delete_product'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{session('success_delete_product')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif
                <table class="table table-striped mt-5  text-white">
                    <thead>
                        <tr class="">
                            <th scope="col" class="text-primary "> No</th>
                            <th scope="col" class="text-primary "> Title</th>
                            <th scope="col" class="text-primary">Description</th>
                            <th scope="col" class="text-primary">Quantity</th>
                            <th scope="col" class="text-primary">Price</th>
                            <th scope="col" class="text-primary">Discount Price</th>
                            <th scope="col" class="text-primary">Category</th>
                            <th scope="col" class="text-primary "> Image</th>
                            <th scope="col" class="text-primary "> Action</th>
                        </tr>
                    </thead>
                    @php
                    $no=1;
                    @endphp
                    @foreach ($show_product as $show_product)
                    <tbody>
                        <tr>
                            <td>{{ $no}}</td>
                            <td>{{ $show_product->title }}</td>
                            <td>{{ $show_product->description }}</td>
                            <td>{{ $show_product->quantity }}</td>
                            <td>{{ $show_product->price }}</td>
                            <td>{{ $show_product->discount_price }}</td>
                            <td>{{ $show_product->category }}</td>
                            <td class="">
                                <img src="/product/{{ $show_product->image }}" alt="" style="width:70px;height:60px">
                            </td>
                            <td>
                                <a href="{{ url('/update_product',$show_product->id) }}" class="btn btn-success"> Edit
                                </a>
                                <a href="{{ url('/delete_product',$show_product->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Are You Sure You Want To Delete  This Product')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    @php
                    $no++;
                    @endphp
                    @endforeach
                </table>
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('admin.script')
            <!-- End custom js for this page -->
</body>

</html>