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
 
  <div class="container-card-form mt-5">
    <div class="row">
        <div class="col-md-3 m-4 pl-auto">
            <div class="card-wrapper-form">
                <div class="card-form">
                    <div class="face-front-form z-depth-2">
                        <img src="{{ asset('image/musique-solo.png') }} "alt="ecole musique point d'orgue  saumur guitare batterie chant" >
                        <div class="card-body">
                            <h5 class="name-form">FORMULE DES COURS PARTICULIERS</h5>
                            
                        </div>
                    </div>
                    <div class="face-back-form z-depth-2">
                        <div class="card-body">
                            <p></br></br>550€ </br><em>formule annuelle</em></br></br> Réglable en 10 mensualités de 55€ par mois pour 1/2h de cours par semaine, durant 33 semaines. (toutes disciplines)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 m-4 pl-auto">
            <div class="card-wrapper-form">
                <div class="card-form">
                    <div class="face-front-form z-depth-2">
                        <img src="{{ asset('image/musique-duo.png') }} " alt="ecole musique point d'orgue  saumur guitare batterie chant">
                        <div class="card-body">
                            <h5 class="name-form">FORMULE DES COURS A DEUX</h5>
                        </div>
                    </div>
                    <div class="face-back-form z-depth-2">
                        <div class="card-body">
                            <p></br></br>480€ </br><em>formule annuelle</em></br></br> Réglable en 10 mensualités de 48€ par mois pour 1/2h de cours par semaine, durant 33 semaines (guitare, batterie, piano).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 m-4 pl-auto">
            <div class="card-wrapper-form">
                <div class="card-form">
                    <div class="face-front-form z-depth-2">
                        <img src="{{ asset('image/musique-ado2.png') }} " alt="ecole musique point d'orgue  saumur guitare batterie chant">
                            <div class="card-body">
                            <h5 class="name-form">CHANT A DEUX (ados)</h5>
                            </div>
                    </div>
                    <div class="face-back-form z-depth-2">
                        <div class="card-body">
                            <p></br></br>440€ </br><em>formule annuelle</em></br></br> Réglable en 10 mensualités de 44€ par mois pour 1/2h de cours par semaine, durant 33 semaines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-card-form mt-5">
    <div class="row">
            <div class="col-md-3 m-4 pl-auto">
                <div class="card-wrapper-form">
                    <div class="card-form">
                        <div class="face-front-form z-depth-2">
                            <img src="{{ asset('image/musique-ado.png') }} "alt="ecole musique point d'orgue  saumur guitare batterie chant" >
                            <div class="card-body">
                                <h5 class="name-form">CHORALE ENFANTS (11 à 13 ans)</h5>
                            </div>
                        </div>
                        <div class="face-back-form z-depth-2">
                            <div class="card-body">
                                <p></br></br>180€ </br><em>formule annuelle</em></br></br> Le mercredi de 14h à 14h45.</br> Réglable en 10 mensualités de 18€ par mois pour 3/4h de cours par semaine, durant 33 semaines.)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-md-3 m-4 pl-auto">
            <div class="card-wrapper-form">
                <div class="card-form">
                    <div class="face-front-form z-depth-2">
                        <img src="{{ asset('image/musique-chorale.png') }} " alt="ecole musique point d'orgue  saumur guitare batterie chant">
                        <div class="card-body">
                            <h5 class="name-form">CHORALE ENFANTS (9 à 10 ans)</h5>
                        </div>
                    </div>
                    <div class="face-back-form z-depth-2">
                        <div class="card-body">
                            <p></br></br>180€ </br><em>formule annuelle</em></br></br> Le mercredi de 14h45 à 15h30.</br> Réglable en 10 mensualités de 18€ par mois pour 3/4h de cours par semaine, durant 33 semaines.)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 m-4 pl-auto">
            <div class="card-wrapper-form">
                <div class="card-form">
                    <div class="face-front-form z-depth-2">
                        <img src="{{ asset('image/musique-enfant.png') }} " alt="ecole musique point d'orgue  saumur guitare batterie chant">
                            <div class="card-body">
                            <h5 class="name-form">CHORALE ENFANTS (7 à 8 ans)</h5>
                            </div>
                    </div>
                    <div class="face-back-form z-depth-2">
                        <div class="card-body">
                            <p></br></br>180€ </br><em>formule annuelle</em></br></br> Le mercredi de 15h30 à 16h15. </br>Réglable en 10 mensualités de 18€ par mois pour 3/4h de cours par semaine, durant 33 semaines.)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-card-form mt-5">
    <div class="row">
        <div class="col-md-3 m-4 pl-auto">
            <div class="card-wrapper-form">
                <div class="card-form">
                    <div class="face-front-form z-depth-2">
                        <img src="{{ asset('image/musique-chorale-adulte.png') }} "alt="ecole musique point d'orgue  saumur guitare batterie chant">
                        <div class="card-body">
                            <h5 class="name-form">CHORALE ADULTE</h5>
                        </div>
                    </div>
                    <div class="face-back-form z-depth-2">
                        <div class="card-body">
                        <p></br></br>280€ </br><em>formule annuelle</em></br></br> Le lundi de 20h à 21h et le mardi de 19h à 20h. </br> Réglable en 10 mensualités de 28€ par mois </br>pour 1h de cours par semaine, durant 33 semaines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    
        <div class="col-md-3 m-4 pl-auto">
            <div class="card-wrapper-form">
                <div class="card-form">
                    <div class="face-front-form z-depth-2">
                        <img src="{{ asset('image/groupe.png') }} "alt="ecole musique point d'orgue  saumur guitare batterie chant" >
                        <div class="card-body">
                            <h5 class="name-form">EVEIL MUSICAL (5 à 7 ans)</h5>
                        </div>
                    </div>    
                    <div class="face-back-form z-depth-2">
                        <div class="card-body">
                            <p></br></br>180€ </br> <em>formule annuelle</em></br></br>Le mercredi (horaires à définir). </br> Réglable en 10 mensualités de 18€ par mois pour 3/4h de cours par semaine, durant 33 semaines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>

<p class="text-justify">Pour vous inscrire : <a href="{{ asset('bulletin-inscription-musique.pdf') }}" target="_blank"><img src="{{ asset('image/pdf.png') }}"></a></p>
  <p class="text-justify">Pour consulter le règlement intérieur : <a href="reglement" target="_blank">Cliquez ici !</a></p>
  
  <div class="rens-contact">
  <div class="form-rens">
    <h2 class="text-justify" id="text-justify">Demande de renseignements </h2>

    <div class="container">
  
  <FORM METHOD=POST ENCTYPE="text/plain" ACTION="mailto:pointdorguesaumur@gmail.com"> 
   
    <p class="section-form">Nom :</p><input class="form-group" type="text" name="nom" size="30" required>
    <p class="section-form">Prénom :</p><input class="form-group" type="text" name="prenom" size="30" required>
    <p class="section-form">Adresse mail :</p><input class="form-group" type="email" name="mail"  required>
    <p class="section-form">Numéro de téléphone :</p><input class="form-group" type="tel" name="telephone"  required>
    <p class="section-form">Cours qui vous intéresse(nt) :<p>
        <p class="checkbox-cours"><input class="form-group" type="checkbox" name="cours" value="guitare">  guitare
        <input class="form-group" type="checkbox" name="cours" value="basse electrique">  basse électrique
       <input class="form-group" type="checkbox" name="cours" value="violon">  violon
       <input class="form-group" type="checkbox" name="cours" value="batterie">  batterie
       <input class="form-group" type="checkbox" name="cours" value="piano">  piano
       <input class="form-group" type="checkbox" name="cours" value="saxophone">  saxophone
       <input class="form-group" type="checkbox" name="cours" value="trompette">  trompette</br>
       <input class="form-group" type="checkbox" name="cours" value="chant">  chant
       <input class="form-group" type="checkbox" name="cours" value="chorale">  chorale
       <input class="form-group" type="checkbox" name="cours" value="eveil">  éveil musical
        </p> 
    <p class="section-form">Votre message</p><textarea name="message" rows="4" cols="30" value="message"></textarea>
    <p class="rgpd">En soumettant ce formulaire, j'accepte que mes informations soient utilisées dans le cadre de </br>ma demande et de la relation commerciale qui peut en découler.</br> Pour en savoir davantage, consultez notre page  <a href="mentions" target="_blank">Mentions légales.</a></p>
    <input class="btn btn-info" type="submit" value="envoyer">
    
    </FORM>
    </div>
</div>

    <div class="main-coordonnees" id="information">
      <h2 class="text-justify" id="text-justify">Coordonnées de l'école </h2>
      <p class="text-justify"><img src="{{ asset('image/map.png') }}" height="30" width="auto"> 71 Rue d Orleans 49400 Saumur</p>
      <p class="text-justify"><img src="{{ asset('image/mail.png') }}" height="30" width="auto">pointdorguesaumur@gmail.com</p>
      <p class="text-justify"><img src="{{ asset('image/phone.png') }}" height="30" width="auto">02.41.51.98.26</p>
      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.867472414942!2d-0.08187138418808754!3d47.25829471996658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4807f72ca0fa9e1d%3A0x22a7b200426828a7!2s71%20Rue%20d&#39;Orl%C3%A9ans%2C%2049400%20Saumur!5e0!3m2!1sfr!2sfr!4v1595847498235!5m2!1sfr!2sfr" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
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
