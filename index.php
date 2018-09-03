<?php
/** Created by: Sébastien TOUZÉ
 * Date: 06/03/18
 */
$listServices = [
    ['img' => "img/nextcloud.jpg",
      'title' => "Nextcloud",
      'desc' => "Service de stockage et partage de fichier et d'édition collaborative (tableur xlsx, texte docx et présentation pptx)",
      'linkSite' => "https://nextcloud.hatlab.fr",
      'linkDetails' => ""],
    ['img' => "img/onlyoffice.jpg",
      'title' => "OnlyOffice",
      'desc' => "Édition collaborative en ligne de documents",
      'linkSite' => "https://nextcloud.hatlab.fr",
      'linkDetails' => ""],
    ['img' => "img/pad.png",
      'title' => "Etherpad",
      'desc' => "Service d'édition collaborative en temps réel. Utile pour la prise de notes en réunion, l'organisation d'idées et rédactions de documents publics",
      'linkSite' => "https://pad.hatlab.fr",
      'linkDetails' => ""],
    ['img' => "img/wikifab-org.jpg",
      'title' => "Wikifab",
      'desc' => "Wiki des projets des membres du Hatlab",
      'linkSite' => "https://wikifab.hatlab.fr",
      'linkDetails' => ""],
    ['img' => "img/hatlab.png",
        'title' => "HatLab",
        'desc' => "Page de présentation du Hatlab",
        'linkSite' => "https://hatlab.fr",
        'linkDetails' => ""],
    ['img' => "img/sunlab.png",
        'title' => "My Sunlab",
        'desc' => "Blog du SunLab (Wordpress)",
        'linkSite' => "https://mysunlab.org",
        'linkDetails' => ""],
    ['img' => "img/sqylab.jpg",
        'title' => "SQYLab",
        'desc' => "Blog du SQYLab (Wordpress)",
        'linkSite' => "https://sqylab.org",
        'linkDetails' => ""],
    ['img' => "img/mailman.jpg",
      'title' => "Mailman",
      'desc' => "Gestion des listes de diffusion : inscription, dés-inscription, archive",
      'linkSite' => "https://mailing.hatlab.fr",
      'linkDetails' => ""],
    ['img' => "img/fusiondirectory.jpg",
      'title' => "Fusion Directory",
      'desc' => "Gestion de son compte Hatlab",
      'linkSite' => "https://fusion.hatlab.fr",
      'linkDetails' => ""],
    ];
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">Association Hatlab</a>
<!--        <ul class="right hide-on-med-and-down">-->
<!--          <li><a href="#">Navbar Link</a></li>-->
<!--        </ul>-->
<!---->
<!--        <ul id="nav-mobile" class="side-nav">-->
<!--          <li><a href="#">Navbar Link</a></li>-->
<!--        </ul>-->
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>

    <div class="container">
      <div class="section">

        <h3>Liste des sites et services IT à disposition des adhérent⋅e⋅s et du Conseil d'Administration pour le fonctionnement de l'association</h3>

        <p>Cliquer sur <i class="material-icons">more_vert</i> pour plus d'information ou sur le lien "SITE" pour vous y rendre. </p>
        <!--   Icon Section   -->
        <div class="row">
          <?php foreach($listServices as $serv) {
            ?>
          <div class="col s12 m3">
            <div class="card medium hoverable">
              <div class="card-image">
                <img src="<?php echo $serv['img'] ?>">
              </div>
              <div class="card-content">
                <span class="card-title activator"><?php echo $serv['title'] ?><i class="material-icons right">more_vert</i></span>
                <p><?php echo $serv['desc'] ?></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?php echo $serv['title']?><i class="material-icons right">close</i></span>
                <p><?php echo $serv['desc'] ?></p>
              </div>
              <div class="card-action">
                <a href="<?php echo $serv['linkSite'] ?>">Site</a>
                <?php if($serv['linkDetails'] !== "") {?>
                  <a href="<?php echo $serv['linkDetails'] ?>">Détails</a>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php
          }
          ?>



        </div>

      </div>
      <br><br>
    </div>

    <footer class="page-footer orange">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Services Hatlab</h5>
            <p class="grey-text text-lighten-4">Cette page liste les services IT disponibles aux adhérent⋅e⋅s du Hatlab. </p>


          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          Fait par Sébastien Touzé avec <3 pour le Hatlab design et style basé sur <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
      </div>
    </footer>




    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>