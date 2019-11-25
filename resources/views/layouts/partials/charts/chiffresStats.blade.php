<br>
<div class="accueil_stats d-flex align-content-end flex-wrap">
        <div class="card text-center md-4 " style="width: 18rem;">
            <div class="card-body">
              <p class="card-text font-weight-bold">{{$commands->sum('total')}} €</p>
              <h5 class="card-title font-weight-lighter">Chiffre d'affaire globale</h5>
            </div>
          </div>
          <div class="card text-center md-4" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text font-weight-bold">{{$commands->count()}}</p>
              <h5 class="card-title font-weight-lighter">Nombre total de commandes</h5>
            </div>
          </div>
</div>
<br>
<div class="accueil_stats d-flex align-content-end flex-wrap">
          <div class="card text-center md-4" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text font-weight-bold">{{$commandsMonth->sum('total')}} €</p>
              <h5 class="card-title font-weight-lighter">Chiffre d'affaire total du mois</h5>
            </div>  
          </div>
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text font-weight-bold">{{$commandsMonth->count()}}</p>
              <h5 class="card-title font-weight-lighter">Nombre total de commandes ce mois</h5>
            </div>
          </div>
</div>
<br>
<div class="accueil_stats d-flex align-content-end flex-wrap">
            <div class="card text-center" style="width: 18rem;">
              <div class="card-body">
                <p class="card-text font-weight-bold">{{$commandsInProgress->count()}}</p>  
                <h5 class="card-title font-weight-lighter">Nombre de commandes en cours</h5>    
              </div>
          </div>
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text font-weight-bold">{{$tempsProdTotal}} h</p>
              <h5 class="card-title font-weight-lighter">Temps de travail nécéssaire</h5>
            </div>
        </div>
          
</div>