
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/bootstrap.css')}}"rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Asap&family=Faustina:wght@600&family=Kalam:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Asap', sans-serif;
                height: 100vh;
                margin: 0;
              }
            .menu {
                text-align: center;
                font-family: 'Asap', sans-serif;
              }
            .links > a {
                color: rgba(38, 0, 255, 0.692);
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
              .m-b-md > a {
                float: right;
              }
    
              .animated infinite fadeIn{
                  animation-duration: 6s;
                  animation-delay:2s;
                  repeat:2;
    
              }
    
              h4{
                margin-top: 3%;
                padding-left:3%;
                font-family: 'Faustina', serif;
            }
    
    .card-wrapper{
        height:400px;
        width:300px;
        perspective: 1000px;
    }
    
    .content{
        position: relative;
        width:100%;
        height:100%;
        text-align:center;
        transition:transform 0.8s;
        transform-style: preserve-3d;
        box-shadow: 1px 1px 12px #555;
    }
    .card-wrapper:hover .content {
        transform: rotateY(180deg);
        transition: 1s;
    }
    
    .face-front, .face-back{
       position: absolute;
       width: 100%;
       height: 100%; 
       background-color:#fff;
       color: black;
    }
    
    .face-back{
        transform: rotateY(180deg);
    }
    
    .name{
        font-family: 'Faustina', serif;
    }
    
    .texte{
        font-family: 'Asap', sans-serif;
    }
    
    
        </style>
        </head>
    <body>
    <!--menu-->
    
    
        <div class="menu">
            <div class="m-b-md">
              <img class="animated infinite bounce slower" src="image/point-dorgue.png" alt="point d'orgue" height="150" width="auto">
              <a href="">Connexion</a>
            </div>
            <div class="links">
              <a href="">Ecole</a>
              <a href="">Formule</a>
              <a href="">Contact</a>
            </div>
          </div>
    
          
    
          <body>
            <h4>Présentation des professeurs</h4>
    
        
            <div class="container mt-5">
                <div class="row">
    
                    <div class="col-md-3 m-4 pl-auto">
                        <div class="card-wrapper">
                            <div class="content">
                                <div class="face-front z-depth-2">
                                    <img src="{{ asset('image/a.blandin.png') }} " >
    
                                    <div class="card-body">
                                        <h5 class="name">Agnès Blandin</h5>
                                        <p class="texte">Violon </p>
                                    </div>
                                </div>
    
                                <div class="face-back z-depth-2">
                                    <div class="card-body">
                                        <p>Plus d'informations à venir</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-3 m-4 pl-auto">
                        <div class="card-wrapper">
                            <div class="content">
                                <div class="face-front z-depth-2">
                                    <img src="{{ asset('image/e.bagourd.png') }} ">
    
                                    <div class="card-body">
                                        <h5 class="name">Eric Bagourd</h5>
                                        <p class="texte">Piano</p>
                                    </div>
                                </div>
    
                                <div class="face-back z-depth-2">
                                    <div class="card-body">
                                        <p>Plus d'informations à venir</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-3 m-4 pl-auto">
                        <div class="card-wrapper">
                            <div class="content">
                                <div class="face-front z-depth-2">
                                    <img src="{{ asset('image/a.leveque.png') }} " >
    
                                    <div class="card-body">
                                        <h5 class="name">Arnaud Lévêque</h5>
                                        <p class="texte">Piano</p>
                                    </div>
                                </div>
    
                                <div class="face-back z-depth-2">
                                    <div class="card-body">
                                        <p>Plus d'informations à venir</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
    
                </div>
            </div>
    
            <div class="container mt-5">
                <div class="row">
    
                    <div class="col-md-3 m-4 pl-auto">
                        <div class="card-wrapper">
                            <div class="content">
                                <div class="face-front z-depth-2">
                                    <img src="{{ asset('image/a.duret.png') }} " >
    
                                    <div class="card-body">
                                        <h5 class="name">Alain Duret</h5>
                                        <p class="texte">Batterie </p>
                                    </div>
                                </div>
    
                                <div class="face-back z-depth-2">
                                    <div class="card-body">
                                        <p>Plus d'informations à venir</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-3 m-4 pl-auto">
                        <div class="card-wrapper">
                            <div class="content">
                                <div class="face-front z-depth-2">
                                    <img src="{{ asset('image/drums.png') }} " >
    
                                    <div class="card-body">
                                        <h5 class="name">Jérôme Lelong</h5>
                                        <p class="texte">Batterie</p>
                                    </div>
                                </div>
    
                                <div class="face-back z-depth-2">
                                    <div class="card-body">
                                        <p>Plus d'informations à venir</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-3 m-4 pl-auto">
                        <div class="card-wrapper">
                            <div class="content">
                                <div class="face-front z-depth-2">
                                    <img src="{{ asset('image/saxo.png') }} " >
    
                                    <div class="card-body">
                                        <h5 class="name">Jean-Michel Cresson</h5>
                                        <p class="texte">Saxophone / Trompette</p>
                                    </div>
                                </div>
    
                                <div class="face-back z-depth-2">
                                    <div class="card-body">
                                        <p>Plus d'informations à venir</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                
                </div>
            </div>
    
  
    <div class="container mt-5">
        <div class="row">
    
            <div class="col-md-3 m-4 pl-auto">
                <div class="card-wrapper">
                    <div class="content">
                        <div class="face-front z-depth-2">
                            <img src="{{ asset('image/b.druard.png') }} ">
    
                            <div class="card-body">
                                <h5 class="name">Bruno Druard</h5>
                                <p class="texte">Guitare</p>
                            </div>
                        </div>
    
                        <div class="face-back z-depth-2">
                            <div class="card-body">
                                <p>Plus d'informations à venir</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="col-md-3 m-4 pl-auto">
                <div class="card-wrapper">
                    <div class="content">
                        <div class="face-front z-depth-2">
                            <img src="{{ asset('image/p.lefrancois.png') }} " >
    
                            <div class="card-body">
                                <h5 class="name">Pierre Lefrançois</h5>
                                <p class="texte">Guitare</p>
                            </div>
                        </div>
    
                        <div class="face-back z-depth-2">
                            <div class="card-body">
                                <p>Plus d'informations à venir</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-md-3 m-4 pl-auto">
                <div class="card-wrapper">
                    <div class="content">
                        <div class="face-front z-depth-2">
                            <img src="{{ asset('image/bass.png') }} ">
    
                            <div class="card-body">
                                <h5 class="name">André Tricoire</h5>
                                <p class="texte">Basse</p>
                            </div>
                        </div>
    
                        <div class="face-back z-depth-2">
                            <div class="card-body">
                                <p>Plus d'informations à venir</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 m-4 pl-auto">
                <div class="card-wrapper">
                    <div class="content">
                        <div class="face-front z-depth-2">
                            <img src="{{ asset('image/p.nivelle.png') }} " >
    
                            <div class="card-body">
                                <h5 class="name">Patrick Nivelle</h5>
                                <p class="texte">Chant / Chorale / Eveil musical</p>
                            </div>
                        </div>
    
                        <div class="face-back z-depth-2">
                            <div class="card-body">
                                <p>Plus d'informations à venir</p>
                            </div>
                        </div>
                    </div>
                </div>
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