@extends('layouts.master')

@section('product_index')
<div class="inner_content">
  <div class="inner_content_w3_agile_info">
     <div class="agile_top_w3_grids">      
        <div id="products" class="row list-group">

     @foreach($products as $key => $value)

                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="{{ asset('img/'.$value->crop_image) }}" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                {{ $value->crop_name }}</h4>
                            <p class="group inner list-group-item-text">
                                {{ $value->description }}</</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
