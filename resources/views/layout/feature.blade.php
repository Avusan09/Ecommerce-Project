<section class="featured-items">
    <div class="row">
        <div class="col s12 m2">
            <div class="card blue darken-4 side-titles">
                <div class="card-content white-text " style="height: 100%;">
                    <span class="card-title">Laptops</span>

                    <span><i class="fa fa-laptop fa-5x"></i></span>
                </div>

            </div>
        </div>

        <div class="col s12 m10">

            <div class="row">
                @foreach($laptops as $product)
                    @if($product->category_id == 3)


                <div class="col s6 m3 no-gutter">
                    <div class="card small1 ">
                        <div class="card-image waves-effect waves-light">
                            <a href="/products/{{$product->id}}">
                            <img class="featured-images" src= "{{asset('storage/products/' . $product->image)}}">
                            </a>
                        </div>

                        <div class="card-content">
                            <strong>
                                {{$product->Title}}
                            </strong>
                            <br>
                            <small> {{$product->price}}</small>

                            <br><br>

                            <span>
                                <i class="fa fa-star yellow-text"></i>
                                 <i class="fa fa-star yellow-text"></i>
                                 <i class="fa fa-star yellow-text"></i>
                                <i class="fa fa-star black-text"></i>
                                <i class="fa fa-star black-text"></i>

                            </span>


                        </div>

                    </div>
                </div>
                    @endif
                @endforeach

            </div>
        </div>



    </div>
</div>
    <div class="center">
        <button class="btn btn-primary">View All LAPTOPS</button>
    </div>
    <br>
</section>