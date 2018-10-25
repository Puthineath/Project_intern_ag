<div id="HrModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
                 <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create Employee</h4>
                </div>

                 <div class="modal-body">
	

                    {!! Form::open(array('url' => 'employee')) !!}
                	

                    <div class="form-group">
                        {!! Form::label('first_name', 'First Name') !!}
                        {!! Form::text('first_name',null,array('placeholder' => 'First Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('last_name', 'Last Name') !!}
                        {!! Form::text('last_name',null,array('placeholder' => 'Last Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('department', 'Department') !!}
                        {!! Form::text('department',null,array('placeholder' => 'Department','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('position', 'Position') !!}
                        {!! Form::text('position',null,array('placeholder' => 'Position','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone_number', 'Phone Number') !!}
                        {!! Form::text('phone_number',null,array('placeholder' => 'Phone Number','class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email',null,array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>

                 </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>           
                    {!! Form::submit('Create Employee Profile!', array('class' => 'btn btn-success')) !!}
                </div>

                {!! Form::close() !!}
         </div>
     </div>
</div>
   

