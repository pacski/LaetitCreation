@extends('layouts/application')

@section('content')

<h1>Tableau de bord</h1>
<h2>Statistiques : {{date('d-m-y h:i:s',strtotime('+15days'))}}</h2>
@include('layouts/partials/charts/chiffresStats')
<hr>
@include('layouts/partials/charts/commandsYear')
<hr>
@include('layouts/partials/effects/productCarrousel')
<hr>
<div class="formProduct">
@include('layouts/partials/forms/addProducts')
@include('layouts/partials/forms/addCommands')
@include('layouts/partials/forms/addTissus')

</div>
@endsection
