@extends('layout.master')

@section('title', "product_page")

@section('content')

    @include('layout.navigation-top')

    @include('layout.navigation-search')


    <div class="col-sm-8 blog-main">

        <h1>{{$product->Title}}</h1>

        {{$product->price}}

        <hr>
        <h1>main image</h1>
        <img src="{{ Voyager::image($product->image)}}" alt="" style="height: 300px;width: 300px">
        <h3>multiple images</h3>


        <?php

        $images = json_decode($product->gallery);

        for ($i=0;$i<3;$i++)
        {
            echo "<img src=" .Voyager::image($images[$i]) . " style='height: 300px;width: 300px'>";
        }

        ?>


        @include('layout.footer')
        @stop

    </div>


