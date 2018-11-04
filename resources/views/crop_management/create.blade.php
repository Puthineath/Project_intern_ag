<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
                 <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create Crop</h4>
                </div>

                 <div class="modal-body">
                            {!! Form::open(array('url' => 'crops','enctype'=>'multipart/form-data')) !!}
                        <div class="form-group">
                          
                             {!! Form::label('crop_name', ' Crop Name') !!}

                             {!! Form::text('crop_name',null,array('placeholder' => 'Crop Name','class' => 'form-control')) !!}
                              
                          </div>

                           
                            <div class="form-group">
                                {!! Form::label('season_name', 'Season Name') !!}
                                {!! Form::text('season_name',null,array('placeholder' => 'Season Name','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('process', 'Process') !!}
                                {!! Form::text('process',null,array('placeholder' => 'Process','class' => 'form-control')) !!}
                           </div>
                           <div class="form-group">
                                {!! Form::label('season_manager', 'Season Manager') !!}
                                {!! Form::text('season_manager',null,array('placeholder' => 'Season Manager','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('started_date', ' Started Date') !!}
                                {!! Form::date('started_date',null,array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('end_date', ' End Date') !!}
                                {!! Form::date('end_date',null,array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::text('description',null,array('placeholder' => 'Description','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                

                                {!! Form::label ('crop_image','Crop Image')!!}
                                {!! Form::file('crop_image', null,array('class' => 'form-control')) !!}
                            </div>

                            <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                     {!! Form::submit('Create Crop Detail!', array('class' => 'btn btn-success')) !!}
                            </div>

                           

                        {!! Form::close() !!}

            </div>
        </div>
    </div>     
</div>


