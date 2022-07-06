<!DOCTYPE html>
<html lang="en">
 @include('layout.head')
 <body class="nav-md">
	<div class="container body">
		<div class="main_container">
			@include('layout.sidebar')
			@include('layout.header')
			<div class="right_col" role="main">
				@yield('content')
			</div>
			<footer>
			  <div class="pull-right">
				Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
			  </div>
			  <div class="clearfix"></div>
			</footer>
		</div>
	</div>
	@include('layout.footer')
 </body>
</html>