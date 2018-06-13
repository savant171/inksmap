@extends('template')


@section('titre')

    Inksmap

@endsection


@section('recherche')



<form method="GET" action="{{ url('search/autocomplete') }}">
  <input id="q" placeholder="Rechercher par nom, lieu ou style" name="q" type="text" value="">
  <button type="submit"> <i class="fas fa-search"></i></button>
</form>

@endsection

@section('contenu')

<main id="layout-content">
    <!-- Briques -->
    <section id="layout-content--briques">
        <div id="layout-content--briques--left">
            <p>Connecte toi<br/>et cherche!</p>
        </div>
        <div id="layout-content--briques--right">
            <div>
                <p>Trouve le bon,<br/> où que tu sois!</p>
            </div>
            <div></div>
        </div>
    </section>

    <!-- Nos avantages -->
    <section id="layout-content--avantages" class="container">
        <h2>Nos avantages</h2>
        <ul>
            <li><i class="fas fa-search"></i><br/>Fais tes recherches selon tes propres critères</li>
            <li><i class="far fa-map"></i><br/>Ou que tu sois, trouves le tatoueur qui te correspond</li>
            <li><i class="far fa-hand-peace"></i><br/>Utilisation simple et intuitive</li>
            <li><i class="fas fa-users"></i><br>Accès à toutes les informations utiles des tatoueurs</li>
        </ul>
    </section>

    <!-- Choisir son tatoueur 1 -->
    <section id="layout-content--choisir-1">
        <div id="layout-content--choisir-1--left"></div>
        <div id="layout-content--choisir-1--right">
            <p>Choisir son <span class="red">tatoueur</span> n'aura jamais été aussi <span class="red">simple!</span></p>
            <a>En savoir plus</a>
        </div>
    </section>

    <!-- Nos tatoueurs -->
    <section id="layout-content--tatoueurs" class="container">
        <h2>Nos <span class="red">tatoueurs</span> les plus <span class="red">populaires!</span></h2>
        <ul>

          @foreach($listTatoueur as $tatoueur)
              <li>
                  <div id="photo">
                      <div class="losange">
                          <img class="layout-content--tatoueurs--photo" src="_assets/images-profil/{{ $tatoueur->image }}" />
                      </div>
                  </div>
                  <p class="layout-content--tatoueurs--nom">{{$tatoueur->nom}} {{$tatoueur->prenom}}</p>
                  <p class="layout-content--tatoueurs--ville">{{$tatoueur->ville}}</p>
                  <p class="layout-content--tatoueurs--styles">
                  @foreach($tatoueur->styles as $style)
                      {{$style->style}};
                  @endforeach
                  </p>
              </li>
      		@endforeach
        </ul>
        <div>
            <a>Voir plus!</a>
        </div>
    </section>

    <!-- Choisir son tatoueur 2 -->
    <section id="layout-content--choisir-2">
        <div>
            <h2>Choisis ton tatoueur</h2>
            <a>Aller à la recherche</a>
        </div>
    </section>

</main>


@endsection
