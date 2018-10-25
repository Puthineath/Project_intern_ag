
<div id="HrEdit" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Employee</h4>
                </div>

                <div class="modal-body">
                     {!! Form::model(null,['route' => ['employee.update','test'], 'method' => 'PATCH' ]) !!}
                
                    <div class="form-group">
                        {!! Form::hidden('employee_id',null,array('class' => 'form-control','id'=>'employee_id')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('first_name', 'First Name') !!}
                        {!! Form::text('first_name',null,array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('last_name', 'Last Name') !!}
                        {!! Form::text('last_name',null,array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('department', 'Department') !!}
                        {!! Form::text('department',null,array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('position', 'Position') !!}
                        {!! Form::text('position',null,array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone_number', 'Phone Number') !!}
                        {!! Form::text('phone_number',null,array('class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email',null,array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    {!! Form::submit('Edit Employee Profile!', array('class' => 'btn btn-primary')) !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
