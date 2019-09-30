<div class="container-fluid">
        <h1 class="text-center mb-3">Produits</h1>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner row w-100 mx-auto">

    @foreach ($products as $product)
    @if($loop->first)            
        <div class="carousel-item col-md-4 active">
            <div class="card">
            <img class="card-img-top img-fluid" src="images/produits/{{$product->image}}" alt="Card image cap">
                <div class="card-body">
                <h4 class="card-title">{{$product->name}}</h4>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text"><small class="text-muted">{{$product->price}} €</small></p>
          </div>
        </div>
      </div>

      @endif

      <div class="carousel-item col-md-4">
            <div class="card">
            <img class="card-img-top img-fluid" src="images/produits/{{$product->image}}" alt="Card image cap">
                <div class="card-body">
                <h4 class="card-title">{{$product->name}}</h4>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text"><small class="text-muted">{{$product->price}} €</small></p>
                </div>
            </div>
          </div>
@endforeach  
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
      
      <script src="/js/productCarrousel.js"></script>
