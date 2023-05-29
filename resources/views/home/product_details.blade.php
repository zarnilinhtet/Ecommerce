<!DOCTYPE html>
<html>
<base href="/public">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="home/images/logo.png" type="">
    <title>MALL OF AMERICA</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="home/css/p_detail.css">
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
</head>
<style>

</style>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')


        <div class="container " style="margin-top:150px">
            <div class="col-lg-8 border p-3 main-section bg-white">
                <div class="row hedding m-0 pl-3 pt-0 pb-3">
                    <span class="text-success">89 Mall </span>
                </div>
                <div class="row m-0">
                    <div class="col-lg-4 left-side-product-box pb-3">
                        <img src="/product/{{ $showProduct->image }}" class="border p-3">

                    </div>
                    <div class="col-lg-8">
                        <div class="right-side-pro-detail border p-3 m-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <span>Who Should Buy :</span>
                                    <p class="m-0 p-0">{{ $showProduct->title }}</p>
                                </div>
                                @if ($showProduct->discount_price!=null)

                                <div class="col-lg-12">
                                    <p class="m-0 p-0 price-pro" style="font-size: 20px;text-decoration:line-through">
                                        Price - $ {{
                                        $showProduct->price }}</p>

                                    {{--
                                    <hr class="p-0 m-0"> --}}
                                </div>
                                <div class="col-lg-12">
                                    <p class="m-0 p-0 price-pro" style="font-size: 20px">Discount Price - $ {{
                                        $showProduct->discount_price }}
                                    </p>

                                    <hr class="p-0 m-0">
                                </div>
                                @else
                                <div class="col-lg-12">
                                    <p class="m-0 p-0 price-pro" style="font-size: 20px;">
                                        Price - $ {{
                                        $showProduct->price }}</p>
                                </div>
                                @endif
                                {{-- <div class="col-lg-12">
                                    <p class="m-0 p-0 price-pro">$30</p>
                                    <p class="m-0 p-0 price-pro"></p>
                                    <hr class="p-0 m-0">
                                </div> --}}
                                <div class="col-lg-12 pt-2">
                                    <h5>Product Detail</h5>
                                    <span class="price-pro">{{ $showProduct->created_at->diffForHumans() }}</span> <br>
                                    <span>{{ $showProduct->description }}</span>
                                    <hr class="m-0 pt-2 mt-2">
                                </div>
                                <div class="col-lg-12">
                                    <p class="tag-section"><strong>Category : </strong><a href="">{{
                                            $showProduct->category }}</p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="tag-section "><strong class="text-dark">Quantity : </strong><a href="">{{
                                            $showProduct->quantity }}</p>
                                </div>
                                {{-- <div class="col-lg-12">
                                    <h6>Quantity : {{ $showProduct->quantity }}</h6>

                                </div> --}}
                                <div class="col-lg-12 mt-3">
                                    <div class="row">
                                        <div class="col-lg-6 pb-2">
                                            <a href="#" class="btn btn-danger w-100">Add To Cart</a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#" class="btn btn-success w-100">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('home.footer')



    <!-- footer end -->
    {{-- <div class="cpy_">
        <p class="mx-auto"> <a href="">Ecommerce Project</a><br>

            By <a href="https://github.com/zarnilinhtet" target="_blank">ZarNiLinHtet</a><br><br>
            Github - <a href="https://github.com/zarnilinhtet" target="_blank">zarnilinhtet</a>

        </p>
    </div> --}}
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>

    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html>

{{--
<div class="col-sm-6 col-md-4 col-lg-4 m-auto" style="padding:30px;width:auto;height:auto">
    <div class="box">

        <div class="img-box text-center">
            <img src="/product/{{ $showProduct->image }}" alt="" style="width:70%;height:80%">
        </div>
        <div class="detail-box">
            <h5 class="text-center mt-4">
                {{ $showProduct->title }}
            </h5>
            @if ($showProduct->discount_price!=null)

            <h6 style="text-decoration: line-through" class="text-danger text-center">
                Price - $ {{ $showProduct->price }}
            </h6>
            <h6 class="text-center">Discount Price -
                $ {{ $showProduct->discount_price }}
            </h6>

            @else
            <h6>
                $ {{ $showProduct->price }}
            </h6>
            @endif
            <h6 class="text-center"><span class="text-center">Product Description</span> - {{
                $showProduct->description }}</h6>
            <h6 class="text-center"><span class="">Product Category</span> - {{ $showProduct->category }}</h6>
            <h6 class="text-center">Product Quantity - {{ $showProduct->quantity }}</h6>

        </div>
    </div>

</div> --}}