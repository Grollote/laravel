<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/bootstrap.css')}}"rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Le Point d&#039Orgue, école de musique</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Asap&family=Faustina:wght@600&family=Kalam:wght@300&display=swap" rel="stylesheet">
        </head>
        <body>

            <div class="content" id="content">
          
          
              <div class="m-b-md">
                <a href="#content"><img src="image/point-dorgue.png" class="logotype fadein" alt="ecole musique point d&#039orgue  saumur guitare batterie chant"></a>
                <a href="connexion"target="_blank" class="lien_connexion">Connexion</a>
          
              </div>
              <div class="links">
                <a href="#text-justify">Ecole</a>
                <a href="#flip-card">Formules</a>
                <a href="#information">Contact</a>
                
              </div>
            </div>
            <div class="login-page">
              <div class="form">
                <form class="register-form">
                  <input type="text" placeholder="name"/>
                  <input type="password" placeholder="password"/>
                  <input type="text" placeholder="email address"/>
                  <button>create</button>
                  <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form>
                <form class="login-form">
                  <input type="text" placeholder="username"/>
                  <input type="password" placeholder="password"/>
                  <button>login</button>
                  <p class="message">Not registered? <a href="#">Create an account</a></p>
                </form>
              </div>
            </div>
        
       
        
            <script type="text/javascript" src="/js/javascript-log.js"></script>
   
  </body>
  </html>