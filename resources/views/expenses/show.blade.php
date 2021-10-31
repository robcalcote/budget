@extends('base')

@section('title', 'Expense #')

@section('content')
<h1>{{ $expense['location']}}</h1>
<p>{{ $expense['date'] }}</p>
<p>{{ $expense['amount'] }}</p>
@endsection