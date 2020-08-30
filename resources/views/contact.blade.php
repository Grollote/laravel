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
      <h3>PORTES OUVERTES LE 05 SEPTEMBRE 2020, de 14h à 19h.</h3>
      <p class="text-justify actualite">
      </br>
        <em>"Le Point d'Orgue, l'école qui swing !"</em></br></br>
        L&#039école de musique Le Point d'Orgue vous accueille au 71 rue d'Orléans à Saumur. Vous pouvez vous initier à toutes sortes d'instruments ou au chant. L'école accueille les élèves de tous âges dans une ambiance conviviale. Si vous souhaitez nous rejoindre ou demander de plus amples informations, n'hésitez pas à nous contacter via le formulaire plus bas, par téléphone ou mail.
      </p>
    </div>

    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLe-point-dorgue-103605468113563%2F&tabs=timeline&width=250&height=350&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId"width="250" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
  </div>
  
  

<p class="text-justify">Pour vous inscrire : <a href="{{ asset('bulletin-inscription.pdf') }}" target="_blank"><img src="{{ asset('image/pdf.png') }}"></a></p>
  <p class="text-justify">Pour consulter le règlement intérieur : <a href="reglement" target="_blank">Cliquez ici !</a></p>


<h2>contact ici</h2>
<div class="row">
    <div class="col-md-6">
      @if (Session::has('flash_message'))
        <div class="alert alert-success">{{ Session::get('flash_message')}}</div>
      @endif
      <form method="post" action="{{ route('contact.store') }}">
        {{ csrf_field()}}
          <div class="form-group col-md-5">
              <label>Full name:</label>
              <input type="text" class="form-control" name="name">
              @if($errors->has('name'))
                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
              @endif
          </div>
          <div class="form-group col-md-5">
              <label>email adresse</label>
              <input type="text" class="form-control" name="email">
              @if($errors->has('email'))
                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
              @endif
          </div>
          <div class="form-group col-md-6">
              <label>message</label>
              <textarea name="message" class="form-control"></textarea>
              @if($errors->has('message'))
                <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
              @endif
        </div>
      </div>
    </div>

    <button class="btn btn-info">Submit</button>
</form>
  
</div>
<div class="main-coordonnees">
  <p class="Titre-coordonnées">Coordonnées de l&#039école</p>
  <p class="text-justify"><img src="{{ asset('image/map.png') }}" height="30" width="auto"> 71 Rue d Orleans 49400 Saumur</p>
  <p class="text-justify"><img src="{{ asset('image/mail.png') }}" height="30" width="auto">pointdorguesaumur@gmail.com</p>
  <p class="text-justify"><img src="{{ asset('image/phone.png') }}" height="30" width="auto">02.41.51.98.26</p>
  <div class="map-responsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.867472414942!2d-0.08187138418808754!3d47.25829471996658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4807f72ca0fa9e1d%3A0x22a7b200426828a7!2s71%20Rue%20d&#39;Orl%C3%A9ans%2C%2049400%20Saumur!5e0!3m2!1sfr!2sfr!4v1595847498235!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</div>
</div>
</body>
</html>
