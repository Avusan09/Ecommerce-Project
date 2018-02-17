<section class="section">
    <div class="row" >
        {{--side navigation--}}

        {{--middle content--}}
        <div class="col s12 m12">


            <div class="carousel carousel-slider z-depth-4" data-indicators="true">
                @foreach($banner as $product)


                        <a class="carousel-item" href="/products/{{$product->id}}"><img alt="images_bitch" src= "{{asset('storage/products/' . $product->image)}}"></a>


                @endforeach


            </div>
        </div>
        {{--ad placement and informations--}}





    </div>
</section>

{{--Dropdowns--}}

