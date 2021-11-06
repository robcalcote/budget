@extends('base')

@section('title', 'Expense View')

@section('content')
@if($expense['display'])
	<h1>{{ $expense['location']}}</h1>
	<p>{{ $expense['date'] }}</p>
	<p>{{ $expense['amount'] }}</p>
@else
	<h1>Restricted Access</h1>
@endif

@unless($expense['display'])
	<p>display attr is false, unless directive is the same as if(!)</p>
@endunless

{{-- @isset() @endisset --}}
{{-- @empty() @endempty --}}

@endsection