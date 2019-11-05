@extends('layouts/application')

@section('content')
<h1>Liste des commandes</h1>
<div class="addFormCommands">
    @include('layouts/partials/forms/addCommands')
</div>

<hr>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Numero de commande</th>
        <th scope="col">client</th>
        <th scope="col">adresse</th>
        <th scope="col">origine</th>
        <th scope="col">valeur</th>
        <th scope="col">Temps de production</th>
      </tr>
    </thead>
    <tbody>    
        @foreach ($commands as $command)
        <tr  class="{{ $command->statut == 1 ? 'full' : 'empty' }}">
            <td class="nbCmd" onclick="visibilite({{$command->number}}); return false;">{{$command->number}}</td>
            <td>{{$command->name}}</td>
            <td>{{$command->adresse}}</td>
            <td>{{$command->origin}}</td>
            <td>{{$command->total}} €</td>
            <td>{{$command->temps_prod}} min</td>
        <td><a href="{{Route("oneCommand", ['number' => $command->number])}}">click</a></td>     
        </tr>
      <tbody id="{{$command->number}}" style="display:none;">
            <tr {{$command->product_1 == "" ? "hidden" : ""}}>
                <td></td>
                <td></td>
                <td></td>
                <td><img class="imageTissu" src="images/Tissus/{{$command->tissu_1}}" alt='' ></td>
                <td style="font-size:12px;">{{$command->product_1}}</td>
                <td>{{$command->quantity_1}}</td>
              </tr>
              <tr {{$command->product_2 == "" ? "hidden" : ""}}>
                <td></td>
                <td></td>
                <td></td>
                <td><img class="imageTissu" src="images/Tissus/{{$command->tissu_2}}" alt='' ></td>
                <td>{{$command->product_2}}</td>
                <td>{{$command->quantity_2}}</td>
              </tr>
              <tr {{$command->product_3 == "" ? "hidden" : ""}}>
                <td></td>
                <td></td>
                <td></td>
                <td><img class="imageTissu" src="images/Tissus/{{$command->tissu_3}}" alt='' ></td>
                <td>{{$command->product_3}}</td>
                <td>{{$command->quantity_3}}</td>
              </tr>
        </tbody>
        
        @endforeach
    </tbody>
    <tfoot>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>temps de production total</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>{{$tempsProdTotal}} Min</td>
      </tr>
    </tfoot>
  </table>
  <hr>
  


    
@endsection

<script>

function visibilite(thingId) { var targetElement; targetElement = document.getElementById(thingId) ; if (targetElement.style.display == "none") { targetElement.style.display = "" ; } else { targetElement.style.display = "none" ; } }

</script>