<?php

function hoursToMinutes($hours){
	$minutes = 0;
	if (strpos($hours, ':') !== false)
	{
			// Split hours and minutes.
			list($hours, $minutes) = explode(':', $hours);
	}
	return $hours * 60 + $minutes;
}

function minutesToHours($minutes) {
	$hours = (int)($minutes / 60);
	$minutes -= $hours * 60;
	if($hours >= 24){
		$hours = $hours-24;
	}
	return sprintf("%d:%02.0f", $hours, $minutes);
}