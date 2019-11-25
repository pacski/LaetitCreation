@extends('layouts/application')

@section('content')

@include('layouts/partials/charts/chiffresStats')
<hr>
@include('layouts/partials/charts/commandsYear')
<hr>
@include('layouts/partials/effects/productCarrousel')
<hr>
@include('layouts/partials/effects/formCarroussel')

@endsection
