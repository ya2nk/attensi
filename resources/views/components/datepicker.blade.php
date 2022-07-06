@props(['id','name','value','model','event'])

<div class="input-group date" id="{{ $id }}" data-target-input="nearest" {!! $event ?? "" !!}>
	<input type="text" class="form-control datetimepicker-input" data-target="#{{ $id }}" id="input-{{ $name }}" name="{{ $name }}" 
			value="{{ $value ?? '' }}" {!! isset($model) ? "x-model='$model'" : "" !!}/>
	<div class="input-group-append" data-target="#{{ $id }}" data-toggle="datetimepicker">
		<div class="input-group-text"><i class="fa fa-calendar"></i></div>
	</div>
</div>


<script>
	$(function(){
		$('#{{ $id }}').datetimepicker(datetimepickerOptions);
		var e = $.Event("datetimepicker:init");
		$('#{{ $id }}').trigger("datetimepicker:init");
	})
</script>