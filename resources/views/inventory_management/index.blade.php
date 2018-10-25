@extends('layouts.master')
@section('inventory_index')

<div class="inner_content">
    <div class="inner_content_w3_agile_info">
        <div class="agile_top_w3_grids">
                <button style='width:150px' id='create' type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#IvModal">Create Inventory</button>
                        @include('inventory_management.create')
                        @include('inventory_management.edit')

                {!! Form::open(array('route' => 'searchInventory', 'class'=>'form navbar-form navbar-right searchform')) !!}
                        {!! Form::text('search', null,
                                               array('required',
                                                    'class'=>'form-control',
                                                    'placeholder'=>'Search for Inventory')) !!}
                         {!! Form::submit('Search',
                                                    array('class'=>'btn btn-default')) !!}
                {!! Form::close() !!}

            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Unit Price</td>
                    <td>Amount</td>
                    <td>Total</td>
                    <td>Created Date</td>
                    <td>Expired Date</td>
                    <td>Description</td>
                    <td>Product Image</td>
                    <td>Option</td>
                    
                </tr>
            </thead>
            <tbody>
            @foreach($inventories as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->product_name }}</td>
                    <td>{{ $value->unit_price }}</td>
                    <td>{{ $value->amount }}</td>
                    <td>{{ $value->total }}</td>
                    <td>{{ $value->created_date }}</td>
                    <td>{{ $value->expired_date }}</td>
                    <td>{{ $value->description }}</td>
                    <td>{{ $value->product_image }}</td>
                   

                    <!-- we will also add show, edit, and delete buttons -->
                    <td>

                            
                        {!! Form::open(['method' => 'DELETE','route' => ['inventory.destroy', $value->id],]) !!}   
                            <a class="btn btn-success"  data-target="#IvEdit" data-toggle="modal" data-id="{{ $value->id }}"
                                    data-pn="{{ $value->product_name }}"   
                                    data-up="{{ $value->unit_price }}"
                                    data-am="{{ $value->amount }}" 
                                    data-to="{{ $value->total }}" 
                                    data-cd="{{ $value->created_date }}"
                                    data-ed="{{ $value->expired_date }}"
                                    data-des="{{ $value->description }}"
                                    data-pi="{{ $value->product_image }}"
                                    
                                   >Edit</a>

                   
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-delete']) !!}
                        {!! Form::close() !!}
                    </td>
                    </tr>
                @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>


@endsection