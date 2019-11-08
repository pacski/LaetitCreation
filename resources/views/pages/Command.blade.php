@extends('layouts/application')

@section('content')

<p>page commande numero {{$numCommand->number}}</p>
<p>page commande numero {{$numCommand->name}}</p>
<p>page commande numero {{$numCommand->adresse}}</p>

@if ($numCommand->statut === 1)
    <p>statut 1</p>
@else
    <p>statut 2</p>
@endif
<p>page commande numero {{$numCommand->statut}}</p>

{{-- {{ App\Form::open(array('url' => 'foo/bar')) }}
    echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
{{ App\Form::close() }} --}}

    
@endsection