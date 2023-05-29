<section class="product_section layout_padding" id="product">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">

            @foreach ($showProduct as $showProducts)


            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="{{ url('/product_details',$showProducts->id) }}" class="option1">
                                Details
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="/product/{{ $showProducts->image }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{ $showProducts->title }}
                        </h5>
                        @if ($showProducts->discount_price!=null)
                        <h6>
                            $ {{ $showProducts->discount_price }}
                        </h6>
                        <h6 style="text-decoration: line-through" class="text-danger">
                            $ {{ $showProducts->price }}
                        </h6>
                        @else
                        <h6>
                            $ {{ $showProducts->price }}

                        </h6>
                        @endif


                    </div>
                    <p class="mt-1 " style="font-size:12px">{{ $showProducts->created_at->diffForHumans() }}</p><br>
                </div>

            </div>
            @endforeach
            {{-- { !! $showProduct->withQueryString()->links('pagination::bootstrap-5')!! } --}}

        </div>
        <div style="margin-top: 40px">


            {!! $showProduct->withQueryString()->links('pagination::bootstrap-5') !!}

        </div>
</section>