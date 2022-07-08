
<!-- Bootstrap -->
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>

<!-- gauge.js -->
<script src="{{ asset('assets/vendors/gauge.js/dist/gauge.min.js') }}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
<!-- Skycons -->
<script src="{{ asset('assets/vendors/skycons/skycons.js') }}"></script>

<!-- DateJS -->
<script src="{{ asset('assets/vendors/DateJS/build/date.js') }}"></script>

<!-- bootstrap-daterangepicker -->
<script src="{{ asset('assets/vendors/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap-datetimepicker -->    
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets/vendors/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>
<!-- PNotify -->
<script src="{{ asset('assets/vendors/pnotify/dist/pnotify.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset('assets/build/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/js/alpine-extends.js') }}" defer></script>
<script src="{{ asset('assets/js/alpine.min.js') }}" defer></script>
<script>
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	
	$( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
		if (jqxhr.status == 419 || jqxhr.status == 401) {
			notify("Session telah berakhir","error")
			setTimeout(() => {
				location.reload();
			},1500);
		}
		
		if (jqxhr.status == 404) {
			notify("Url tidak diketemukan","error")
		}
		
		if (jqxhr.status == 405) {
			notify("Method tidak diperbolehkan","error")
		}
	});
	
	var datetimepickerOptions =  {
		buttons: {
			showClose:true
		},
		format: 'YYYY-MM-DD',
		ignoreReadonly: true,
		readonly:true
	};
	
	$(function() {
		$('.select2').select2()
	});
	
	function notify(message,type){
		new PNotify({
			text: message,
			type: type,
			styling: 'bootstrap3',
			delay:2000
		});
	}
</script>
@stack('scripts')