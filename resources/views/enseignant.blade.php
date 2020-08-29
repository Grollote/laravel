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

    <h4>Présentation des professeurs</h4>
    
        <div class="container-card mt-5">
            <div class="row">
                <div class="col-md-3 m-4 pl-auto">
                    <div class="card-wrapper">
                        <div class="card-prof">
                            <div class="face-front z-depth-2">
                                <img src="{{ asset('image/a.duret.png') }} "alt="ecole musique point d'orgue  saumur guitare batterie chant" >
                                <div class="card-body">
                                    <h5 class="name">Agnès Blandin</h5>
                                    <p class="texte">Violon</p>
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
                        <div class="card-prof">
                            <div class="face-front z-depth-2">
                                <img src="{{ asset('image/drums.png') }} " alt="ecole musique point d'orgue  saumur guitare batterie chant">
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
                        <div class="card-prof">
                            <div class="face-front z-depth-2">
                                <img src="{{ asset('image/saxo.png') }} " alt="ecole musique point d'orgue  saumur guitare batterie chant">
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

        <div class="container-card mt-5">
            <div class="row">
                <div class="col-md-3 m-4 pl-auto">
                    <div class="card-wrapper">
                        <div class="card-prof">
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
                        <div class="card-prof">
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
                        <div class="card-prof">
                            <div class="face-front z-depth-2">
                                <img src="{{ asset('image/saxo.png') }} " alt="ecole musique point d'orgue  saumur guitare batterie chant">
                                    <div class="card-body">
                                    <h5 class="name">Jean-Michel Tresson</h5>
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
    
  
        <div class="container-card mt-5">
            <div class="row">
                <div class="col-md-3 m-4 pl-auto">
                    <div class="card-wrapper">
                        <div class="card-prof">
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
                        <div class="card-prof">
                            <div class="face-front z-depth-2">
                                <img src="{{ asset('image/p.lefrancois.guitare.png') }} "alt="ecole musique point d'orgue  saumur guitare batterie chant" >
                                <div class="card-body">
                                    <h5 class="name">Pierre Lefrançois</h5>
                                    <p class="texte">Guitare</p>
                                </div>
                            </div>    
                            <div class="face-back z-depth-2">
                                <div class="card-body">
                                    <p>Je vous propose des cours pour tout age / niveau, tout style (variété française et internationale, musique actuelle, folk, reggae, rock, blues,...),dans une ambiance détendue et ludique. Nous définirons ensemble votre objectif afin de répondre au mieux à vos attentes. Je travaille sur des morceaux choisis avec les élèves pour vous donner encore plus envie d’avancer et de prendre votre guitare.
                                    Possibilité de travailler sur tablature et/ou solfège, nous pourrons travailler les rythmes et arpèges, travail du médiator et des doigts, travail de l’harmonie, étude de morceaux, gammes, solo, improvisation, ...
                                    N’hésitez plus et à vos guitares !</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-3 m-4 pl-auto">
                    <div class="card-wrapper">
                        <div class="card-prof">
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
            </div>
        </div>
            
        <div class="container-card mt-5">
            <div class="row">
                <div class="col-md-3 m-4 pl-auto">
                    <div class="card-wrapper">
                        <div class="card-prof">
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