@extends('layout.master')

@section('title', "product_page")

@section('content')

    @include('layout.navigation-top')

    @include('layout.navigation-search')

    <?php

    $images = json_decode($product->gallery);



    ?>
    <div class="container">

    <div class="row">
        {{--Image side--}}
        <div class="col s12 m4 " style="padding-top: 50px">
            <div class="row">
                {{--Mini images--}}
                <div class="col  m3 hide-on-small-and-down " style="margin-top: 50px">
                    <img src="{{$product->gallery}}" a style="width: 100%;height: 10%" lt="">
                    
                    
                </div>
                {{--Thumbnail Images--}}
                <div class="col s9 m9 z-depth-4">
                    <img id="expandedImg" class="materialboxed" src= "{{asset('storage/products/' . $product->image)}}" alt="" style="height: 300px;width: 100%">
                </div>
            </div>

        </div>
        <div></div>
        {{--Content side--}}
        <div class="col s12 m8" style="padding: 20px">
            <h4>{{$product->Title}}</h4>

            <hr>

            <p>{{$product->description}}</p>

            <hr>





            <h4>NRs: {{$product->price}}

            </h4> <button class="btn indigo" style="position: relative;bottom: 10%"><i class="fa fa-cart-plus"></i>Add to cart</button>


        </div>
    </div>
        <div class="jumbotron">
            <h5 class="center-align" style="border: 1px solid grey">Related Products</h5>
            <hr>
            <div class="row" id="myDiv">
            @foreach($related as $rt)

                @if($rt->category_id == $product->category_id)


                    <div class="col s6 m3 no-gutter">
                        <div class="card small1 ">
                            <div class="card-image waves-effect waves-light">
                                <a href="/products/{{$rt->id}}">
                                    <img class="featured-images" src="{{ Voyager::image($rt->image)}}">
                                </a>
                            </div>

                            <div class="card-content">
                                <strong>
                                    {{$rt->Title}}
                                </strong>
                                <br>
                                <small> {{$rt->price}}</small>



                                <br><br>




                            </div>

                        </div>
                    </div>
                @endif
            @endforeach
            </div>


        </div>

    </div>


    @include('layout.footer')
    @stop




