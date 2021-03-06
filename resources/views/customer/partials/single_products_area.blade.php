@foreach($product as $product)
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="owl-carousel owl-theme s_Product_carousel">
                    <div class="single-prd-item">
                        <H1>Ni Nini Maze!</H1>
                        <img src="{{asset("storage/images/$product->path")}}"  class="img-fluid" alt="">

                    </div>

                </div>
            </div>

            <div class="col-lg-5 offset-lg-1">

                <div class="s_product_text">

                    <h3>{{$product->name}}</h3>
                    <h2>Ksh {{$product->price}}</h2>
                    <ul class="list">
                        <li><a class="active" href="/categories/{{$product->category->id }}"><span>Category</span> : {{$product->category->name}}</a></li>
                        <li><a href="#"><span>Availibility</span> {{$product->quantity>1 ? ": In Stock" :": Out of Stock!"}}</a></li>
                    </ul>
                    <p>{{$product->description}}</p>
                    <div class="product_count">
                        <label for="qty">Quantity:</label>
                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                class="increase items-count" type="button"><i class="ti-angle-left"></i></button>
                        <input type="text" name="qty" id="sst" size="2" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                class="reduced items-count" type="button"><i class="ti-angle-right"></i></button>
                        <a class="button primary-btn" href="#">Add to Cart</a>
                    </div>
                    <div class="card_area d-flex align-items-center">
{{--                        <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>--}}
                        <form method="post" action="/wishlist/" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="product_id" value="{{$product->id}}"/>
                            <input type="hidden" name="user_id" value="5"/>
                            <button type="submit" style="border-radius:50%; color: red" class="icon_btn wishlist_btn">
                                <i class="fas fa-heart"></i>
                            </button>

                            {{--                        <a class="icon_btn"  href="#"><i class="lnr lnr lnr-heart"></i></a>--}}
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endforeach
