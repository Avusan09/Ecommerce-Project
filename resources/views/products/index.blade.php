@extends('layout.master')

@section('title', "product_page")

@section('content')

    @include('layout.navigation-top')

    @include('layout.navigation-search')

    <div class="col-sm-8 blog-main">

        @foreach($products as $product)

            @include('products.product')

        @endforeach

        @include('layout.footer')

    </div><!-- /.blog-main -->


@stop