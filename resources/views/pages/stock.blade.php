@extends('layouts/application')

@section('content')
<h1>Stock</h1>
<div class="addFormTissus">
    <h2>Ajouter nouveau tissus</h2>
    @include('layouts/partials/forms/addTissus')
</div>
<hr>
<div class="table-responsive text-nowrap" style="display: flex; flex-wrap:wrap; justify-content:space-around">

            @foreach ($tissuses as $tissue)
         

            <div class="card" style="width: 18rem;">
                <img src="images/Tissus/{{ $tissue->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center">{{$tissue->name}} </p>
                  <p class="card-text" style="text-align: center">{{$tissue->stock}} cm </p>
                </div>
              </div>
                 
            @endforeach
          
</div>
<hr>


@endsection