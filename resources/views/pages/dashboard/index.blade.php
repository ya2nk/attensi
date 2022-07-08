@extends('layout.app')

@section('content')
	<div class="page-title">
	  <div class="title_left">
		<h3>DASHBOARD</small></h3>
	  </div>
	</div>

    <div class="clearfix"></div>
	<div class="row">
	  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
		<div class="tile-stats">
		  <div class="icon"><i class="fa fa-caret-square-o-right"></i>
		  </div>
		  <div class="count">179</div>

		  <h3>New Sign ups</h3>
		  <p>Lorem ipsum psdea itgum rixt.</p>
		</div>
	  </div>
	  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
		<div class="tile-stats">
		  <div class="icon"><i class="fa fa-comments-o"></i>
		  </div>
		  <div class="count">179</div>

		  <h3>New Sign ups</h3>
		  <p>Lorem ipsum psdea itgum rixt.</p>
		</div>
	  </div>
	  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
		<div class="tile-stats">
		  <div class="icon"><i class="fa fa-sort-amount-desc"></i>
		  </div>
		  <div class="count">179</div>

		  <h3>New Sign ups</h3>
		  <p>Lorem ipsum psdea itgum rixt.</p>
		</div>
	  </div>
	  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
		<div class="tile-stats">
		  <div class="icon"><i class="fa fa-check-square-o"></i>
		  </div>
		  <div class="count">179</div>

		  <h3>New Sign ups</h3>
		  <p>Lorem ipsum psdea itgum rixt.</p>
		</div>
	  </div>
	</div>
	<div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
		<x-datepicker id="tgl" name="tgl"/>
	</div>
	<div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
		<button class="btn btn-secondary source" onclick="notify('ini message','info')">Success</button>
	</div>
	<div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
		<select class="form-control select2">
			<option>Test</option>
		</select>
	</div>
@endsection