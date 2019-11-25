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

<form class="needs-validation px-2 pb-2" action="/liste_des_commandes" method="post" novalidate>
<div class="form-check">
  <input class="form-check-input" type="radio" name="statut" id="exampleRadios1" value="1" checked>
  <label class="form-check-label" for="exampleRadios1">
    A faire
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="statut" id="exampleRadios2" value="2">
  <label class="form-check-label" for="exampleRadios2">
    Terminé
  </label>
</div>
<div class="col-sm-10">
    <button type="submit" class="btn btn-primary">Sign in</button>
</div>
</form>
    
@endsection