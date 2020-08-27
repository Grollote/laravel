<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/bootstrap.css')}}"rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Asap&family=Faustina:wght@600&family=Kalam:wght@300&display=swap" rel="stylesheet">
        </head>
    <body>
  
    
    
        <div class="menu" id="menu">
            <div class="m-b-md">
                <a href="/#content"><img src="image/point-dorgue.png" class="logotype fadein"alt="point d'orgue" height="150" width="auto">
              
            </div>
            <div class="links">
                <a href="/#text-justify">Ecole</a>
                <a href="/#flip-card">Formules</a>
                <a href="/#information">Contact</a>
            </div>
        </div>
    
          
    
    
    <footer>
        <div class="icone">
          <a href="https://instagram.com/le_point_d_orgue_saumur?igshid=14jjqhkte8284" target="_blank"><img src="{{ asset('image/instagram.png') }}" height="30" width="auto"></a>
          <a href="https://m.facebook.com/Le-point-dorgue-103605468113563/"target="_blank"><img src="{{ asset('image/facebook.png') }}" height="30" width="auto"></a>
  
        </div>
        <div class="mentions">
          <a href="mentions"target="_blank"> Mentions Légales</a>
        </div>
  
      </footer>
  </body>
  </html>