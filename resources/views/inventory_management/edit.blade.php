<div id="IvEdit" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Inventory</h4>
                </div>

                <div class="modal-body">
                     {!! Form::model(null,['route' => ['inventory.update','test'], 'method' => 'PATCH' ]) !!}

                     <div class="form-group">
                        {!! Form::hidden('inventory_id',null,array('class' => 'form-control','id'=>'inventory_id')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('product_name', ' Product Name') !!}
                        {!! Form::text('product_name',null,array('class' => 'form-control')) !!}
                    </div>
                   
                    <div class="form-group">
                        {!! Form::label('unit_price', 'Unit Price') !!}
                        {!! Form::text('unit_price',null,array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('amount', 'Amount') !!}
                        {!! Form::text('amount',null,array('class' => 'form-control')) !!}
                   </div>
                   <div class="form-group">
                        {!! Form::label('total', ' Total') !!}
                        {!! Form::text('total',null,array('class' => 'form-control')) !!}
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
                        {!! Form::text('description',null,array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('product_image', ' Product Image') !!}
                        {!! Form::text('product_image',null,array('class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                {!! Form::submit('Edit Product Detail!', array('class' => 'btn btn-success')) !!}
                </div>

                {!! Form::close() !!}
        </div>
    </div>
</div>

