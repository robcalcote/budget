@extends('base')

@section('title', 'All Expenses View')

@section('content')

@forelse($expenses as $key => $expense)
{{-- @break($key == 3) - Loop will stop when key hits 3 (inclusive) --}} 
{{-- @continue($key == 3) - Loop will skip over 3 and continue --}}
<div>{{ $key }}. {{ $expense['location'] }}</div>
@empty
	No expenses found...
@endforelse

@endsection