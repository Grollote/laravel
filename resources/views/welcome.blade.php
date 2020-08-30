<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
  <meta name="description" content="L'école de musique, Le Point d'Orgue, située à Saumur vous propose des cours de guitare, chant, batterie, violon et bien d'autres. Venez apprendre la musique à tout âge !"/>
  <meta name="keywords" content="ecole, musique, saumur, point, orgue"/>
  <title>Le Point d&#039Orgue, école de musique</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Faustina:wght@600&family=Kalam:wght@300&display=swap" rel="stylesheet">

  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 
</head>
<body>

  <div class="content" id="content">


    <div class="m-b-md">
      <a href="#content"><img src="image/point-dorgue.png" class="logotype fadein" alt="ecole musique point d'orgue  saumur guitare batterie chant"></a>
      <a href="connexion"target="_blank" class="lien_connexion">Connexion</a>

    </div>
    <div class="links">
      <a href="#text-justify">Ecole</a>
      <a href="#flip-card">Formules</a>
      <a href="#information">Contact</a>
      
    </div>
  </div>

  <div class="fil-actualite">
  
    <div class="actualite">
      <h3>PORTES OUVERTES LE 5 SEPTEMBRE 2020, de 14h à 19h.</h3>
      <p class="text-justify actualite">
      </br>
        <em>"Le Point d'Orgue, l'école du swing et de la scène!"</em></br></br>
        Après un changement de direction, Swing School redevient le Point d'Orgue. L'école propose des cours de chant, guitare, basse, batterie, piano, violon, saxophone, trompette, chorale, éveil musical etc.</br>
        L&#039école de musique Le Point d'Orgue vous accueille au 71 rue d'Orléans à Saumur. Vous pouvez vous initier à toutes sortes d'instruments ou au chant. L'école accueille les élèves de tous âges dans une ambiance conviviale. Si vous souhaitez nous rejoindre ou demander de plus amples informations, n'hésitez pas à nous contacter via le formulaire plus bas, par téléphone ou mail.
      </p>
    </div>

    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLe-point-dorgue-103605468113563%2F&tabs=timeline&width=250&height=350&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId"width="250" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
  </div>
  
  <h2 class="text-justify" id="text-justify">Présentation de l&#039école </h2>
  <p class="text-justify">L'école de musique du Point d'Orgue, a été créée en 1978 par M. Gouin. Elle propose l'enseignement d'une dizaine de disciplines, en solo, binôme ou groupe.
    De la guitare, au saxophone, en passant par l&#039éveil musical et la batterie, petits et grands se retrouvent autour de la musique dans une ambiance décontractée. L'année est ponctuée d'évènements, comme le concert de l'école ou la participation à la Fête de la musique. Portée par une équipe de professeurs impliqués, l'école de musique Le Point d'Orgue vous permettra de révéler vos talents.<a href="enseignant" target="_blank"> Découvrez ici l'ensemble de nos professeurs</a>
  </p>
  
  <h2 class="text-justify" id="text-justify">Les cours et formules </h2>
  <p class="text-justify">Le droit d'adhésion à l'année est de 39€ pour un élève / 59€ pour deux élèves du même foyer / 79€ pour plus de trois élèves du même foyer. </br>
  Le cours à la carte est de 39€ de l'heure.
  </p>
  @php
  
    $alt=[ "FORMULE DES COURS PARTICULIERS", 
            "FORMULE DES COURS A DEUX",
            "CHANT A DEUX (ados)",
            "CHORALE ENFANTS (11 à 13 ans)",
            "CHORALE ENFANTS (9 à 10 ans)",
            "CHORALE ENFANTS (7 à 8 ans)",
            "CHORALE ADULTES",
            "EVEIL MUSICAL (5 à 7 ans)"
    ];
    $alt2=[ "</br>550€ </br><em>formule annuelle</em></br></br> Réglable en 10 mensualités de 55€ par mois pour 1/2h de cours par semaine, durant 33 semaines. (toutes disciplines)", 
            "</br>480€ </br><em>formule annuelle</em></br></br> Réglable en 10 mensualités de 48€ par mois pour 1/2h de cours par semaine, durant 33 semaines (guitare, batterie, piano).",
            "</br>440€ </br><em>formule annuelle</em></br></br> Réglable en 10 mensualités de 44€ par mois pour 1/2h de cours par semaine, durant 33 semaines.",
            "</br>180€ </br><em>formule annuelle</em></br></br> Le mercredi de 14h à 14h45.</br> Réglable en 10 mensualités de 18€ par mois pour 3/4h de cours par semaine, durant 33 semaines.)",
            "</br>180€ </br><em>formule annuelle</em></br></br> Le mercredi de 14h45 à 15h30.</br> Réglable en 10 mensualités de 18€ par mois pour 3/4h de cours par semaine, durant 33 semaines.)",
            "</br>180€ </br><em>formule annuelle</em></br></br> Le mercredi de 15h30 à 16h15. </br>Réglable en 10 mensualités de 18€ par mois pour 3/4h de cours par semaine, durant 33 semaines.)",
            "</br>280€ </br><em>formule annuelle</em></br></br> Le lundi de 20h à 21h et le mardi de 19h à 20h. </br> Réglable en 10 mensualités de 28€ par mois </br>pour 1h de cours par semaine, durant 33 semaines. ",
            "</br>180€ </br> <em>formule annuelle</em></br></br>Le mercredi (horaires à définir). </br> Réglable en 10 mensualités de 18€ par mois pour 3/4h de cours par semaine, durant 33 semaines."
    ];
    $image=["/image/musique-solo.png",
    "/image/musique-duo.png",
    "/image/musique-ado2.png",
    "/image/musique-ado.png",
    "/image/musique-chorale.png",
    "/image/musique-enfant.png",
    "/image/musique-chorale-adulte.png",
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

<p class="text-justify">Pour vous inscrire : <a href="{{ asset('bulletin-inscription-musique.pdf') }}" target="_blank"><img src="{{ asset('image/pdf.png') }}"></a></p>
  <p class="text-justify">Pour consulter le règlement intérieur : <a href="reglement" target="_blank">Cliquez ici !</a></p>
  

  <div class="rens-contact">
      <div class="formulaire-rens">  
      <div class="col-md-6">
        @if (Session::has('flash_message'))
          <div class="alert alert-success">{{ Session::get('flash_message')}}</div>
        @endif
        <form method="post" action="{{ route('contact.store') }}">
          <h2 class="text-justify" id="text-justify">Renseignements </h2>
          {{ csrf_field()}}
            <div class="form-group col-60">
                <label>Nom et Prénom</label>
                <input type="text" class="form-control" name="name">
                @if($errors->has('name'))
                  <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                @endif
            </div>
            <div class="form-group col-60">
                <label>Adresse mail</label>
                <input type="text" class="form-control" name="email">
                @if($errors->has('email'))
                  <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                @endif
            </div>
            <div class="form-group col-60">
                <label>Votre message <em><p style="font-size:12px">Merci de préciser quel(s) cours vous intéresse(nt)</p></em></label>
                <textarea name="message" class="form-control"></textarea>
                @if($errors->has('message'))
                  <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                @endif
            </div>
            <button class="btn btn-info">Envoyer</button>
        </form>
    
      </div>
    </div>

    <div class="main-coordonnees" id="information">
      <p class="Titre-coordonnées">Coordonnées de l&#039école</p>
      <p class="text-justify"><img src="{{ asset('image/map.png') }}" height="30" width="auto"> 71 Rue d Orleans 49400 Saumur</p>
      <p class="text-justify"><img src="{{ asset('image/mail.png') }}" height="30" width="auto">pointdorguesaumur@gmail.com</p>
      <p class="text-justify"><img src="{{ asset('image/phone.png') }}" height="30" width="auto">02.41.51.98.26</p>
      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.867472414942!2d-0.08187138418808754!3d47.25829471996658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4807f72ca0fa9e1d%3A0x22a7b200426828a7!2s71%20Rue%20d&#39;Orl%C3%A9ans%2C%2049400%20Saumur!5e0!3m2!1sfr!2sfr!4v1595847498235!5m2!1sfr!2sfr" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>

  <footer>
    <div class="icone">
      <a href="https://instagram.com/le_point_d_orgue_saumur?igshid=14jjqhkte8284" target="_blank" alt="ecole musique point d'orgue  saumur guitare batterie chant"><img src="{{ asset('image/instagram.png') }}" height="40" width="auto"></a>
      <a href="https://m.facebook.com/Le-point-dorgue-103605468113563/"target="_blank" alt="ecole musique point d'orgue  saumur guitare batterie chant"><img src="{{ asset('image/facebook-musique.png') }}" height="40" width="auto"></a>
    </div>
    <div class="mentions">
      <a href="mentions"target="_blank"> Mentions Légales</a>
    </div>
  </footer>
</body>
</html>
