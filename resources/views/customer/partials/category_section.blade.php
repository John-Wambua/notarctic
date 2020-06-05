
        <div class="container">


                <section class="latest-product-area pb-40 category-list" style="margin-top: 50px">
                    <div class="row">

                        @foreach($category as $category)

                        <div class="col-md-6 col-lg-4">
                            <div class="card text-center card-product">
                                <div class="card-product__img">
                                    <img class="card-img" src="img/product/img{{$category->id}}.png" style="width: 210px;height: 210px" alt="">

                                </div>
                                <div class="card-body">
{{--                                    <p>Accessories</p>--}}
                                    <h4 class="card-product__title"><a href="/categories/{{ $category->id }}" >{{$category->name}}</a></h4>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    </div>

                </section>

    </div>

