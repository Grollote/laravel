
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/bootstrap.css')}}"rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Le Point d'Orgue, école de musique</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Asap&family=Faustina:wght@600&family=Kalam:wght@300&display=swap" rel="stylesheet">
        </head>
    <body>
    <!--menu-->
    
    
        <div class="menu" id="menu">
            <div class="m-b-md">
                <a href="/#content"><img src="image/point-dorgue.png" class="logotype fadein"alt="ecole musique point d'orgue  saumur guitare batterie chant" >
              <a href="" class="lien_connexion">Connexion</a>

            </div>
            <div class="links">
                <a href="/#text-justify">Ecole</a>
                <a href="/#flip-card">Formules</a>
                <a href="/#information">Contact</a>
            </div>
          </div>
    
          
    
          <body>
            <h4>Présentation des professeurs</h4>
    
        
            <div class="container mt-5">
                <div class="row">
    
                    <div class="col-md-3 m-4 pl-auto">
                        <div class="card-wrapper">
                            <div class="card">
                                <div class="face-front z-depth-2">
                                    <img src="{{ asset('image/a.blandin.png') }} " alt="ecole musique point d'orgue  saumur guitare batterie chant">
    
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
                            <div class="card">
                                <div class="face-front z-depth-2">
                                    <img src="{{ asset('image/e.bagourd.png') }} "alt="ecole musique point d'orgue  saumur guitare batterie chant">
    
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
                            <div class="card">
                                <div class="face-front z-depth-2">
                                    <img src="{{ asset('image/a.leveque.png') }} " alt="ecole musique point d'orgue  saumur guitare batterie chant">
    
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
                            <div class="card">
                                <div class="face-front z-depth-2">
                                    <img src="{{ asset('image/a.duret.png') }} "alt="ecole musique point d'orgue  saumur guitare batterie chant" >
    
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
                            <div class="card">
                                <div class="face-front z-depth-2">
                                    <img src="{{ asset('image/drums.png') }} " alt="ecole musique point d'orgue  saumur guitare batterie chant">
    
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
                            <div class="card">
                                <div class="face-front z-depth-2">
                                    <img src="{{ asset('image/saxo.png') }} " alt="ecole musique point d'orgue  saumur guitare batterie chant">
    
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
                    <div class="card">
                        <div class="face-front z-depth-2">
                            <img src="{{ asset('image/b.druard.png') }} "alt="ecole musique point d'orgue  saumur guitare batterie chant">
    
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
                    <div class="card">
                        <div class="face-front z-depth-2">
                            <img src="{{ asset('image/p.lefrancois.png') }} "alt="ecole musique point d'orgue  saumur guitare batterie chant" >
    
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
                    <div class="card">
                        <div class="face-front z-depth-2">
                            <img src="{{ asset('image/bass.png') }} "alt="ecole musique point d'orgue  saumur guitare batterie chant">
    
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
                    <div class="card">
                        <div class="face-front z-depth-2">
                            <img src="{{ asset('image/p.nivelle.png') }} "alt="ecole musique point d'orgue  saumur guitare batterie chant" >
    
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
          <a href="https://instagram.com/le_point_d_orgue_saumur?igshid=14jjqhkte8284" target="_blank"><img src="{{ asset('image/instagram.png') }}" alt="ecole musique point d'orgue  saumur guitare batterie chant" height="30" width="auto"></a>
          <a href="https://m.facebook.com/Le-point-dorgue-103605468113563/"target="_blank"><img src="{{ asset('image/facebook.png') }}" alt="ecole musique point d'orgue  saumur guitare batterie chant" height="30" width="auto"></a>
  
        </div>
        <div class="mentions">
          <a href="mentions"target="_blank"> Mentions Légales</a>
        </div>
  
      </footer>
  </body>
  </html>