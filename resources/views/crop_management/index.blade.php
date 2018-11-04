@extends('layouts.master')

@section('crops_index')

<div class="inner_content">
    <div class="inner_content_w3_agile_info">
        <div class="agile_top_w3_grids">
                  

                    <button id='create' type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create Crop</button>
                    @include('crop_management.create')
                    @include('crop_management.edit')

                    {!! Form::open(array('route' => 'search', 'class'=>'form navbar-form navbar-right searchform')) !!}
                        {!! Form::text('search', null,
                                               array('required',
                                                    'class'=>'form-control',
                                                    'placeholder'=>'Search for crops')) !!}
                         {!! Form::submit('Search',
                                                    array('class'=>'btn btn-default')) !!}
                     {!! Form::close() !!}
                    <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Season Name</td>
                            <td>Process</td>
                            <td>Season Manager</td>
                            <td>Started Date</td>
                            <td>End Date</td>
                            <td>Description</td>
                            <td>Crop Image</td>
                            <td>Option</td>
                            
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($crops as $key => $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->crop_name }}</td>
                            <td>{{ $value->season_name }}</td>
                            <td>{{ $value->process }}</td>
                            <td>{{ $value->season_manager }}</td>
                            <td>{{ $value->started_date }}</td>
                            <td>{{ $value->end_date }}</td>
                            <td>{{ $value->description }}</td>
                            <td>
                            <img src="{{ asset('img/'.$value->crop_image) }}"  width="50" height="50" alt="" /></td>
                         
                            <td>

                            
                      
                         

                            {!! Form::open(['method' => 'DELETE','route' => ['crops.destroy', $value->id],]) !!}

                            <a class="btn btn-success"  data-target="#edit" data-toggle="modal" data-id="{{ $value->id }}"
                                    data-cn="{{ $value->crop_name }}"  data-sn="{{ $value->season_name }}"  data-p="{{ $value->process }}"
                                    data-sm="{{ $value->season_manager }}" data-sd="{{ $value->started_date }}" data-ed="{{ $value->end_date }}"
                                    data-dp="{{ $value->description }}" data-ci="{{ $value->crop_image }}"
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