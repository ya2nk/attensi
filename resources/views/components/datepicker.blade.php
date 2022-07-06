@props(['id','name','value','model','event'])

<div class='input-group date' id='{{ $id }}' {!! $event ?? "" !!}>
	<input type='text' class="form-control" name="{{ $name }}" {!! isset($model) ? "x-model='$model'" : "" !!} value="{{ $value ?? '' }}" id="input-{{ $name }}" readonly />
	<div class="input-group-append" style="cursor:pointer">
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