<div class="accueil_stats d-flex flex-wrap">
        <div class="card text-center md-4" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Chiffre d'affaire globale</h5>
            <p class="card-text">{{$commands->sum('total')}} €</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
    
          </div>
          <div class="card text-center md-4" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Nombre total de commandes</h5>
            <p class="card-text">{{$commands->count()}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
    
          </div>
          <div class="card text-center md-4" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Chiffre d'affaire total du mois</h5>
            <p class="card-text">{{$commandsMonth->sum('total')}} €</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Nombre total de commandes ce mois</h5>
            <p class="card-text">{{$commandsMonth->count()}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          </div>
            <div class="card text-center" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Nombre de commandes en cours</h5>
              <p class="card-text">{{$commandsInProgress->count()}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
          
    </div>