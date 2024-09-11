@extends('layouts.masterlayout')

@section('sidecontent')
@include('products.sider.categories')
@include('products.sider.specialOffers')
@include('products.sider.productsTag')
@include('products.sider.specialsDeals')
@include('products.sider.testimonial')
@endsection


@section('maincontent')
    @include('products.content.categorybanner')
    @include('products.content.searchproduct')
@endsection
