@extends('layouts.main')
@section('site_title','About Me')
@section('content')
	<h1>{!! $title !!}</h1>
	<p>{{ $subtitle }}</p>
<!-- @if($record > 1)
	I have {{ $record }}
@else
	I don't have any record!
@endif

@for($i = 0 ; $i <= $record ; $i++)
	<li>{{ $i }}</li>
@endfor -->
@stop