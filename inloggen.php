<!DOCTYPE html>
<html lang="nl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Rowin Schmidt | Inloggen</title>
  <link rel="shortcut icon" href="https://s5.postimg.org/55bhyye5z/icon.png" type="image/x-icon">
  <meta name="theme-color" content="#EB2328">
  <link rel=stylesheet href="CSS/style.css" />
  <link rel=stylesheet href="CSS/loading.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/0eb2251b78.js"></script>
</head>

<body>
<div class="header_stretched"></div>

<div class="header_transparent">
  <div class="logo">
    <a href="./index.html"><img src="https://image.jimcdn.com/app/cms/image/transf/dimension=291x10000:format=png/path/s2ec7eeaa407ce4fa/image/i89b903993afaab01/version/1473185876/image.png" alt="logo" style="width:auto;height:125px;"></a>
    <div class="logo_rechts"><img src="http://bbpopart.nl/wp-content/uploads/2016/10/Rowin.png" id="Rowin_logo" alt="Rowin_Schmidt" style="width:415px;height:auto;"></div>
  </div></div>

<header>
  <div class="wrap">
    <ul class="topnav" id="myTopnav">
      <li><a href="./index.html"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li><a href="./Over_mij.html">Over mij</a></li>
      <li><a href="./Mijn_werk.html">Mijn werk</a></li>
      <li><a href="./Magister.html">Magister</a></li>
      <li class="inloggen"><a href="./inloggen.php">Inloggen</a></li>
      <li class="icon">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i> &nbsp;</span>
      </li>
    </ul>
  </div>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
      <li><a href="./index.html">Home</a></li>
      <li><a href="./Over_mij.html">Over mij</a></li>
      <li><a href="./Mijn_werk.html">Mijn werk</a></li>
      <li><a href="./Magister.html">Magister</a></li>
      <li class="inloggen_sidenav"><a href="./inloggen.php">Inloggen</a></li>
    </ul>
  </div>
</header>

<div id="loader-wrapper">
  <div class="loader"><img src="https://image.jimcdn.com/app/cms/image/transf/dimension=291x10000:format=png/path/s2ec7eeaa407ce4fa/image/i89b903993afaab01/version/1473185876/image.png" id="R_logo" alt="logo" style="width:175px;height:auto;"></div>
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>

  <div class="body_wrap">
    <h1><span style="color:#EB2328">I</span>nloggen</h1>
    Log hier in, of maak een account aan. Gebruik vanwege privacy geen écht wachtwoord.
  </div>

        <div class="login">
          <div class="inloggen_form">
            <form method="post" action="index.php">
              E-mailadres:
              <input type="email" name="mailadres" placeholder="Vul hier je e-mailadres in" required/>
              <p>Wachtwoord:<input type="password" name="password" placeholder="Vul hier je wachtwoord in" minlength=10 required/>
              <p><input type="submit" name="submit" value="Inloggen"/>
              <p><label><span style="float: left; font-size: 15px; margin-bottom: 12px;"><input type="checkbox" checked="checked">Ingelogd blijven</span></label>
            </form>
        </div>
      </div>

      <div class="account_bg">
        <div class="inloggen_uitbreiden_form">
          <div class="account_aanmaken"><span>Account aanmaken</span></div>
            <div class="account_form">
              <h3><span style="color:#EB2328">A</span>ccount aanmaken</h3>

                  <form method="post" action="index.php">
                    E-mailadres:
                    <input type="email" name="mailadres" placeholder="Vul hier je e-mailadres in" required/>
                    <p>Wachtwoord:<input type="password" name="password" id="password" placeholder="Vul hier je wachtwoord in" minlength=6 required/>
                    <p>Wachtwoord bevestigen:<input type="password" name="password" id="confirm_password" placeholder="Vul hier je wachtwoord in" required/>
                    <p><label><span style="float: left; font-size: 15px; margin-bottom: 12px;"><input type="checkbox" required>Ik ga akkoord met de voorwaarden</a></span></label>
                    <p><input type="submit" name="submit" class="pure-button pure-button-primary" value="Account aanmaken"/>
                  </form>



            </div>
          </div>
        </div>
      </div>




<footer>
  <div class="footer_content">
    <div class="categorieën_side">
    <h3><b><span style="color:#EB2328">Categorieën</span></b></h3>
      <ul class="footer">
        <li><a href="./index.html">Home</a></li>
        <li><a href="./Over_mij.html">Over mij</a></li>
        <li><a href="./Mijn_werk.html">Mijn werk</a></li>
        <li><a href="./Magister.html">Magister</a></li>
      </ul>
    </div>

    <div class="validatie_side">
    <h3><b><span style="color:#EB2328">Validatie</span></b></h3>
      <ul class="footer">
        <li><a href="http://validator.w3.org/check?uri=referer" target="_blank">HTML validatie</a></li>
        <li><a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">CSS validatie</a></li>
      </ul>
    </div>

    <div class="sociaal_side">
    <h3><b><span style="color:#EB2328">Sociaal</span></b></h3>
      <ul class="footer">
        <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
        <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
        <li><a href="https://plus.google.com/" target="_blank">Google Plus</a></li>
      </ul>
    </div>

    <div class="opleiding_side">
    <h3><b><span style="color:#EB2328">Opleiding</span></b></h3>
      <ul class="footer">
        <li><a href="https://www.ma-web.nl/opleidingen/opleidingsoverzicht/mediadeveloper/" target="_blank">Media Developer</a></li>
        <li><a href="https://www.ma-web.nl/" target="_blank">MediaCollege Amsterdam</a></li>
        <li><a href="https://www.google.nl/maps/place/Mediacollege+Amsterdam+hoofdgebouw/@52.391117,4.8447474,14.5z/data=!4m13!1m7!3m6!1s0x47c5e28849730d2f:0x9ce34c63c2f1c5ed!2sContactweg+36,+1014+AN+Amsterdam!3b1!8m2!3d52.3910379!4d4.8569872!3m4!1s0x47c5e28849730d2f:0x5dffd675d740eddb!8m2!3d52.3910379!4d4.8569872?hl=nl" target="_blank">Contactweg 36 1060 JA</a></li>
      </ul>
      <p>2016 - 2017</p>
    </div>

    <div class="logo_side">
      <img src="https://image.jimcdn.com/app/cms/image/transf/dimension=291x10000:format=png/path/s2ec7eeaa407ce4fa/image/i89b903993afaab01/version/1473185876/image.png" id="R_logo_footer" alt="logo_footer" style="width:auto;height:175px;">
    </div>

  </div>
</footer>
  <div id="copyright"></div>
  <a href="#0" class="cd-top">Top</a>
  <script src="JAVA/script.js"></script>
</body>
</html>
