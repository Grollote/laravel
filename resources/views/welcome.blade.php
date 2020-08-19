<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
  <title>Laravel</title>
    <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <!-- Styles -->
<style>
  html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
  }
  .full-height {
    height: 100vh;
  }
  .content {
    text-align: center;
  }
  .title {
    font-size: 84px;
  }
  .links > a {
    color: blue;
    padding: 0 100px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
  }
  a {
    color: blue;
  }
  .m-b-md {
    height: 150px;
    margin-bottom: 30px;
    background: #636b6f;
    color: black;
  }
  .lien_connexion{
    float: right;
  }
  .text-justify{
    margin: 50px 0 0 5%;
    width: 80%;
  }
  .actualite{
    width: 70%;
  }
  .fil-actualite{
    display: flex;
  }
  .main-card{
    display: flex;
    margin: 70px;
  }
  .flip-card {
    width: 300px;
    height: 200px;  
    perspective: 1000px; /* Remove this if you don't want the 3D effect */
    margin-left: 120px;
    margin-bottom: 30px;
    
  }
  
  /* This container is needed to position the front and back side */
  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;

  }
  
  /* Do an horizontal flip when you move the mouse over the flip box container */
  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }
  
  /* Position the front and back side */
  .flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden; /* Safari */
    backface-visibility: hidden;
    background: radial-gradient(#ffffff,#999999);

  }
  
  /* Style the front side (fallback if image is missing) */
  .flip-card-front {
    color: black;
  }
  
  /* Style the back side */
  .flip-card-back {
    color: black;
    transform: rotateY(180deg);
  }
  .main-form{
    display: flex;
  }
  .main{
    width: 40%;
    margin: 0 0 0 5%;
  }
  .main-coordonnees{
    width: 40%;
    margin: 0 0 0 10%;
  }
  .main >img {
    height: 250px;
    width: auto;
  }
  .Information{
    font-size: 32px;
  }
  .Titre-coordonnées{
    font-size: 32px;
  }
  textarea{
    height: 150px;
    width: 100%;
    resize: none;
}
  footer{
    margin-top: 5%;
    height: 100px;
    background: #636b6f;
  }
  .form-check-label{
    margin: 0 10px; 
  }
  .main-renseignement{
    margin: 5%;
    display: flex;
  }
  .Coordonnées{
    margin: 20% 0 0 180px;
    font-size: 20px;
  }
  .icone{
    padding-left: 48%;
    padding-top: 1%;
  }
  .mentions{
    margin: 10px;
    text-align: center;
  }
  .map-responsive {
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;>
    height:0;
    }
    
    .map-responsive iframe {
      margin-top: 5%;
    left:0;
    top:10;
    height:100%;
    width:100%;
    position:absolute;
    }
    
  @media only screen and (max-width: 900px)
  {
    .card{
      width: 10%;
    }
    h1{
      font-size: 16px;
    }
    .main-renseignement
    {
      display: block;
    }
    p{
      font-size: 10px;
    }
    .Titre-coordonnées{
      margin: 0 0 0 0;
    }
    .Titre-coordonnées ,.Information{
      font-size: 20px;
    }
    .main{
      width: 70%;
    }
    .m-b-md{
      height:100px;
    }
    .m-b-md > img {
      height: 100px;
      width: auto;
    }
  }
  @media only screen and (max-width: 600px)
  {
    .card{
      width: 15%;
    }
    .actualite{
      width: 90%;
    }
    .fil-actualite{
      display: block;
      
    }
    .fil-actualite iframe{
      margin: 0 0 0 25%;
    }
    .main-coordonnees{
      width: 70%;
    }
  }

</style>
</head>
<body>
  <div class="content" id="content">

    <div class="m-b-md">
    <a href="#content"><img src="image/point-dorgue.png" alt="point d'orgue" height="150" width="auto"></a>

      <a href="" class="lien_connexion">Connexion</a>

    </div>
    <div class="links">
      <a href="#text-justify">Ecole</a>
      <a href="#Information">Formule</a>
      <a href="#Information">Contact</a>
    </div>
  </div>
  <div class="fil-actualite">
    <div class="actualite">
      <p class="text-justify actualite">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet atque consectetur vel nostrum fugit quo repellendus corporis harum odio laborum eius neque error asperiores, expedita alias ad pariatur quod eaque ex et perspiciatis ipsum! Asperiores repellat facilis voluptatibus alias, reprehenderit laudantium! Tempore, enim rerum ut officia ad corrupti omnis quisquam incidunt quaerat beatae neque modi id dolor exercitationem deserunt dicta aperiam, aliquam expedita fuga eligendi, doloribus numquam perspiciatis? Ad veritatis asperiores aliquam saepe dolorum laudantium commodi optio quam eos porro, iste distinctio tenetur molestiae. Id dolor quas dolore at hic explicabo maxime fuga harum voluptas quam exercitationem porro accusantium voluptates quibusdam facilis eius magni quod, asperiores consectetur, illo adipisci nostrum qui! Cupiditate dolor atque maiores totam laudantium pariatur suscipit eveniet.
      </p>
    </div>

    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLe-point-dorgue-103605468113563%2F&tabs=timeline&width=250&height=350&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="250" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
  </div>
  
  <h1 class="text-justify" id="text-justify">Présentation de l entreprise</h1>
  <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium optio corporis sed aperiam consectetur odit dolore adipisci repellat, ipsam expedita perferendis? Inventore perspiciatis quod debitis et dolor, dignissimos libero maiores? Quos eos iusto perspiciatis, architecto sed corporis. Vero, est! Illum nemo asperiores delectus numquam! Sint magni est fugiat, commodi animi quisquam suscipit mollitia officiis nostrum voluptate pariatur molestiae iusto voluptas, distinctio delectus ullam quos perferendis ab debitis ea. Ipsum culpa obcaecati voluptatum asperiores inventore perspiciatis officiis nemo placeat exercitationem itaque quam, temporibus dolor expedita doloribus, aut distinctio possimus. At voluptatum ducimus dolor aliquid maiores in reprehenderit neque aliquam, qui beatae, optio natus aut dolores similique. Ad fuga, deserunt eum nam sint incidunt placeat! Odio, libero facilis atque repellendus dolores ipsa!<a href="enseignant" > Découvrez nos enseignants</a>
  </p>
  @php
    $alt=[ "Formule cours particuliers", 
            "Formule à deux",
            "Chant à deux",
            "Chorale enfant(11 à 13ans)",
            "Chorale enfant (9 à 11 ans)",
            "Chorale enfant(7 à 8ans)",
            "Chorale adultes",
            "Veille musicale"
    ];
    $image=["{{ asset('image/drum.png') }}\"",
    "{{ asset('image/drum.png') }}\"",
    "{{ asset('image/violin.png') }}\"",
    "{{ asset('image/violin.png') }}\"",
    "{{ asset('image/violin.png') }}\"",
    "{{ asset('image/violin.png') }}\"",
    "{{ asset('image/violin.png') }}\"",
    "{{ asset('image/violin.png') }}\"",
    ];
    $stock = "<div class=\"main-card\">";
    
    for ($i = 0; $i < 8; $i++) {
        $stock .= "<div class=\"flip-card\"><div class=\"flip-card-inner\"><div class=\"flip-card-front\"><img src=\"";
        $stock .= $image[$i]."><p>";
        $stock .= $alt[$i]."</p></div> <div class=\"flip-card-back\"><p>";
        $stock .= $alt[$i]."</p></div></div></div>";
        if ($i == 2 || $i== 5) {
            $stock .= "</div><div class=\"main-card\">";
        }
    }  
    echo $stock;
  @endphp
  </div>

<p class="text-justify">Pour vous inscrire : <a href=""><img src="{{ asset('image/pdf.jpg') }}" height="50" width="100"></a></p>
  <p class="text-justify">Pour consulter le règlement intérieur : <a href="reglement">Cliquez ici !</a></p>
    

  <div class="main-renseignement">
  <form class="main">
    <p class="Information" id="Information">Renseignement/Préinscription</p>
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
            "Guitare",
            "Batterie",
            "Basse",
            "Chorale ",
            "Veille musicale"
    ];
    $stock = "<div class=\"main-form\">";
    
    for ($i = 0; $i < 8; $i++) {
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
    <p class="text-justify"><img src="{{ asset('image/maps.png') }}" height="30" width="auto"> 71 Rue d Orleans 49400 Saumur</p>
    <p class="text-justify"><img src="{{ asset('image/email.png') }}" height="30" width="auto">pointdorguesaumur@gmail.com</p>
    <p class="text-justify"><img src="{{ asset('image/telephone.png') }}" height="30" width="auto">02.41.51.98.26</p>
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
        <a href=""> Mentions Légales</a>
      </div>

    </footer>
</body>
</html>
