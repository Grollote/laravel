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
        </div>
        
        <div class="dropdown-menu">
          <form class="px-4 py-3">
            <div class="form-group">
              <label for="exampleDropdownFormEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
            </div>
            <div class="form-group">
              <label for="exampleDropdownFormPassword1">Password</label>
              <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                <label class="form-check-label" for="dropdownCheck">
                  Remember me
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">New around here? Sign up</a>
          <a class="dropdown-item" href="#">Forgot password?</a>
        </div>
        </div>
        
   
   
  </body>
  </html>