<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Esteem  An Admin Panel Category Flat Bootstrap Responsive Website Template | Admin Login  :: w3layouts</title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href=" {{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href=" {{ asset('css/component.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href=" {{ asset('css/style_grid.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href=" {{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href=" {{ asset('css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href=" //fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>


	@include('layouts.header')
	
	@yield('home_page')


	@yield('crops_index')

	

	@yield('hr_index')

	@yield('hr_edit')

	@yield('hr_show')

	@yield('inventory_create')

	@yield('inventory_edit')

	@yield('inventory_index')

	@yield('inventory_show')

  @yield('user_index')

  @yield('user_profile')
	
</body>
 

{{-- js --}}
<script src=" {{ asset ('js/bars.js')}}"></script>
<script src="{{  asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{ asset('js/scripts.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- /amcharts -->
				<script src="{{ asset('js/amcharts.js')}}"></script>
		       <script src="{{ asset('js/serial.js')}}"></script>
				<script src="{{ asset('js/export.js')}}"></script>	
				<script src="{{ asset('js/light.js')}}"></script>

	<!-- //amcharts -->
		
				<script src="{{ asset('js/Chart.min.js')}}"></script>
		<script src="{{ asset('js/modernizr.custom.js')}}"></script>
		
		<script src="{{ asset('js/classie.js')}}"></script>
		<script src="{{ asset('js/gnmenu.js')}}"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
			<!-- script-for-menu -->


</html>

<script >
  $('#edit').on('show.bs.modal', function (e) {
  var button = $(e.relatedTarget); // Button that triggered the modal
  var id = button.data('id'); 
  var name = button.data('cn'); 
  var SName = button.data('sn'); 
  var pro = button.data('p'); 
  var Smanager = button.data('sm'); 
  var start =button.data('sd'); 
  var end = button.data('ed'); 
  var dep=button.data('dp'); 
  var crop_im=button.data('ci'); 
 
  var modal = $(this);
  modal.find('.modal-body #crop_id').val(id);
  modal.find('.modal-body #crop_name').val(name);
  modal.find('.modal-body #season_name').val(SName);
  modal.find('.modal-body #process').val(pro);
  modal.find('.modal-body #season_manager').val(Smanager);
  modal.find('.modal-body #started_date').val(start);
  modal.find('.modal-body #end_date').val(end);
  modal.find('.modal-body #description').val(dep);
  modal.find('.modal-body #crop_image').val(crop_im);

});
</script>

<script >
  $('#HrEdit').on('show.bs.modal', function (e) {
  var button = $(e.relatedTarget); // Button that triggered the modal
  var id = button.data('id'); 
  var fName = button.data('fn'); 
  var LName = button.data('ln'); 
  var dp = button.data('dp'); 
  var pt = button.data('pt'); 
  var ph =button.data('ph'); 
  var em =button.data('em');
 
  var modal = $(this);
  modal.find('.modal-body #employee_id').val(id);
  modal.find('.modal-body #first_name').val(fName);
  modal.find('.modal-body #last_name').val(LName);
  modal.find('.modal-body #department').val(dp);
  modal.find('.modal-body #position').val(pt);
  modal.find('.modal-body #phone_number').val(ph);
  modal.find('.modal-body #email').val(em);

});
</script>

<script >
  $('#IvEdit').on('show.bs.modal', function (e) {
  var button = $(e.relatedTarget); // Button that triggered the modal
  var id = button.data('id'); 
  var pn = button.data('pn'); 
  var up = button.data('up');
  var am = button.data('am');  
  var to = button.data('to'); 
  var cd = button.data('cd'); 
  var ed =button.data('ed'); 
  var des =button.data('des');
   var pi =button.data('pi');

  var modal = $(this);
  modal.find('.modal-body #inventory_id').val(id);
  modal.find('.modal-body #product_name').val(pn);
  modal.find('.modal-body #unit_price').val(up);
  modal.find('.modal-body #amount').val(am);
  modal.find('.modal-body #total').val(to);
  modal.find('.modal-body #created_date').val(cd);
  modal.find('.modal-body #expired_date').val(ed);
  modal.find('.modal-body #description').val(des);
  modal.find('.modal-body #product_image').val(pi);

});
</script>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
        $('.btn-delete').on('click',function(e){
             e.preventDefault();
            var form = $(this).parents('form');
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                icon: "error",
                dangerMode: true,
                button: "Yes, delete it!",
            }).then(function(isConfimed){
                if(isConfimed){
                   form.submit();
                }
            });
        });
    </script>