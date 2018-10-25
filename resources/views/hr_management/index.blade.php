@extends('layouts.master')
@section('hr_index')

<div class="inner_content">
    <div class="inner_content_w3_agile_info">
        <div class="agile_top_w3_grids">
                <button style='width:150px' id='create' type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#HrModal">Create Employee</button>
                @include('hr_management.create')
                @include('hr_management.edit')

                {!! Form::open(array('route' => 'searchEmployee', 'class'=>'form navbar-form navbar-right searchform')) !!}
                        {!! Form::text('search', null,
                                               array('required',
                                                    'class'=>'form-control',
                                                    'placeholder'=>'Search for Employee')) !!}
                         {!! Form::submit('Search',
                                                    array('class'=>'btn btn-default')) !!}
                {!! Form::close() !!}

                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                  {{session()->get('success')}}
                </div>
                @endif
                    <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Department<x/td>
                            <td>Position</td>
                            <td>Email</td>
                            <td>Phone Number</td>
                            <td>Option</td>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $key => $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->first_name }}</td>
                            <td>{{ $value->last_name }}</td>
                            <td>{{ $value->department }}</td>
                            <td>{{ $value->position  }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->phone_number }}</td>

                         
                            <td>

                            {!! Form::open(['method' => 'DELETE','route' => ['employee.destroy', $value->id],]) !!}
                             
                            <a class="btn btn-success"  data-target="#HrEdit" data-toggle="modal" data-id="{{ $value->id }}"
                                    data-fn="{{ $value->first_name }}"  data-ln="{{ $value->last_name }}"  data-dp="{{ $value->department }}"
                                    data-pt="{{ $value->position }}" data-em="{{ $value->email }}" data-ph="{{ $value->phone_number }}"
                                    
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