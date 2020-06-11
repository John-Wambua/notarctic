<section class="section-margin mt-0">
    <div class="owl-carousel owl-theme hero-carousel">
        @foreach($products as $product)
        <div class="hero-carousel__slide">
            <img src="{{asset("storage/images/$product->path")}}" alt="" class="img-fluid">
            <a href="/description/{{ $product->id }}" class="hero-carousel__slideOverlay">
                <h3>{{$product->name}}</h3>
                <p>Accessories Item</p>
            </a>
        </div>
        @endforeach
    </div>
</section>
