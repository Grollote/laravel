<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
  <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Faustina:wght@600&family=Kalam:wght@300&display=swap" rel="stylesheet">

  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <div class="content" id="content">


    <div class="m-b-md">
      <a href="#content"><img src="image/point-dorgue.png" class="logotype" alt="point d'orgue"></a>
      <a href="" class="lien_connexion">Connexion</a>

    </div>
    <div class="links">
      <a href="#text-justify">Ecole</a>
      <a href="#flip-card">Formule</a>
      <a href="#information">Contact</a>
      
    </div>
  </div>
  
  <div class="fil-actualite">
  
    <div class="actualite">
      <h3>PORTES OUVERTES LE 05 SEPTEMBRE 2020, de 14h à 19h.</h3>
      <p class="text-justify actualite">
      </br>
        <em>"Le Point d'Orgue, l'école qui swing !"</em></br></br>
        L	&#039école de musique Le Point d'Orgue vous accueille au 71 rue d'Orléans à Saumur. Vous pouvez vous initier à toutes sortes d'instruments ou au chant. L'école accueille les élèves de tous âges dans une ambiance conviviale. Si vous souhaitez nous rejoindre ou demander de plus amples informations, n'hésitez pas à nous contacter via le formulaire plus bas, par téléphone ou mail.
      </p>
    </div>

    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLe-point-dorgue-103605468113563%2F&tabs=timeline&width=250&height=350&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId"width="250" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
  </div>
  
  <h2 class="text-justify" id="text-justify">Présentation de l&#039entreprise </h2>
  <p class="text-justify">L&#039école de musique du Point d Orgue, a été créée en 1978 par M. Gouin. Elle propose l'enseignement d'une dizaine de disciplines, en solo, binôme ou groupe.
    De la guitare, au saxophone, en passant par l	&#039éveil musical et la batterie, petits et grands se retrouvent autour de la musique dans une ambiance décontractée. L'année est ponctuée d'évènements, comme le concert de l'école ou la participation à la Fête de la musique. Portée par une équipe de professeurs impliqués, l'école de musique Le Point d'Orgue vous permettra de révéler vos talents.<a href="enseignant" target="_blank"> Découvrez ici l'ensemble de nos professeurs</a>
  </p>
  

  @php
  
    $alt=[ "Formule cours particuliers", 
            "Formule à deux",
            "Chant à deux",
            "Chorale enfant(11 à 13ans)",
            "Chorale enfant (9 à 11 ans)",
            "Chorale enfant(7 à 8ans)",
            "Chorale adultes",
            "Eveil musical"
    ];
    $alt2=[ "For particuliers", 
            "Formuleux",
            "Chax",
            "Cho3ans)",
            "Cho11 ans)",
            "Cho8ans)",
            "Cho",
            "Vei"
    ];
    $image=["/image/groupe.png",
    "/image/groupe.png",
    "/image/groupe.png",
    "/image/groupe.png",
    "/image/groupe.png",
    "/image/groupe.png",
    "/image/groupe.png",
    "/image/groupe.png",
    ];
    $stock = "<div class=\"main-card\">";
    

      for ($i = 0; $i < 8; $i++) {
          $stock .= "<div class=\"flip-card\" id=\"flip-card\"><div class=\"flip-card-inner\"><div class=\"flip-card-front\"><img src=\"";
          $stock .= $image[$i]."\"><p>";
          $stock .= $alt[$i]."</p></div> <div class=\"flip-card-back\"><p>";
          $stock .= $alt2[$i]."</p></div></div></div>";
          if ($i == 2 || $i== 5) {
              $stock .= "</div><div class=\"main-card\">";
          }
      }
    echo $stock;
  @endphp
  </div>
<p class="text-justify">Pour vous inscrire : <a href="{{ asset('bulletin-inscription.pdf') }}" target="_blank"><img src="{{ asset('image/pdf.png') }}"></a></p>
  <p class="text-justify">Pour consulter le règlement intérieur : <a href="reglement" target="_blank">Cliquez ici !</a></p>
    

  <div class="main-renseignement">
  <form class="main">
    <p class="information" id="information">Renseignement / Pré-inscription</p>
    <div class="form-row">

      <div class="form-group col-md-6">
      <label>Nom</label>

        <input class="form-control" placeholder="Entrez votre nom">
      </div>

      <div class="form-group col-md-6">
      <label>Prenom</label>

        <input class="form-control"placeholder="Entrez votre prénom">
      </div>
    </div>

    <div class="form-group" id="form-group">
    <label>Addresse mail</label>

      <input class="form-control" placeholder="exemple@gmailcom">
    </div>

    <div class="form-group">
    <label for="inputAddress2">Numéro de téléphone</label>

      <input class="form-control" placeholder="02.00.00.00.00">
    </div>
    @php
    $name=[ "Piano", 
            "Chant",
            "Violon",
            "Eveil musical",
            "Guitare acoustique",
            "Guitare électrique",
            "Batterie",
            "Basse",
            "Synthétiseur",
            "Saxophone",
            "Chorale ",
           
    ];
    $stock = "<div class=\"main-form\">";
    
    for ($i = 0; $i < 11; $i++) {
        $stock .= "<div class=\"form-group\"><div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck\"><label class=\"form-check-label\" for=\"gridCheck\">";
        $stock .= $name[$i]."</label></div></div>";
        if ($i == 2 || $i== 5) {
            $stock .= "</div><div class=\"main-form\">";
        }
    }  
    echo $stock;
  @endphp  
    
    </div>
    <textarea placeholder="Ecrivez votre message">
    </textarea>
    <button>Envoyer</button>
  </form>
  <div class="main-coordonnees">
    <p class="Titre-coordonnées">Coordonnées de l école</p>
    <p class="text-justify"><img src="{{ asset('image/map.png') }}" height="30" width="auto"> 71 Rue d Orleans 49400 Saumur</p>
    <p class="text-justify"><img src="{{ asset('image/mail.png') }}" height="30" width="auto">pointdorguesaumur@gmail.com</p>
    <p class="text-justify"><img src="{{ asset('image/phone.png') }}" height="30" width="auto">02.41.51.98.26</p>
    <div class="map-responsive">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.867472414942!2d-0.08187138418808754!3d47.25829471996658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4807f72ca0fa9e1d%3A0x22a7b200426828a7!2s71%20Rue%20d&#39;Orl%C3%A9ans%2C%2049400%20Saumur!5e0!3m2!1sfr!2sfr!4v1595847498235!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
  </div>
      
    <footer>
      <div class="icone">
        <a href="https://instagram.com/le_point_d_orgue_saumur?igshid=14jjqhkte8284"><img src="{{ asset('image/instagram.png') }}" height="30" width="auto"></a>
        <a href="https://m.facebook.com/Le-point-dorgue-103605468113563/"><img src="{{ asset('image/facebook.png') }}" height="30" width="auto"></a>

      </div>
      <div class="mentions">
        <a href="mentions"> Mentions Légales</a>
      </div>

    </footer>
</body>
</html>
