@extends('layouts/application')

@section('content')
<br>
<h1 class="text-center mb-3 col-md-3 rounded mx-auto" style="font-size:1.5em;">Liste des commandes</h1>
<br>
<div class="table-responsive-xl">
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Numero de commande</th>
        <th scope="col">client</th>
        <th scope="col">adresse</th>
        <th scope="col">origine</th>
        <th scope="col">valeur</th>
        <th scope="col">Temps de production</th>
        <th scope="col">Statut</th>
      </tr>
    </thead>
    <tbody>    
        @foreach ($commands as $command)
        <tr>
            <td class="nbCmd" onclick="visibilite({{$command->number}}); return false;">{{$command->number}}</td>
            <td><a href="{{Route("oneCommand", ['number' => $command->number])}}">{{$command->name}}</a></td>     
            <td>{{$command->adresse}}</td>
            <td>{{$command->origin}}</td>
            <td>{{$command->total}} €</td>
            <td>{{$command->temps_prod}} min</td>
            <td>{{ $command->statut == 1 ? '❌' : '✅' }}</td>
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
  
  </table>
</div>
  <hr>
 
  <div class="addFormCommands">
    @include('layouts/partials/forms/addCommands')
  </div>
  


    
@endsection

<script>

function visibilite(thingId) { var targetElement; targetElement = document.getElementById(thingId) ; if (targetElement.style.display == "none") { targetElement.style.display = "" ; } else { targetElement.style.display = "none" ; } }

</script>