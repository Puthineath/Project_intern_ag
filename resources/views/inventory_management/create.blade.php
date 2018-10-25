<div id="IvModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
                 <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create Inventory</h4>
                </div>

                 <div class="modal-body">
    
                    {!! Form::open(array('url' => 'inventory')) !!}
                    

                    <div class="form-group">
                        {!! Form::label('product_name', ' Product Name') !!}
                        {!! Form::text('product_name',null,array('placeholder' => 'Product','class' => 'form-control')) !!}
                    </div>
                   
                    <div class="form-group">
                        {!! Form::label('unit_price', 'Unit Price') !!}
                        {!! Form::text('unit_price',null,array('placeholder' => 'Unit Price','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('amount', 'Amount') !!}
                        {!! Form::text('amount',null,array('placeholder' => 'Amount','class' => 'form-control')) !!}
                   </div>
                   <div class="form-group">
                        {!! Form::label('total', ' Total') !!}
                        {!! Form::text('total',null,array('placeholder' => 'Total','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('created_date', ' Created Date') !!}
                        {!! Form::date('created_date',null,array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('expired_date', ' Expired Date') !!}
                        {!! Form::date('expired_date',null,array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', ' Description') !!}
                        {!! Form::text('description',null,array('placeholder' => 'Description','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('product_image', ' Product Image') !!}
                        {!! Form::text('product_image',null,array('placeholder' => 'Insert Image','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>          

                 {!! Form::submit('Create Product Detail!', array('class' => 'btn btn-success')) !!}
                 </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>


