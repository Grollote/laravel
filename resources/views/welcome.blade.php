
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
          <img src="image/point-dorgue.png" alt="point d'orgue" height="150" width="auto">
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

<!--Guitare-Basse-->

        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3 m-4 pl-auto">
                    <div class="card-wrapper">
                        <div class="content">
                            <div class="face-front z-depth-2">
                                <img src="{{ asset('image/guitar.png') }} " width="250px;" height="150px;">

                                <div class="card-body">
                                    <h5 class="name">Pierre</h5>
                                    <hr>
                                    <p class="texte">Guitare électrique / Guitare accoustique / Basse </p>
                                </div>
                            </div>

                            <div class="face-back z-depth-2">
                                <div class="card-body">
                                    <p>bla la llsfj  sjfb sfeb</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 m-4 pl-auto">
                    <div class="card-wrapper">
                        <div class="content">
                            <div class="face-front z-depth-2">
                                <img src="{{ asset('image/guitar.png') }} " width="250px;" height="150px;">

                                <div class="card-body">
                                    <h5 class="name">Bruno</h5>
                                    <hr>
                                    <p class="texte">Guitare accoustique</p>
                                </div>
                            </div>

                            <div class="face-back z-depth-2">
                                <div class="card-body">
                                    <p>bla la llsfj  sjfb sfeb</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 m-4 pl-auto">
                    <div class="card-wrapper">
                        <div class="content">
                            <div class="face-front z-depth-2">
                                <img src="{{ asset('image/guitar.png') }} " width="250px;" height="150px;">

                                <div class="card-body">
                                    <h5 class="name">Pierre</h5>
                                    <hr>
                                    <p class="texte">Hey bitch</p>
                                </div>
                            </div>

                            <div class="face-back z-depth-2">
                                <div class="card-body">
                                    <p>bla la llsfj  sjfb sfeb</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

<!--Batterie-->
        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3 m-4 pl-auto">
                    <div class="card-wrapper">
                        <div class="content">
                            <div class="face-front z-depth-2">
                                <img src="{{ asset('image/drum.png') }} " width="250px;" height="150px;">

                                <div class="card-body">
                                    <h5 class="name">Michel</h5>
                                    <hr>
                                    <p class="texte">Batterie </p>
                                </div>
                            </div>

                            <div class="face-back z-depth-2">
                                <div class="card-body">
                                    <p>bla la llsfj  sjfb sfeb</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 m-4 pl-auto">
                    <div class="card-wrapper">
                        <div class="content">
                            <div class="face-front z-depth-2">
                                <img src="{{ asset('image/drum.png') }} " width="250px;" height="150px;">

                                <div class="card-body">
                                    <h5 class="name">Bobby</h5>
                                    <hr>
                                    <p class="texte">Batterie</p>
                                </div>
                            </div>

                            <div class="face-back z-depth-2">
                                <div class="card-body">
                                    <p>bla la llsfj  sjfb sfeb</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 m-4 pl-auto">
                    <div class="card-wrapper">
                        <div class="content">
                            <div class="face-front z-depth-2">
                                <img src="{{ asset('image/drum.png') }} " width="250px;" height="150px;">

                                <div class="card-body">
                                    <h5 class="name">Bobby</h5>
                                    <hr>
                                    <p class="texte">Batterie</p>
                                </div>
                            </div>

                            <div class="face-back z-depth-2">
                                <div class="card-body">
                                    <p>bla la llsfj  sjfb sfeb</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            
            </div>
        </div>

<!--Chant-->
<div class="container mt-5">
    <div class="row">

        <div class="col-md-3 m-4 pl-auto">
            <div class="card-wrapper">
                <div class="content">
                    <div class="face-front z-depth-2">
                        <img src="{{ asset('image/drum.png') }} " width="250px;" height="150px;">

                        <div class="card-body">
                            <h5 class="name">Patrick</h5>
                            <hr>
                            <p class="texte">Chant / Chorale / Eveil musical </p>
                        </div>
                    </div>

                    <div class="face-back z-depth-2">
                        <div class="card-body">
                            <p>bla la llsfj  sjfb sfeb</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="col-md-3 m-4 pl-auto">
            <div class="card-wrapper">
                <div class="content">
                    <div class="face-front z-depth-2">
                        <img src="{{ asset('image/drum.png') }} " width="250px;" height="150px;">

                        <div class="card-body">
                            <h5 class="name">Patrick</h5>
                            <hr>
                            <p class="texte">Batterie</p>
                        </div>
                    </div>

                    <div class="face-back z-depth-2">
                        <div class="card-body">
                            <p>bla la llsfj  sjfb sfeb</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 m-4 pl-auto">
            <div class="card-wrapper">
                <div class="content">
                    <div class="face-front z-depth-2">
                        <img src="{{ asset('image/drum.png') }} " width="250px;" height="150px;">

                        <div class="card-body">
                            <h5 class="name">Patrick</h5>
                            <hr>
                            <p class="texte">Batterie</p>
                        </div>
                    </div>

                    <div class="face-back z-depth-2">
                        <div class="card-body">
                            <p>bla la llsfj  sjfb sfeb</p>
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