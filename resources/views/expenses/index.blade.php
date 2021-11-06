@extends('base')

@section('title', 'All Expenses View')

@section('content')

	@foreach($expenses as $key => $expense)
	<div>{{ $key }}. {{ $expense['location'] }}</div>
	@endforeach

@endsection