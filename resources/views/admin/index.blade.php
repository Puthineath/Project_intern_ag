@extends('layouts.master')

@section('user_index')

<div class="inner_content">
    <div class="inner_content_w3_agile_info">
        <div class="agile_top_w3_grids">
                  

               
                    <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>User Name</td>
                            <td>User Email</td>
                            <td>User Created_at</td>
                            <td>User Role</td>
                            <td>Option</td>
                            
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                        <tr>
                          <td>{{$user->name}}</td>
                         <td>{{$user->email}}</td>
                         <td>{{$user->created_at->toFormattedDateString()}}</td>
                         
                            <td>
                             {!! Form::open(['route' => ['user.update', $user->id],'style'=>'display:inline']) !!}
                            {!! Form::select('roles', array('Customer'=>'Customer','Admin'=>'Admin','Farmer'=>'Farmer'),$user->roles,['placeholder'=>'Please Select','class'=>'form-control','style'=>'padding:0px'])!!} 

                      </td>
                            
                     <td>      
                                {!! Form::submit('Change', ['class' => 'btn btn-success']) !!}
                                {!! Form::close() !!}
                                {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-delete ']) !!}
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