<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="./_assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="_assets/fonts/fontawesome/fontawesome-all.css">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>@yield('titre')</title>
</head>

<body class="debu">

    <div class="background">

        <!-- Header -->
        <header id="layout-header" class="container">
            <div id="title-site">Inksmap<span>°</span></div>
            <nav>
                <div><a>Inscription</a></div>
                <div><a><i class="fas fa-bars fa-lg"></i></a></div>
            </nav>
        </header>

        <!-- Recherche -->
        <section id="layout-recherche">
            <div>
                <p>Recherche ton tatoueur</p>

                @yield('recherche')
            </div>
            <div>
                <div class="round"><img class="logo-inksmap" src="_assets/images/logo_inksmap.png" /></div>
            </div>
        </section>

        <!-- Scroll Down -->
        <section id="layout-scroll-down" class="container">
            <p><i class="fas fa-angle-left"></i> Scroll down</p>
        </section>

    </div>


    @yield('contenu')


    <!--
    <footer id="layout-footer">

        <div>Qui sommes nous?</div>
        <div>Votre salon ici?<br/><a>Inscrivez vous</a></div>
    </footer>
-->

  <script>
  $(function()
  {
  	 $( "#q" ).autocomplete({
  	  source: "{{ url('search/autocomplete') }}",
  	  minLength: 3,
  	  select: function(event, ui) {
  	  	$('#q').val(ui.item.value);
  	  }
  	});
  });
  </script>
</body>

</html>
