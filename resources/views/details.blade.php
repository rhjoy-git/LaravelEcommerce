@extends('layouts.masterlayout')

@section('sidecontent')
    @include('products.sider.categories')
    @include('products.sider.specialOffers')
    @include('products.sider.newsletter')
@endsection


@section('maincontent')
    @include('details.detailblock')
    @include('details.productinfobox')
    @include('products.content.upsellproducts')
@endsection