@extends('layouts.master')

@section('user_profile')

<div id="UploadModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Profile</h4>
                </div>

          		<div class="modal-body">
          		  <div class="row justify-content-center">
				     <form action="/profile" method="post" enctype="multipart/form-data">
				                @csrf
				                <div class="form-group">
				                    <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
				                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
				                </div>

				                 <div class="modal-footer">
				                <button type="submit" class="btn btn-primary">Submit</button>
				                </div>
				       </form>
				        </div>
				    </div>
          		</div>
 		</div>
 	</div>
 </div>

<div class="inner_content">
    <div class="inner_content_w3_agile_info">
        <div class="agile_top_w3_grids">



			<div class="container">    
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="/storage/avatars/{{Auth::user()->avatar }}" alt="stack photo" class="img"  data-toggle="modal" data-target="#UploadModal" width="300px" height="300px">
                      </div>

                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <h2>{{ Auth::user()->name }} </h2>
                          </div>
                            <hr>
                          <ul class="container details">
{{--                             <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>+91 90000 00000</p></li>
 --}}                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{ Auth::user()								->email }}</p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>{{ Auth::user()								->roles }}</p></li>
                          </ul>
                      </div>
                  </div>
                </div>




       </div>
    </div>
</div>


 @endsection