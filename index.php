<?php 

if (!isset($root)) {
  $root = '';
}

 ?>
<!doctype html>
<html lang="fr">

  <head>
    <meta charset="utf-8">

    <title>YaJUG 2015: CSS</title>

    <meta name="description" content="Présentation au YaJUG Luxembourg, 21 avril 2015">
    <meta name="author" content="Vincent De Oliveira">
    <link rel="icon" href="http://iamvdo.me/images/favicon.png"/>

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400' rel='stylesheet'>

    <link rel="stylesheet" href="<?php echo $root; ?>css/reveal.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>plugin/prismjs/prism.css">
    <link rel="stylesheet" href="<?php echo $root; ?>iamvdo/theme.css" id="theme">
    <link rel="stylesheet" href="<?php echo $root; ?>iamvdo/meetup.css">
    <link rel="stylesheet" href="<?php echo $root; ?>plugin/nav/nav.css">

    <!-- If the query includes 'print-pdf', include the PDF print sheet -->
    <script>
      if( window.location.search.match( /print-pdf/gi ) ) {
        var link = document.createElement( 'link' );
        link.rel = 'stylesheet';
        link.type = 'text/css';
        link.href = '<?php echo $root; ?>css/print/pdf.css';
        document.getElementsByTagName( 'head' )[0].appendChild( link );
      }
    </script>

    <!--[if lt IE 9]>
    <script src="lib/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body class="language-css">

    <div class="reveal iamvdo">

      <!-- Any section element inside of this container is displayed as a slide -->
      <div class="slides">
        <section>
          <h1>#CSS</h1>
          <h2>Des bases de CSS2.1 aux fonctionnalités avancées de CSS3</h2>
          <p class="u-aligncenter u-small u-margin">
            Vincent De Oliveira &middot; <a href="http://twitter.com/iamvdo">@iamvdo</a>
          </p>
        </section>

        <section class="me">
          <h2>Vincent De Oliveira</h2>
          <ul class="vcard">
            <li>Formateur web indépendant</li>
            <li><a href="http://www.ensg.eu" title="Ecole Nationale des Sciences Géographiques">ENSG Géomatique</a>, <a href="http://webschoolfactory.com">WebSchoolFactory</a></li>
            <li><a href="http://twitter.com/iamvdo">@iamvdo</a></li>
            <li><a href="http://css3create.com">CSS3Create</a>, <a href="http://iamvdo.me">iamvdo</a>, <a href="http://pleeease.io">Pleeease</a></li>
            <li>Livre <a href="http://livre-css3.fr">CSS3 Le design web moderne</a></li>
          </ul>
        </section>

        <section data-state="part">
          <h1>Bref historique</h1>
        </section>

        <section data-background="url(iamvdo/images/arbre1.jpg) center" data-background-size="cover">
        </section>

        <section>
          <h2>CSS1</h2>
          <ul>
              <li>Recommandation en 1996</li>
              <li>Sélecteurs simples, positionnements basiques, tailles, marges, couleurs, polices, etc.</li>
          </ul>
        </section>

        <section>
          <h2>CSS2 et CSS2.1</h2>
          <ul>
              <li>Abandonnée en 1998</li>
              <li>Trop de choses, trop complexes ou sous-spécifiées
              <li>Pseudo-classes dynamiques, pseudo-éléments, polices personnalisées, gestion des médias, ombres sur les textes, etc.</li>
          </ul>
          <ul class="fragment">
              <li>CSS 2.1: version "corrigée" de CSS2, ce qui a été retiré est mis à l'étude dans CSS3</li> 
              <li>Recommandation en juin 2011</li>
          </ul>
        </section>

        <section>
          <h2>CSS3</h2>
          <ul>
              <li>En cours depuis 1999</li>
              <li>Standard fragmenté en modules</li>
              <li>3 modules en Recommandation, une trentaine à l'étude</li>
          </ul>
          <ul class="fragment">
            <li><a href="http://www.xanthir.com/b4Ko0">CSS4 ne verra jamais le jour…</a></li>
            <li>Des modules en L4, d'autres en L1</li>
          </ul>
        </section>

        <section>
          <h2>Démocratisation de CSS3</h2>
          <p>Pourquoi entends t'on beaucoup parler de CSS3?</p>
          <ul>
            <li class="fragment">Meilleur ami de HTML5</li>
            <li class="fragment">Sélecteurs étoffés</li>
            <li class="fragment">Effets graphiques simplifiés: opacité, angles arrondis, ombres, dégradés, polices personnalisées, etc. (maintenance++)</li>
            <li class="fragment">Accès à ce qui était réservé avant à JavaScript (interaction, animation, etc.)</li>
            <li class="fragment">Nouveaux modes de positionnement</li>
          </ul>
          <ul>
            <li class="fragment">Mise à jour auto. des navigateurs</li>
            <li class="fragment">Support amélioré de CSS2.1</li>
            <li class="fragment">Fin de IE6, IE7, IE8</li>
          </ul>
        </section>

        <section>
          <h2>Utiliser CSS3</h2>
          <ul>
            <li class="fragment">Connaitre le support navigateur</li>
            <li class="fragment">Conserver la <strong>dégradation gracieuse</strong></li>
            <li class="fragment">Mettre en place l'<strong>amélioration progressive</strong></li>
          </ul>
          <p class="fragment left">Pour cela:</p>
          <ul>
            <li class="fragment">Ne rien faire</li>
            <li class="fragment">Utilisation des préfixes CSS</li>
            <li class="fragment">Utilisation de styles alternatifs, via la cascade CSS</li>
            <li class="fragment">Détection de fonctionnalités (CSS ou JS)</li>
          </ul>
          <p class="fragment">De nombreux outils existent…</p>
        </section>

        <section>
          <h2>Mais c'est quoi au fait ?</h2>
          <ul>
            <li class="fragment">Cascading Style Sheets: feuilles de styles en cascade</li>
            <li class="fragment">Le design d'un site (mise ne forme)</li>
            <li class="fragment">Langage de description</li>
            <li class="fragment">Très (trop?) simple</li>
          </ul>
<pre class="fragment"><code class="css" contenteditable spellcheck="false">.selector {
  color: blue;
  font-size: 2em;
}</code></pre>
          <ul>
            <li class="fragment">Un style :
              <ul>
                <li class="fragment">Un sélecteur</li>
                <li class="fragment">Des règles</li>
              </ul>
            </li>
          </ul>
        </section>

        <section data-state="part">
          <h1>Les sélecteurs</h1>
        </section>

        <section>
          <h2>Les sélecteurs CSS1, 2.1 et 3</h2>
          <ul>
            <li class="fragment">Plus de 40 sélecteurs</li>
            <li class="fragment">Parcourir le DOM</li>
            <li class="fragment">Cibler les éléments</li>
          </ul>
          <ul>
            <li class="fragment">Sélecteur :
              <ul>
                <li class="fragment">d'éléments (<code>E</code>)</li>
                <li class="fragment">d'enfants (<code>E F</code>, <code>E > F</code>)</li>
                <li class="fragment">de frères suivants (<code>E + F</code>, <code>E ~ F</code>)</li>
                <li class="fragment">d'id (<code>E#id</code>) et de classe (<code>E.class</code>)</li>
                <li class="fragment">pseudo-classes (<code>E:first-child</code>, <code>E:last-child</code>...)</li>
                <li class="fragment">pseudo-classes dynamiques (<code>E:hover</code>, <code>E:focus</code>, <code>E:active</code>...)</li>
                <li class="fragment">pseudo-éléments (<code>E::first-letter</code>, <code>E::after</code>, <code>E::before</code>...)</li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>Les sélecteurs d'attributs</h2>
          <ul>
            <li>Cibler des éléments en fonction de leur attributs (et de leurs valeurs), mêmes les <em>data-attributes</em> de HTML5</li>
            <li class="fragment"><code>[attr]</code>, <code>[attr=val]</code>, <code>[attr~=val]</code></li>
            <li class="fragment"><code>[attr^=abc]</code>: commençant par</li>
            <li class="fragment"><code>[attr$=abc]</code>: finissant par</li>
            <li class="fragment"><code>[attr*=abc]</code>: contient</li>
          </ul>
        </section>

        <section data-state="showcase">
          <article class="demo">
            <style>
            #e1 {
              margin: 50px 0;
            }
            #e1 h1 {
              background: none;
              font-size: 1.1em;
            }
            #e1 p {
              font-size: .7em;
              text-align: left;
            }
            #e1 abbr {
              border-bottom: 1px dashed deepskyblue;
            }
            #e1 a {
              color: deepskyblue;
            }
            </style>
            <div>
<pre class="small"><code class="liveCoding css" data-livecoding-id="e1" contenteditable="" spellcheck="false">/* CSS */
a {
  color: deepskyblue;
}
</code></pre>
            </div>
            <div id="e1">
              <h1>Le livre «CSS3 Le design web moderne»</h1>
              <p>La <a href="http://fr.wikipedia.org/wiki/Feuilles_de_style_en_cascade">maîtrise de CSS</a> est un atout majeur dans la réalisation d’un design web moderne et innovant. Indissociable d’<abbr title="HyperText Markup Language">HTML5</abbr>, <a href="http://css3create.com">CSS3 étend les capacités du langage</a> en vous offrant des possibilités jusque là inédites.</p>
              <p>Que vous soyez webdesigner, développeur ou amateur éclairé, vous trouverez dans <a href="http://livre-css3.fr">ce livre</a>, au travers d’exemples précis, une méthodologie efficace pour mettre en application <abbr title="Cascading Style Sheet">CSS3</abbr> sur vos sites web dès aujourd’hui.</p>
              <p>Vous découvrirez les <a href="#">nouveaux modèles de positionnement</a> permettant des mises en pages évoluées ainsi que les nouveautés en matière de <a href="#">typographie</a>. Sans utiliser d’images, vous pourrez ajouter des ombres, <a href="#">réaliser des coins arrondis</a>, des effets de transparence et des dégradés complexes. Vos sites deviendront plus attractifs grâce à l’ajout <a href="#">d’animations</a>, de <a href="#">transformations en 2D et en 3D</a>. Vous créerez des applications mobiles performantes avec <a href="#">la gestion précise des médias alternatifs</a>, tels que les smartphones et tablettes.</p>
              <p>Pendant la lecture de l'ouvrage, retrouvez tous les exemples sur <a href="http://livre-css3.fr/bugdroid">le site de démonstration dédié</a>.</p>
            </div>
          </article>
        </section>

        <section>
          <h2>La pseudo-classe <code>:nth-child()</code></h2>
          <ul>
            <li>Cible le n<sup>ième</sup> enfant d'un élément
              <ul>
                <li class="fragment"><code>:nth-child(3)</code> cible le 3e enfant</li>
                <li class="fragment"><code>:nth-child(an+b)</code> ou <var>a</var> et <var>b</var> sont des entiers</li>
              </ul>
            </li>
            <li class="fragment">Ex: <code>:nth-child(3n+2)</code>, pour chaque entier positif de <var>n</var> :
              <ul>
                <li>n=0, total= 2</li>
                <li>n=1, total= 5</li>
                <li>n=2, total= 8</li>
                <li>Les 2e, 5e et 8e enfants sont sélectionnés</li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>La pseudo-classe <code>:nth-child()</code></h2>
          <article>
            <div>
            <style>
            #e2 li {
              color: black;
            }
            </style>
<pre class="small"><code class="liveCoding language-markup" data-livecoding-id="e2" contenteditable spellcheck="false">&lt;ul>
  &lt;li>Item 1&lt;/li>
  &lt;li>Item 2&lt;/li>
  &lt;li>Item 3&lt;/li>
  &lt;li>Item 4&lt;/li>
  &lt;li>Item 5&lt;/li>
  &lt;li>Item 6&lt;/li>
  &lt;li>Item 7&lt;/li>
  &lt;li>Item 8&lt;/li>
  &lt;li>Item 9&lt;/li>
  &lt;li>Item 10&lt;/li>
&lt;/ul></code></pre>
<pre class="small"><code class="liveCoding" data-livecoding-id="e2" contenteditable spellcheck="false">ul li:nth-child(3n+2) {
   color: white;
}</code></pre>
            </div>
            <div id="e2">
              <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
                <li>Item 4</li>
                <li>Item 5</li>
                <li>Item 6</li>
                <li>Item 7</li>
                <li>Item 8</li>
                <li>Item 9</li>
                <li>Item 10</li>
              </ul>
            </div>
          </article>
        </section>

        <section>
          <h2>La pseudo-classe <code>:nth-child()</code></h2>
          <ul>
            <li>Se décline:
              <ul>
                <li class="fragment"><code>:nth-last-child()</code></li>
                <li class="fragment"><code>:nth-of-type()</code>, <code>:nth-last-of-type()</code></li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>La pseudo-classe <code>:not()</code></h2>
          <ul>
            <li><code>:not()</code> permet de retirer un sélecteur simple:
              <ul>
                <li class="fragment"><code>div:not(.toto)</code></li>
                <li class="fragment"><code>ul li a:not(:hover)</code></li>
                <li class="fragment"><code>.toto:not(p)</code></li>
                <li class="fragment"><code>a:not([href^=http])</code></li>
              </ul>
            </li>
            <li class="fragment">Pas de sélecteur avancé
              <ul>
                <li><code>:not(div p)</code> est invalide</li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>Les pseudo-classes de <code>formulaires</code></h2>
          <ul>
              <li class="fragment"><code>:enabled</code>, <code>:disabled</code></li>
              <li class="fragment"><code>:valid</code>, <code>:invalid</code></li>
              <li class="fragment"><code>:checked</code></li>
          </ul>
          <article class="demo fragment">
            <style>
            #e3 {
              text-align: center;
            }
            #e3 p {
              display: inline-block;
              margin: 0 .5em;
            }
            #e3 label {
              color: black;
            }
            </style>
            <div>
<pre><code class="liveCoding" data-livecoding-id="e3" contenteditable spellcheck="false">input {
  vertical-align: middle;
}
input:checked + label {
  color: white;
}</code></pre>
            </div>
            <div id="e3">
              <p><input type="checkbox" id="ch1" /><label for="ch1">Checkbox 1</label></p>
              <p><input type="checkbox" id="ch2" /><label for="ch2">Checkbox 2</label></p>
              <p><input type="checkbox" id="ch3" /><label for="ch3">Checkbox 3</label></p>
            </div>
          </article>
        </section>

        <section data-state="part">
          <h1>Effets graphiques</h1>
        </section>

        <section class="questions questions--jdcjdr" data-state="jdcjdr">
          <p class="questions-titre questions-titre--big">CSS = Design</p>
        </section>

        <section>
          <h2>Les coins arrondis</h2>
<pre class="syntax"><code>border-radius: 10px;</code></pre>
          <ul>
            <li class="fragment">Crée des coins arrondis</li>
            <li class="fragment">Chaque angle peut avoir son propre arrondi
              <ul>
                <li>ex: <code>border-radius: 0 10px 2px 20px;</code></li>
              </ul>
            </li>
            <li class="fragment">Accepte les pourcentages (par rapport à la boite elle-même)
              <ul>
                <li>ex: <code>border-radius: 50%;</code> crée un rond</li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>Les ombres</h2>
<pre class="syntax"><code>text-shadow: 2px 2px 5px black;</code></pre>
          <ul>
            <li class="fragment">Ajoute une (ou plusieurs) ombre(s) sur le texte</li>
          </ul>
<pre class="syntax fragment"><code>box-shadow: 2px 2px 5px (5px) black (inset);</code></pre>
          <ul>
            <li class="fragment">Ajoute une (ou plusieurs) ombre(s) sur une boite</li>
            <li class="fragment">L'ombre peut être interne: <code>inset</code></li>
            <li class="fragment">L'ombre peut être plus grande ou plus petite (4<sup>ème</sup> valeur numérique)</li>
          </ul>
        </section>

        <section>
          <h2>Les dégradés</h2>
<pre class="syntax fragment"><code>background: linear-gradient(to left, red, green);</code></pre>
          <ul>
            <li class="fragment">Crée un dégradé linéaire</li>
            <li class="fragment">La direction est optionnelle. La valeur par défaut est <code>to bottom</code></li>
            <li class="fragment">Nombre de couleurs "illimité"</li>
            <li class="fragment">Positionnement des color-stops automatiques/manuels</li>
            <li class="fragment">Existe les dégradés radiaux</li>
          </ul>
        </section>

        <section>
          <h2>La transparence</h2>
<pre class="syntax fragment"><code>background: rgb(235, 162, 53);
opacity: .5;</code></pre>
          <ul>
            <li class="fragment">Rends l'élément transparent (et tous les enfants)</li>
          </ul>
<pre class="syntax fragment"><code>background: rgba(235, 162, 53, .5);</code></pre>
          <ul>
            <li class="fragment">Rends la couleur appliquée transparente</li>
            <li class="fragment">Extension de <code>rgb(r,v,b)</code> avec l'alpha</li>
            <li class="fragment">Existe également <code>hsl(t,s,l)</code> et <code>hsla(t,s,l,a)</code></li>
            <li class="fragment">Pensez à la dégradation gracieuse</li>
          </ul>
        </section>

        <section>
          <h2>Menu de navigation</h2>
          <iframe src="iamvdo/demos/menu.html" width="100%"></iframe>
        </section>

        <section data-state="part">
          <h1>Animations</h1>
        </section>

        <section class="questions questions--jdcjdr" data-state="jdcjdr">
          <p class="questions-titre questions-titre--big">CSS ~= Motion Design</p>
        </section>

        <section>
          <h2>Animez simplement: les transitions</h2>
          <ul>
            <li class="fragment">C'est quoi une transition?</li>
          </ul>
          <ul>
            <li class="fragment">Animer une propriété <strong>d'une valeur A à une valeur B</strong>
              <ul>
                <li class="fragment">Par exemple de <code>color: red</code> à <code>color: green</code></li>
              </ul>
            </li>
            <li class="fragment">Effectuée lors d'un changement d'état
              <ul>
                <li class="fragment">Pour cela, besoin d'un <strong>déclencheur</strong></li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>Déclencheurs</h2>
          <ul>
            <li class="fragment">Utilisation de pseudo-classes (<code>:hover</code>, <code>:focus</code>, etc.)</li>
            <li class="fragment">Modification via JavaScript (ajout de classe, etc.)</li>
            <li class="fragment">Chargement de la page (?)</li>
          </ul>
        </section>

        <section>
          <h2>Utilisation</h2>
<pre class="syntax fragment"><code>transition: width 2s ease;</code></pre>
          <ul>
            <li class="fragment">5 propriétés:
              <ul>
                <li class="fragment"><code>transition</code>: propriété raccourcie</li>
                <li class="fragment"><code>transition-property</code>: propriété à animer</li>
                <li class="fragment"><code>transition-duration</code>: durée de la transition</li>
                <li class="fragment"><code>transition-delay</code>: retardement de la transition</li>
                <li class="fragment"><code>transition-timing-function</code>: méthode d'interpolation</li>
              </ul>
            </li>
          </ul>
        </section>

        <section data-state="showcase">
          <article class="demo">
            <style>
            #t0 .element {
              margin: 100px auto;
              padding: 50px;
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="t0" contenteditable spellcheck="false">.element {
  width: 200px; /* etat initial */
  height: 150px;
  background: orangered;
}
.element:hover {
  
}
</code></pre>
            </div>
            <div id="t0">
              <div class="element">
                <p>Je suis un élément de la page</p>
              </div>
            </div>
          </article>
        </section>

        <section>
          <h2>L'accélération</h2>
          <ul>
            <li class="fragment">Contrôle de la vitesse de l'animation dans le temps</li>
            <li class="fragment">Propriété <code>transition-timing-function</code></li>
          </ul>
          <img class="fragment" src="iamvdo/images/trTimingFn.png" alt="Methode d'interpolation des transitions CSS" />
          <ul>
            <li class="fragment">5 méthodes:
              <ul>
                <li class="fragment"><code>linear</code>: linéaire</li>
                <li class="fragment"><code>ease</code>: départ rapide, arrivée lente (défaut)</li>
                <li class="fragment"><code>ease-in</code>: départ lent</li>
                <li class="fragment"><code>ease-out</code>: arrivée lente</li>
                <li class="fragment"><code>ease-in-out</code>: départ lent, arrivée lente</li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>Interpolation avancée</h2>
          <ul>
            <li class="fragment">La fonction <code>cubic-bezier()</code>
            <li class="fragment">Définit une courbe de Bézier avec 2 points</li>
            <li class="fragment"><code>cubic-bezier(p1x, p1y, p2x, p2y)</code></li>
          </ul>
          <img class="fragment" src="iamvdo/images/trCubic.png" alt="Courbe de bezier pour les transitions CSS" />
          <ul>
            <li class="fragment">Aide: <a href="http://cubic-bezier.com">cubic-bezier.com</a></li>
          </ul>
        </section>

        <section data-state="showcase">
          <article class="demo">
            <style>
            #t2 .parent {
              margin: 100px 0;
            }
            #t2 .element {
              margin: 20px;
              padding: 10px;
              width: 200px;
              height: 50px;
              background: orangered;
              white-space: nowrap;
            }
            #t2 .parent:hover .element {
              margin-left: calc(100% - 200px - 20px - 20px);
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="t2" contenteditable spellcheck="false">.element {
  transition: margin-left 2s;
}
.element--un {
  /* defaut: ease */
}
.element--deux {
  transition-timing-function: ease;
}
</code></pre>
            </div>
            <div id="t2">
              <div class="parent">
                <div class="element element--un">
                  <p>Element 1</p>
                </div>
                <div class="element element--deux">
                  <p>Element 2</p>
                </div>
              </div>
            </div>
          </article>
        </section>

        <section data-state="showcase">
          <h2>Menu de navigation</h2>
          <iframe src="iamvdo/demos/transitions.html" width="100%"></iframe>
        </section>

        <section data-state="showcase">
          <h2>Histogramme</h2>
          <iframe src="iamvdo/demos/histogramme.html" width="100%" height="400"></iframe>
        </section>

        <section>
          <h2>Animez plusieurs états: les animations</h2>
          <ul>
            <li class="fragment">C'est quoi une animation?</li>
          </ul>
          <ul>
            <li class="fragment">Plusieurs transitions qui s'enchainent</li>
            <li class="fragment">Animer une propriété <strong>d'une valeur A à une valeur B, puis de B à C, ...</strong>
              <ul>
                <li class="fragment">Par exemple de <code>color: red</code> à <code>color: green</code> puis vers <code>color: blue</code></li>
              </ul>
            </li>
            <li class="fragment">Chaque transition est définie sour forme d'étapes</li>
            <li class="fragment">2 actions nécessaires
              <ul>
                <li class="fragment">Création des étapes-clés</li>
                <li class="fragment">Utilisation de l'animation créée</li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>Création des étapes-clés</h2>
<pre class="syntax fragment"><code>@keyframes nomAnim {
  from { color: red   }
  40%  { color: green }
  to   { color: blue  }
}</code></pre>
          <ul>
            <li class="fragment">Définit 3 étapes, soit 2 transitions:
              <ul>
                <li class="fragment">de 0 à 40%: de <code>color: red</code> à <code>color: green</code></li>
                <li class="fragment">de 40% à 100%: de <code>color: green</code> à <code>color: blue</code></li>
              </ul>
            </li>
            <li class="fragment">Revient à l'état initial une fois l'animation terminée</li>
          </ul>
        </section>

        <section>
          <h2>Utilisation</h2>
<pre class="syntax fragment"><code>animation: nomAnim 2s ease 5;</code></pre>
          <ul>
            <li class="fragment">6 propriétés:
              <ul>
                <li class="fragment"><code>animation</code>: propriété raccourcie</li>
                <li class="fragment"><code>animation-name</code>: nom de l'animation utilisée</li>
                <li class="fragment"><code>animation-duration</code>: durée de l'animation</li>
                <li class="fragment"><code>animation-delay</code>: retardement de l'animation</li>
                <li class="fragment"><code>animation-timing-function</code>: méthode d'interpolation</li>
                <li class="fragment"><code>animation-iteration-count</code>: nombre de répétition</li>
              </ul>
            </li>
          </ul>
        </section>

        <section data-state="showcase">
          <h2>Apparitions</h2>
          <iframe src="iamvdo/demos/chargement.html" width="100%" height="500"></iframe>
        </section>

        <section data-state="showcase">
          <h2>Formulaire animé</h2>
          <iframe src="iamvdo/demos/animations.html" width="100%" height="500"></iframe>
        </section>

        <section data-state="part">
          <h1>Back to the CSS</h1>
        </section>

        <section data-background="url(iamvdo/images/arbre2.jpg) center" data-background-size="cover">
        </section>

        <section>
          <h2>CSS, c'est simple!</h2>
          <ul>
            <li>Hum...</li>
            <li>Pourtant, on est tous passé par là:</li>
          </ul>
<pre style="height: auto"><code class="css" contenteditable spellcheck="false" style="height: auto; max-height:400px">.element{
  padding: 15px;
  width: 98.32%; /* pas compris, mais ça déborde à 98.33% */
  position: relative; /* faut pas enlever */
  overflow: hidden; /* ça non plus, tout foire sinon */
  z-index: 9875687; /* p***, ça veut pas passer au-dessus! */
}</code></pre>
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><code><strong>&lt;td></strong>CSS sucks<strong>&lt;/td></strong></code></p>
        </section>

        <section data-state="part">
          <h1>Le concept de CSS</h1>
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><q>Les feuilles de styles <span>proviennent d'une source unique</span>: nous!</q></p>
          <p class="questions-faux fragment">FAUX</p>
        </section>

        <section>
          <h2>La cascade CSS</h2>
          <ul>
            <li>CSS: Feuilles de styles en cascade</li>
            <li class="fragment">Différentes origines:
              <ul>
                <li class="fragment">Author (les devs CSS)</li>
                <li class="fragment">User (les gens)</li>
                <li class="fragment">UA (les navigateurs) + réglages navigateur du user</li>
              </ul>
            <li class="fragment">La cascade CSS applique un poids à chaque déclaration</li>
          </ul>
        </section>

        <section>
          <h2>La cascade CSS (ordre)</h2>
          <ul>
            <li>4 étapes pour les styles:
              <ol>
                <li class="fragment">Récupére toutes les déclarations CSS (pour le média cible)</li>
                <li class="fragment">Tri suivant cet ordre:
                  <ul>
                    <li>UA ▸ User ▸ Author ▸ Author !important ▸ User !important</li>
                  </ul>
                </li>
                <li class="fragment">Tri par <strong>spécificité des sélecteurs CSS</strong></li>
                <li class="fragment">Enfin, tri par position dans le CSS (ordre du code)</li>
              </ol>
            </li>
          </ul>
        </section>

        <section>
          <h2>Spécificité des sélecteurs</h2>
          <ul>
            <li>3 valeurs:
              <ul>
                <li class="fragment"><strong>A</strong> ▸ Nombre d'<code>id</code></li>
                <li class="fragment"><strong>B</strong> ▸ Nombre de <code>class</code>, pseudo-classes, d'attributs</li>
                <li class="fragment"><strong>C</strong> ▸ Nombre d'éléments, pseudo-éléments</li>
              </ul>
            </li>
            <li class="fragment">Exemples:
              <ul>
                <li class="fragment"><code>#toto</code> <span class="right">1,0,0</span></li>
                <li class="fragment"><code>.inner ul li</code> <span class="right">0,1,2</span></li>
                <li class="fragment"><code>a:hover</code> <span class="right">0,1,1</span></li>
              </ul>
            </li>
            <li class="fragment">Styles inline, <code>!important</code></li>
            <li class="fragment">Cas particulier <code>:not()</code></li>
          </ul>
        </section>

        <section class="questions questions--jdcjdr" data-state="jdcjdr">
          <p class="questions-titre">Pour cibler un identifiant sans donner plus de spécificité, utilisez le sélecteur d'attribut.</p>
          <p class="questions-titre fragment"><code>[id=toto]</code> est identique à <code>#toto</code>, mais avec la même spécificité qu'une <code>class</code>.</p>
        </section>

        <section class="questions questions--jdcjdr" data-state="jdcjdr">
          <p class="questions-titre">Pour augmenter la spécificité d'une classe, vous pouvez la doubler. Pas besoin d'en ajouter.</p>
          <p class="questions-titre fragment"><code>.class.class { }</code></p>
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><q>La valeur définie pour une propriété CSS est celle <span>utilisée pour le rendu de la page</span></q></p>
          <p class="questions-faux fragment">FAUX</p>
        </section>

        <section>
          <h2>Les valeurs CSS*</h2>
          <ul>
            <li>Une valeur passe par 4 étapes:
              <ul>
                <li class="fragment"><strong>Specified value</strong>
                  <ul>
                    <li>Valeur spécifiée en CSS</li>
                    <li>OU valeur héritée de son parent</li>
                    <li>OU valeur initiale de la propriété</li>
                  </ul>
                </li>
                <li class="fragment"><strong>Computed value</strong>
                  <ul>
                    <li>Valeur calculée (avant rendu)</li>
                    <li>+ quelques approximations</li>
                    <li>ex: URL relative ▸ URL absolue, red ▸ rgb(255,0,0), 1.5px ▸ 1px</li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <p class="info">* De toute façon, ce qui compte c'est les valeurs (Perceval, Kaamelott)</p>
        </section>

        <section>
          <h2>Les valeurs CSS*</h2>
          <ul>
            <li>Une valeur passe par 4 étapes:
              <ul>
                <li class="fragment"><strong>Used value</strong>
                  <ul>
                    <li>Valeur calculée + dépendances (pendant le rendu)</li>
                    <li>ex: em/rem ▸ px, width: 50% (en fonction de son parent)</li>
                    <li>Récupéree en JS avec <code>window.getComputedStyle(e)</code></li>
                  </ul>
                </li>
                <li class="fragment"><strong>Actual value</strong>
                  <ul>
                    <li>Valeur réellement utilisée, approximation de l’UA</li>
                    <li>ex: bordure de 1.5px, <code>rgb(255,0,0)</code> sur écran noir&blanc, etc.</li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <p class="info">* De toute façon, ce qui compte c'est les valeurs (Perceval, Kaamelott)</p>
        </section>

        <section class="questions questions--jdcjdr" data-state="jdcjdr">
          <p class="questions-titre">La valeur calculée du mot-clé <code>transparent</code> pour les couleurs est <code>rgba(0,0,0,0)</code>, soit du noir transparent.</p>
        </section>

        <section data-state="part">
          <h1>Positionnement CSS</h1>
        </section>

        <section>
          <h2>Les différentes «méthodes»</h2>
          <ul>
            <li class="fragment">La propriété <code>display</code>
              <ul>
                <li class="fragment"><code>block</code>, <code>inline</code>, <code>list-item</code></li>
                <li class="fragment"><code>inline-block</code></li>
                <li class="fragment"><code>table</code>, <code>table-row</code>, <code>table-cell</code>...</li>
              </ul>
            </li>
            <li class="fragment">La propriété <code>float</code>
              <ul>
                <li class="fragment"><code>left</code>, <code>right</code></li>
              </ul>
            </li>
            <li class="fragment">La propriété <code>position</code>
              <ul>
                <li class="fragment"><code>relative</code>, <code>absolute</code>, <code>fixed</code>, <code>sticky</code></li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2><code>display: inline-block</code></h2>
          <ul>
            <li class="fragment">Mode «hybride»</li>
            <li class="fragment">Éléments en ligne, mais conserve les propriétés de block (dimensionnement, marges, etc.)</li>
            <li class="fragment">Alignables entre eux avec <code>vertical-align</code></li>
          </ul>
        </section>

        <section>
          <h2>Démo: inline-block</h2>
          <article class="demo">
            <style>
            #dib1 .parent {
            }
            #dib1 .enfant {
              text-align: left;
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="dib1" contenteditable spellcheck="false">.parent {
  
}
.enfant {
  
}</code></pre>
            </div>
            <div id="dib1">
              <ul class="parent">
                <li class="enfant">Home</li>
                <li class="enfant">Portfolio</li>
                <li class="enfant">News</li>
                <li class="enfant">Contact</li>
              </ul>
            </div>
          </article>
        </section>

        <section>
          <h2><code>display: table</code></h2>
          <ul>
            <li class="fragment">Mode tabulaire
              <ul>
                <li class="fragment"><code>display: table</code> simule un tableau (<code>&lt;table></code>)</li>
                <li class="fragment"><code>display: table-row</code> simule une ligne de tableau (<code>&lt;tr></code>)</li>
                <li class="fragment"><code>display: table-cell</code> simule une cellule de tableau (<code>&lt;td></code>)</li>
              </ul>
            </li>
            <li class="fragment">Toute la structure n'est pas obligatoire (création d'éléments anonymes)</li>
            <li class="fragment"><code>table-layout</code> modifie le calcul d'affichage du tableau
              <ul>
                <li class="fragment"><code>auto</code> la taille du tableau s'adapte au contenu</li>
                <li class="fragment"><code>fixed</code> le contenu s'adapte à la taille du tableau</li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>Les plus de <code>display: table</code></h2>
          <ul>
            <li class="fragment">Pas de sortie de flux</li>
            <li class="fragment">Éléments frères de même hauteur</li>
            <li class="fragment">Largeur étirable dans le tableau</li>
            <li class="fragment">Alignement vertical du contenu avec <code>vertical-align</code></li>
          </ul>
        </section>

        <section>
          <h2>Les moins de <code>display: table</code></h2>
          <ul>
            <li class="fragment">Pas de marges externes</li>
            <li class="fragment">Réorganisation des éléments difficile
              <ul>
                <li class="fragment">Possible (un peu) avec <code>table-header-group</code>, <code>table-footer-group</code></li>
              </ul>
            </li>
            <li class="fragment"><a href="http://iamvdo.me/blog/imbrication-de-boites-en-css-avec-display-table">Imbrication plus complexe</a></li>
          </ul>
        </section>

        <section>
          <h2>Démo: table layout</h2>
          <article class="demo">
            <style>
            #dt1 .parent {
            }
            #dt1 .enfant {
              text-align: left;
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="dt1" contenteditable spellcheck="false">.parent {
  background: yellowgreen;
}
.enfant {
  
}</code></pre>
            </div>
            <div id="dt1">
              <ul class="parent">
                <li class="enfant">Le premier élément</li><li class="enfant">Le second élément est plus long</li><li class="enfant">Un autre élément</li><li class="enfant">Le dernier élément est vraiment beaucoup plus long que les autres</li>
              </ul>
            </div>
          </article>
        </section>

        <section>
          <h2><code>position</code></h2>
          <ul>
            <li class="fragment">Sort les éléments du flux de la page</li>
            <li class="fragment">Permet les superpositions d'éléments</li>
            <li class="fragment">Proche de la gestion de calque</li>
          </ul>
          <ul>
            <li class="fragment"><code>position: absolute</code>, <code>position: fixed</code></li>
            <li class="fragment"><code>position: relative</code> définit l'origine des éléments positionnés inclus</li>
          </ul>
          <ul>
            <li class="fragment">Positionnés ensuite avec <code>top</code>, <code>left</code>, <code>right</code> et <code>bottom</code></li>
            <li class="fragment">Empilement avec <code>z-index</code></li>
          </ul>
        </section>

        <section>
          <h2>Démo: position</h2>
          <article class="demo">
            <style>
            #p1 .parent {
            }
            #p1 .enfant {
              text-align: left;
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="p1" contenteditable spellcheck="false">.parent {
  background: yellowgreen;
}
.enfant {
  
}</code></pre>
            </div>
            <div id="p1">
              <ul class="parent">
                <li class="enfant">Le premier élément</li><li class="enfant">Le second élément est plus long</li><li class="enfant">Un autre élément</li><li class="enfant">Le dernier élément est vraiment beaucoup plus long que les autres</li>
              </ul>
            </div>
          </article>
        </section>

        <section data-state="part">
          <h1>Le box model CSS</h1>
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><q><code>width</code> définit la <span>largeur totale</span> d'un élément</q></p>
          <p class="questions-faux fragment">FAUX</p>
        </section>

        <section>
          <h2>Le modèle de boite</h2>
          <ul>
            <li>Le box model en CSS2.1
              <ul>
                <li class="fragment"><code>width</code> est la largeur du contenu</li>
                <li class="fragment">largeur totale = <code>width</code> + <code>padding</code> + <code>border</code></li>
              </ul>
              <img class="fragment" src="<?php echo $root; ?>iamvdo/images/modeleBoite.jpg" alt="Le modèle de boite en CSS2.1">
            </li>
          </ul>
        </section>

        <section>
          <h2>Le modèle de boite, en mieux!</h2>
          <ul>
            <li class="fragment"><code>box-sizing</code> modifie le calcul du modèle de boite
              <ul>
                <li><code>box-sizing: content-box</code>: modèle CSS2.1</li>
                <li><code>box-sizing: border-box</code>: modèle CSS3</li>
              </ul>
            </li>
            <li class="fragment"><code>width</code> devient la largeur totale</li>
          </ul>
          <img class="fragment" src="<?php echo $root; ?>iamvdo/images/boxsizing.jpg" alt="La propriété box-sizing en CSS3">
        </section>

        <section>
          <article class="demo">
            <style>
            #mb1 .parent {
              text-align: left;
            }
            #mb1 .enfant {
              margin: 20px 0;
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="mb1" contenteditable spellcheck="false">.parent {
  width: 1000px;
  background: yellowgreen;
}
.enfant {
  
}</code></pre>
            </div>
            <div id="mb1">
              <div class="parent">
                <div class="enfant">
                  <p>Je suis un élément de la page</p>
                </div><div class="enfant">
                  <p>Je suis un élément de la page</p>
                </div>
              </div>
            </div>
          </article>
        </section>

        <section class="questions questions--jdcjdr" data-state="jdcjdr">
          <p class="questions-titre"><code>* { box-sizing: border-box }</code></p>
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><q>La largeur d'un <em>block</em> est égale à <span>100% de la largeur de son parent</span></q></p>
          <p class="questions-faux fragment">FAUX</p>
        </section>

        <section>
          <h2>Calcul de la largeur d'un élément</h2>
          <ul>
            <li class="fragment">La valeur initiale de <code>width</code> est <code>auto</code> (pas 100%)</li>
            <li class="fragment">Attention donc aux <code>padding</code> et bordures!</li>
          </ul>
          <div class="fragment">
          <h3>float, inline-block</h3>
            <ul>
              <li>La largeur calculée est <em>shrink-to-fit</em></li>
              <li>La taille s'adapte au contenu.</li>
            </ul>
          </div>
          <div class="fragment">
          <h3>absolute, fixed</h3>
            <ul>
              <li>Dépend de <code>left</code> et <code>right</code>
                <ul>
                  <li>Si <code>auto</code> les deux: la largeur est <em>shrink-to-fit</em></li>
                  <li>Sinon, la largeur est calculée entre <code>left</code> et <code>right</code></li>
                </ul>
              </li>
            </ul>
          </div>
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><q>La largeur en % d’un élément <em>block</em> est toujours <span>calculée par rapport à celle de son parent</span></q></p>
          <p class="questions-faux fragment">FAUX</p>
        </section>

        <section>
          <h2>Le containing block</h2>
          <ul>
            <li class="fragment">La largeur dépend de la largeur de son <strong>containing block</strong>!</li>
            <li class="fragment">C'est quoi?
              <ul>
                <li class="fragment">Éléments en <code>position: static</code> (tous) ou <code>position: relative</code>: <strong>c'est le parent</strong></li>
                <li class="fragment">Éléments en <code>position: fixed</code>: <strong>c'est le viewport</strong> (ou la page)</li>
                <li class="fragment">Éléments en <code>position: absolute</code>: <strong>c'est le premier parent en <code>relative</code>, <code>absolute</code> ou <code>fixed</code></strong> (sinon le viewport)</li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>Le containing block en CSS3</h2>
          <ul>
            <li>De nouvelles règles:
              <ul class="fragment">
                <li><code>transform</code> != <code>none</code></li>
                <li><code>transform-style: preserve-3d</code></li>
                <li><code>perspective</code></li>
                <li><code>mask</code>, mais ne devrait pas</li>
                <li><code>will-change</code> dans certains cas</li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>Le containing block</h2>
          <article class="demo">
            <style>
            .parent {
              background: #333 !important;
            }
            .enfant {
              background: #ff0 !important;
              color: #333 !important;
            }
            #ex0 .parent {
              width: 400px;
              height: 150px;
              margin: auto;
              background: tomato;
            }
            #ex0 .enfant {
              background: deepskyblue;
            }
            </style>
            <div>
<pre class="small"><code class="liveCoding css" data-livecoding-id="ex0" contenteditable spellcheck="false">.parent {
  /* créer un containing block */
  
}
.enfant {
  /* mettre en absolute et fixez la largeur à 100% */
  
}</code></pre>
            </div>
            <div id="ex0">
              <div class="parent">
                <p>Je suis le parent</p>
                <p class="enfant">Je suis son enfant</p>
              </div>
            </div>
          </article>
        </section>

        <section data-state="part">
          <h1>Interactions avancées</h1>
        </section>

        <section data-background="url(iamvdo/images/arbre3.jpg) center" data-background-size="cover">
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><q>L’ordre d’affichage des éléments (code source) peut être modifié, <span>sans positionnement relatif, absolu ou fixe.</span></q></p>
          <p class="questions-vrai fragment">VRAI</p>
        </section>

        <section>
          <h2><code>display: table</code> & Co.</h2>
          <ul>
            <li class="fragment"><code>table-row-group</code> (groupe de lignes)</li>
            <li class="fragment"><code>table-header-group</code> (groupe de lignes d'entête)</li>
            <li class="fragment"><code>table-footer-group</code> (groupe de lignes de pied de page)</li>
            <li class="fragment">Très utiles pour réorganiser ses blocs (surtout en responsive) ▸ <a href="http://www.alsacreations.fr">Alsacreations.fr</a></li>
          </ul>
        </section>

        <section>
          <h2>Les valeurs de <code>display</code></h2>
          <article class="demo">
            <style>
            #ex0-5 {
              display: table;
              width: 100%;
              margin-top: 50px;
            }
            #ex0-5 .enfant{
              display: table-row;
            }
            #ex0-5 .header{
              background: #2ecc71 !important;
            }
            #ex0-5 .menu{
              background: deepskyblue !important;
            }
            #ex0-5 .contenu{
              background: deeppink !important;
            }
            #ex0-5 .footer{
              background: yellow;
            }
            </style>
            <div>
<pre class="small"><code class="liveCoding css" data-livecoding-id="ex0-5" contenteditable spellcheck="false">.enfant{
  display: table-row;
}
.menu{
  
}
</code></pre>
            </div>
            <div id="ex0-5">
              <div class="enfant header">Header</div>
              <div class="enfant menu">Menu</div>
              <div class="enfant contenu">Contenu</div>
              <div class="enfant footer">Footer</div>
            </div>
          </article>
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><q>Un élément flottant peut <span>devenir une cellule (ou une ligne) de tableau</span></q></p>
          <p class="questions-faux fragment">FAUX</p>
        </section>

        <section>
          <h2><code>display</code>, <code>float</code>, <code>position</code></h2>
          <ul>
            <li>Interactions:
              <ol>
                <li class="fragment">Si <code>display</code> est <code>none</code>
                  <ul>
                    <li><code>position</code> et <code>float</code> sans effets</li>
                   </ul>
                </li>
                <li class="fragment">Si <code>position</code> est <code>absolute</code> ou <code>fixed</code>
                  <ul>
                    <li><code>float</code> est <code>none</code>, <code>display</code> ▸ tableau</li>
                  </ul>
                </li>
                <li class="fragment">Si <code>float</code> est <code>left</code> ou <code>right</code>
                  <ul>
                    <li><code>display</code> ▸ tableau</li>
                  </ul>
                </li>
                <li class="fragment">Si élément racine (<code>html</code>)
                  <ul>
                    <li><code>display</code> ▸ tableau</li>
                  </ul>
                </li>
                <li class="fragment">Sinon, valeur de <code>display</code></li>
              </ol>
            </li>
          </ul>
          <table>
            <tr>
              <th>Valeur spécifiée</th>
              <th>Valeur calculée</th>
            </tr>
            <tr>
              <td>inline-table</td>
              <td>table</td>
            </tr>
            <tr>
              <td>inline, table-row-group, table-column, table-column-group, table-header-group, table-footer-group, table-row, table-cell, table-caption, inline-block</td>
              <td>block</td>
            </tr>
            <tr>
              <td>block, list-item, table</td>
              <td>valeur spécifiée</td>
            </tr>
          </table>
          <p>&nbsp;</p>
        </section>

        <section>
          <h2><code>display</code>, <code>float</code>, <code>position</code></span></h2>
          <article class="demo demo--side">
            <style>
            #ex0-7 .big-parent{
              width: 300px;
              margin: 30px auto;
            }
            #ex0-7 .parent{
              width: 300px;
              height: 250px;
              background: tomato;
              display: table-cell;
              vertical-align: middle;
              border: 5px solid black;
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="ex0-7" contenteditable spellcheck="false">.parent {
  display: table-cell;
  vertical-align: middle;
}</code></pre>
            </div>
            <div id="ex0-7">
              <div class="big-parent">
                <div class="parent">
                  <span>Hello</span>
                </div>
              </div>
            </div>
          </article>
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><q>Un élément dont tous ses enfants sont flottants <span>a une hauteur de 0</span></q></p>
          <p class="questions-faux fragment">FAUX</p>
        </section>

        <section>
          <h2>Le BFC</h2>
          <img src="<?php echo $root; ?>iamvdo/images/bfc.jpg" alt="Détournement du logo de KFC pour expliquer le BFC">
          <p class="info">Toute ressemblance avec une marque existante est purement fortuite.</p>
        </section>

        <section>
          <h2>Le Block Formatting Context</h2>
          <ul>
            <li>BFC: <strong>contexte d’affichage block</strong></li>
            <li class="fragment">Propriétés d'un BFC:
              <ul>
                <li>Les enfants s'affichent les uns en dessous des autres</li>
                <li>Ne «s'écoule» pas autour des flottants</li>
                <li>Contient les flottants</li>
              </ul>
            </li>
            <li class="fragment">Comment créer un BFC:
              <ul>
                <li class="fragment"><code>float</code></li>
                <li class="fragment"><code>position: absolute</code> ou <code>fixed</code></li>
                <li class="fragment"><code>display: inline-block</code> ou <code>table-cell</code> ou <code>table-caption</code></li>
                <li class="fragment"><code>overflow != visible</code></li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>BFC, flottants et frères</h2>
          <ul>
            <li>Un BFC ne chevauche pas les flottants externes</li>
            <li>Ses marges sont implicites</li>
          </ul>
          <article class="demo">
            <style>
            #ex1 .parent{
              font-size: 18px;
              line-height: 1.4;
              width: 500px;
              padding: 20px;
              margin: auto;
              background: deepskyblue;
              text-align: left;
            }
            #ex1 .enfant-left{
              width: 180px;
              height: 100px;
              padding: 10px;
              float: left;
              background: yellow;
              color: #333;
            }
            #ex1 .enfant-right{
              padding: 10px;
              text-align: justify;
              font-size: 18px;
            }
            </style>
            <div>
<pre class="small"><code class="liveCoding css" data-livecoding-id="ex1" contenteditable spellcheck="false">.enfant-left{
  float: left;
}
.enfant-right{
  /* Creer un BFC */
  
}
.parent{
  
}</code></pre>
            </div>
            <div id="ex1">
              <div class="parent">
                <div class="enfant-left"><p><strong>Enfant 1:</strong> Flottant à gauche</p></div>
                <div class="enfant-right"><p><strong>Enfant 2:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, iste, officia, perferendis culpa sapiente similique excepturi vero saepe error quas quam non fuga. Neque, modi at voluptas vel fugit sequi! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, cumque, omnis impedit enim quisquam placeat laboriosam iusto sapiente sunt delectus amet similique magni eius voluptates numquam quasi eum. Hic, tempore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, facilis, quod, debitis, quidem modi minima placeat quae nisi obcaecati odit sequi iste deleniti nostrum sunt officiis velit non eos vitae!</p></div>
              </div>
            </div>
          </article>
        </section>

        <section>
          <h2>BFC, <span>flottants</span> et parent</h2>
          <ul>
            <li>Un BFC contient ses enfants flottants: ils ne débordent pas!</li>
          </ul>
          <article class="demo">
            <style>
            #ex2 .parent{
              width: 500px;
              margin: auto;
              padding: 20px;
              background: deepskyblue;
            }
            #ex2 .parent img{
              float: left;
              margin: 0 20px 0 0;

            }
            </style>
            <div>
<pre class="small"><code class="liveCoding css" data-livecoding-id="ex2" contenteditable spellcheck="false">.parent img {
  float: left;
}
.parent {
  /* Creer un BFC */
  
}</code></pre>
            </div>
            <div id="ex2">
              <div class="parent">
                <p><img src="<?php echo $root; ?>iamvdo/images/kiwis.jpg" alt="Des tranches de kiwis.">Oh les biens beaux kiwis!</p>
              </div>
            </div>
          </article>
        </section>

        <section>
          <h2>BFC et clear</h2>
          <ul>
            <li>La propriété <code>clear</code> empêche un élément d'être adjacent à un <code>float</code> (<strong>mais dans le même BFC</strong>)</li>
          </ul>
          <article class="demo">
            <style>
            #ex3{
              text-align: left;
              font-size: 18px;
              margin: 40px 0;
            }
            #ex3 .menu{
              float: left;
              width: 200px; height: 300px;
              background: #333;
            }
            #ex3 .contenu{
              background: yellow;
              color: #333;
              padding: 15px;
              margin-left: 200px;
            }
            #ex3 .contenu img{
              float: left;
              margin: 0 15px 0 0;
            }
            #ex3 .contenu h2{
              padding: .5em;
              color: #333;
            }
            </style>
            <div>
<pre class="small"><code class="liveCoding css" data-livecoding-id="ex3" contenteditable spellcheck="false">.contenu h2 {
  
}
.menu {
  float: left;
  width: 200px;
}
.contenu {
  margin-left: 200px;
  /* Creer un BFC */
  
}
.contenu img {
  float: left;
}</code></pre>
            </div>
            <div id="ex3">
              <div class="menu">MENU</div>
              <div class="contenu">
                <img src="<?php echo $root; ?>iamvdo/images/kiwis.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, ipsam, dolore similique harum asperiores possimus officiis.</p>
                <h2>Les Kiwis? Partis!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, dolorum, alias, officia consequuntur delectus omnis dolorem ratione animi maiores accusantium ut harum blanditiis debitis quasi adipisci quod porro maxime corrupti.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, delectus, eum, commodi blanditiis illo maxime fuga incidunt consequuntur vel nemo inventore quisquam architecto temporibus nobis deserunt totam perspiciatis quo natus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis rerum deserunt perferendis. Molestias, laudantium, doloremque voluptates dolores sequi hic facilis nobis sint eligendi ipsa architecto deleniti. Aperiam, soluta accusantium voluptas.</p>
              </div>
            </div>
          </article>
        </section>

        <section>
          <h2>BFC: effets colatéraux</h2>
          <ul>
            <li class="fragment"><code>float</code>, <code>position: absolute</code>
              <ul>
                <li>modifie le flux de la page</li>
              </ul>
            </li>
            <li class="fragment"><code>display: inline-block</code>
              <ul>
                <li>Ne crée pas de boite de niveau block</li>
                <li>La taille est <em>shrink-to-fit</em></li>
              </ul>
            </li>
            <li class="fragment"><code>display: table-cell</code>
              <ul>
                <li>Ne crée pas de boite de niveau block</li>
                <li>Participe à un contexte de parents anonymes (<code>table</code>, <code>table-row</code>)</li>
                <li>Les marges externes n'existent pas!</li>
              </ul>
            </li>
            <li class="fragment"><code>overflow: hidden</code>
              <ul>
                <li>Le plus utilisé</li>
                <li>Mais empêche les débordements éventuels</li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>BFC: one more thing!</h2>
          <ul>
            <li>Possibilité en plus: <code>display: table</code>
              <ul>
                <li class="fragment">Création d'un <code>table-cell</code> anonyme (donc BFC)</li>
                <li class="fragment">Création d'une boite de niveau block</li>
                <li class="fragment">Mais attention au calcul de taille du tableau
                  <ul>
                    <li><code>table-layout: auto</code></li>
                    <li><code>table-layout: fixed</code></li>
                  </ul>
                </li>
                <li class="fragment">Et donc aux débordements</li>
              </ul>
            </li>
            <li class="fragment"><code><strong>&lt;troll></strong></code><span>Ça serait plus simple d'avoir <code>context: block | inline | flex</code></span> <code><strong>&lt;/troll></strong></code></li>
          </ul>
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><q>Deux éléments qui se suivent ayants des marges de 10px <span>sont séparés de 20px</span></q></p>
          <p class="questions-faux fragment">FAUX</p>
        </section>

        <section>
          <h2>La fusion des marges</h2>
          <ul>
            <li>Mécanisme qui fusionne certaines marges entres-elles</li>
            <li class="fragment">La fusion est uniquement verticale</li>
            <li class="fragment">À quel moment?
              <ul>
                <li class="fragment">marge haute d’un bloc et marge haute de son premier enfant</li>
                <li class="fragment">marge basse d’un bloc et marge basse de son dernier enfant (si <code>height: auto</code>)</li>
                <li class="fragment">marge basse d’un bloc et marge haute de son suivant</li>
                <li class="fragment">marge haute et basse d’un élément sans contenu</li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>La fusion des marges</h2>
          <ul>
            <li class="fragment">Contraintes entre suivants:
              <ul>
                <li>Éléments dans le même BFC</li>
              </ul>
            </li>
            <li class="fragment">Contraintes entre parents et enfants:
              <ul>
                <li>Pas de fusion si le parent est un BFC</li>
                <li>Pas de fusion si <code>padding</code> ou <code>border</code> sur le parent</li>
              </ul>
            </li>
            <li class="fragment">Lors de la fusion: la marge maximum est utilisée</li>
          </ul>
        </section>

        <section>
          <h2>La <span>fusion des marges</span></h2>
          <article class="demo">
            <style>
            #ex4{
              text-align: left;
              border: 1px solid black;
              margin: 50px;
              background: deepskyblue;
            }
            #ex4 .parent{
            }
            #ex4 .enfant{
              background: tomato;
              margin: 0;
              padding: 0;
            }
            </style>
            <div>
<pre class="small"><code class="liveCoding css" data-livecoding-id="ex4" contenteditable spellcheck="false">.enfant {
  background: yellow;
  
}
.parent {
  
}</code></pre>
            </div>
            <div id="ex4">
              <div class="parent">
                <p class="enfant">Enfant 1</p>
                <p class="enfant">Enfant 2</p>
                <p class="enfant">Enfant 3</p>
              </div>
            </div>
          </article>
        </section>

        <section class="questions questions--jdcjdr" data-state="jdcjdr">
          <p class="questions-titre">Une marge <span>droite ou gauche</span> en % se réfère à la largeur de l'élément qui le contient.</p>
          <p class="questions-titre fragment">Une marge <span>haute ou basse</span> en % se réfère à la <strong>largeur(!)</strong> de l'élément qui le contient.</p>
          <div class="fragment info"><a href="http://www.mademyday.de/css-height-equals-width-with-pure-css.html">Le fameux trick utilisant cette technique</a></div>
        </section>

        <section data-state="part">
          <h1>Positionnement CSS3</h2>
        </section>

        <section>
          <h2>Flexbox FTW</h2>
          <ul>
            <li class="fragment">Flex formatting context</li>
            <li class="fragment">Comme un BFC, en plus mieux</li>
            <li class="fragment">Centrage horizontal et vertical</li>
            <li class="fragment">Réorganisation des éléments</li>
            <li class="fragment">Flexibilité des boites</li>
            <li class="fragment">Marges externes, et même automatiques</li>
            <li class="fragment">Débordements</li>
          </ul>
          <ul class="fragment">
            <li><strong>LA solution</strong> à tous vos problèmes ?</li>
            <li>Support très large, seuls IE&lt;9 ont besoin d'un <a href="https://github.com/doctyper/flexie">polyfill</a></li>
            <li><a href="http://pleeease.io">Automatiser les préfixes</a></li>
          </ul>
        </section>

        <section>
          <h2>L'élément Flexbox</h2>
<pre class="syntax"><code>display: flex;</code></pre>
          <ul>
            <li class="fragment">Définit l'élément principal Flexbox</li>
            <li class="fragment">Les Flex items (enfants) «subissent» ce mode</li>
          </ul>
        </section>

        <section>
          <h2>Les axes du Flexbox</h2>
<pre class="syntax"><code>flex-direction: row wrap</code></pre>
          <ul>
            <li class="fragment">Propriété <code>flex-flow</code>, un raccourci de 2 autres</li>
          </ul>
          <ul>
            <li class="fragment"><code>flex-direction</code> définit <strong>l'axe principal</strong> du Flexbox
              <ul>
                <li class="fragment"><code>column</code>, <code>column-reverse</code>: affichage en colonnes</li>
                <li class="fragment"><code>row</code>, <code>row-reverse</code>: affichage en lignes</li>
              </ul>
            </li>
            <li class="fragment"><strong>L'axe secondaire</strong> est donc l'axe perpendiculaire</li>
          </ul>
          <ul>
            <li class="fragment"><code>flex-wrap</code> gestion du débordement des lignes
              <ul>
                <li><code>nowrap</code></li>
                <li><code>wrap</code>, <code>wrap-reverse</code></li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>Démo: Axes Flexbox</h2>
          <article class="demo">
            <style>
            #flex1 .parent {
            }
            #flex1 .enfant {
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="flex1" contenteditable spellcheck="false">.parent {
  
}</code></pre>
            </div>
            <div id="flex1">
              <div class="parent">
                <div class="enfant">1</div>
                <div class="enfant">2</div>
                <div class="enfant">3</div>
                <div class="enfant">4</div>
                <div class="enfant">5</div>
              </div>
            </div>
          </article>
        </section>

        <section>
          <h2>La flexibilité</h2>
          <pre class="syntax"><code>flex: 1 100px</code></pre>
          <ul>
            <li class="fragment">Propriété <code>flex</code>, un raccourci de 3 autres:
              <ul>
                <li class="fragment"><code>flex-grow</code> contrainte d'agrandissement</li>
                <li class="fragment"><code>flex-shrink</code> contrainte de réduction</li>
                <li class="fragment"><code>flex-basis</code> taille de base</li>
              </ul>
            </li>
            <li class="fragment">Taille flexible</li>
            <li class="fragment">S'applique sur chaque Flex item (enfant)</li>
          </ul>
        </section>

        <section>
          <h2>Ordre d'affichage</h2>
          <pre class="syntax"><code>order: 2</code></pre>
          <ul>
            <li class="fragment">Propriété <code>order</code> change l'ordre d'apparition au cas par cas</li>
            <li class="fragment">Pratique pour réorganiser, mais attention à l'accessibilité</li>
          </ul>
        </section>

        <section>
          <h2>Démo: flex et order</h2>
          <article class="demo">
            <style>
            #flex2 .parent {
            }
            #flex2 .enfant {
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="flex2" contenteditable spellcheck="false">.parent {
  display: flex;
}
.enfant {
  
}
.enfant:nth-child(2) {
  
}</code></pre>
            </div>
            <div id="flex2">
              <div class="parent">
                <div class="enfant">1</div>
                <div class="enfant">2</div>
                <div class="enfant">3</div>
                <div class="enfant">4</div>
                <div class="enfant">5</div>
              </div>
            </div>
          </article>
        </section>

        <section>
          <h2>Alignements</h2>
          <ul>
            <li class="fragment">Marges classiques</li>
            <li class="fragment">Marges automatiques: <code>margin: auto</code></li>
          </ul>
          <ul>
            <li class="fragment">Alignements en fonction de l'axe (principal ou secondaire)</li>
            <li class="fragment">Suit le <a href="http://dev.w3.org/csswg/css3-align/">Box Alignment Module</a> (non spécifique à Flexbox)</li>
          </ul>
        </section>

        <section>
          <h2>Démo: Marges</h2>
          <article class="demo">
            <style>
            #flex3 .parent {
            }
            #flex3 .enfant {
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="flex3" contenteditable spellcheck="false">.parent {
  display: flex;
}
.enfant {
  
}
.enfant:nth-child(2) {
  
}</code></pre>
            </div>
            <div id="flex3">
              <div class="parent">
                <div class="enfant">1</div>
                <div class="enfant">2</div>
                <div class="enfant">3</div>
                <div class="enfant">4</div>
                <div class="enfant">5</div>
              </div>
            </div>
          </article>
        </section>

        <section>
          <h2>Alignement axe principal</h2>
          <ul>
            <li class="fragment"><code>justify-content</code> sur le parent Flexbox
              <ul>
                <li class="fragment"><code>flex-start</code>, <code>flex-end</code>, <code>center</code>, <code>space-between</code>, <code>space-around</code></li>
              </ul>
            </li>
          </ul>
          <img  class="fragment" src="iamvdo/images/alignPrincipal.jpg" alt="Résultat des différentes valeurs d'alignement sur l'axe principal dans Flexbox" />
        </section>

        <section>
          <h2>Alignement axe secondaire</h2>
          <ul>
            <li class="fragment"><code>align-items</code> sur le parent Flexbox
              <ul>
                <li class="fragment"><code>flex-start</code>, <code>flex-end</code>, <code>center</code>, <code>baseline</code>, <code>stretch</code></li>
              </ul>
            </li>
          </ul>
          <img  class="fragment" src="iamvdo/images/alignSecondaire.jpg" alt="Résultat des différentes valeurs d'alignement sur l'axe secondaire dans Flexbox" />
        </section>

        <section>
          <h2>Alignement axe secondaire</h2>
          <ul>
            <li class="fragment">Un élément peut avoir son propre alignement</li>
            <li class="fragment"><code>align-self</code> sur un Flexbox item (enfant)
              <ul>
                <li class="fragment"><code>flex-start</code>, <code>flex-end</code>, <code>center</code>, <code>baseline</code>, <code>stretch</code></li>
              </ul>
            </li>
          </ul>
          <img class="fragment" src="iamvdo/images/alignSelf.jpg" alt="Résultat des différentes valeurs d'alignement sur l'axe secondaire pour un élement particulier dans Flexbox" />
        </section>

        <section>
          <h2>Démo: Alignements</h2>
          <article class="demo">
            <style>
            #flex4 .parent {
            }
            #flex4 .enfant {
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="flex4" contenteditable spellcheck="false">.parent {
  display: flex;
}
.enfant {
  
}
.enfant:nth-child(2) {
  
}</code></pre>
            </div>
            <div id="flex4">
              <div class="parent">
                <div class="enfant">1</div>
                <div class="enfant">2</div>
                <div class="enfant">3</div>
                <div class="enfant">4</div>
                <div class="enfant">5</div>
              </div>
            </div>
          </article>
        </section>

        <section data-state="part">
          <h1>Empilements CSS</h1>
        </section>

        <section data-background="url(iamvdo/images/arbre4.jpg) center" data-background-size="cover">
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><q>L’élément avec le <code>z-index</code> maximal de la page sera <span>toujours au dessus de tous les autres éléments</span></q></p>
          <p class="questions-faux fragment">FAUX</p>
        </section>

        <section>
          <h2>Contexte d'empilement</h2>
          <ul>
            <li>Tout dépend de son <strong>contexte d’empilement</strong></li>
            <li class="fragment">Création:
              <ul>
                <li>Élément racine (<code>html</code>)</li>
                <li>Élément en <code>position: absolute</code>, <code>relative</code> ou <code>fixed</code> et <code>z-index</code> différent de <code>auto</code></li>
              </ul>
            </li>
            <li class="fragment">Les contextes d'empilement sont «hermétiques» aux autres contextes</li>
            <li class="fragment"><strong>Le <code>z-index</code> est relatif à son contexte!</strong></li>
          </ul>
        </section>

        <section>
          <h2>Contexte <span>d'empilement</span></h2>
          <article class="demo demo--side">
            <style>
            #ex5{
              position: relative;
            }
            #ex5 > div{
              width: 300px;
              margin: auto;
            }
            #ex5 .parent {
              position: absolute;
              width: 200px; height: 200px;
            }
            #ex5 .parent:nth-child(2) {
              margin-top: 50px; margin-left: 50px;
            }
            #ex5 .parent:nth-child(3) {
              margin-top: 100px; margin-left: 100px;
            }
            #ex5 .enfant{
              width: 200px; height: 200px;
              background: tomato;
            }
            #ex5 .enfant--un{
            }
            #ex5 .enfant--deux{
              background: yellowgreen !important;
              /*margin-top: 50px; margin-left: 50px;*/
            }
            #ex5 .enfant--trois{
              background: deepskyblue !important;
              /*margin-top: 100px; margin-left: 100px;*/
            }

            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="ex5" contenteditable spellcheck="false">.enfant {
  position: absolute;
}
.enfant--un {
  z-index: 1;
}
.enfant--deux {
  
}
.parent {
  position: absolute;
}
.parent:nth-child(2) {
  
}
</code></pre>
            </div>
            <div id="ex5">
              <div>
                <div class="parent">
                  <div class="enfant enfant--un">Enfant 1</div>
                </div>
                <div class="parent">
                  <div class="enfant enfant--deux">Enfant 2</div>
                </div>
                <div class="parent">
                  <div class="enfant enfant--trois">Enfant 3</div>
                </div>
              </div>
            </div>
          </article>
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><q>Il est possible de modifier l’ordre d’empilement <span>sans <code>z-index</code></span></q></p>
          <p class="questions-vrai fragment">VRAI</p>
        </section>

        <section>
          <h2>Ordre d'affichage</h2>
          <ul>
            <li>Pour chaque contexte d'empilement, l'ordre est:
              <ul>
                <li class="fragment">Bordures et <code>background</code> de l’élément racine</li>
                <li class="fragment">Éléments positionnés et <code>z-index</code> négatifs</li>
                <li class="fragment">Éléments block non-positionnés</li>
                <li class="fragment">Floats</li>
                <li class="fragment">Éléments inline non-positionnés</li>
                <li class="fragment">Éléments positionnés et <code>z-index</code> auto</li>
                <li class="fragment">Éléments positionnés et <code>z-index</code> positifs</li>
              </ul>
            </li>
            <li class="fragment">Il est donc possible:
              <ul>
                <li class="fragment">d'afficher un enfant derrière son parent</li>
                <li class="fragment">d’intercaler des éléments</li>
                <li class="fragment">de modifier l’ordre d’empilement sans <code>z-index</code></li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>Ordre <span>d'affichage</span></h2>
          <article class="demo demo--side">
            <style>
            #ex7 .enfant{
              padding: 30px;
              margin-left: 40px;
              border: 5px solid black;
            }
            #ex7 .enfant--un{
            }
            #ex7 .enfant--deux{
              color: #fff !important;
              background: #333 !important;
            }
            #ex7 .enfant span{
              background: yellow !important;
              padding: 20px;
              border: 5px solid black;
            }
            #ex7 .enfant--un span{
              background: deeppink !important;
            }
            #ex7 .enfant--deux span{
              background: deepskyblue !important;
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="ex7" contenteditable spellcheck="false">.enfant--un {
  
}
.enfant--deux {
  
}
.enfant span {
  
}
.enfant--un span {
  
}
.enfant--deux span {
  
}</code></pre>
            </div>
            <div id="ex7">
              <div class="enfant enfant--un">Enfant 1<span>span</span></div>
              <div class="enfant enfant--deux">Enfant 2<span>span</span></div>
            </div>
          </article>
        </section>

        <section class="questions" data-state="questions">
          <p class="questions-titre"><q>L’opacité modifie <span>l’ordre d’affichage des éléments</span></q></p>
          <p class="questions-vrai fragment">VRAI</p>
        </section>

        <section>
          <h2>Contexte d'empilement: opacité!</h2>
          <ul>
            <li>L’opacité &lt;1 crée un contexte d’empilement!</li>
            <li>Et en CSS3:</li>
            <ul>
              <li><code>transform</code> != <code>none</code></li>
              <li><code>transform-style: preserve-3d</code></li>
              <li><code>perspective</code></li>
              <li><code>filter</code> != <code>none</code></li>
              <li><code>clip-path</code>, <code>mask</code></li>
              <li><code>will-change</code> dans certains cas</li>
            </ul>
          </ul>
        </section>

        <section>
          <h2>Contexte <span>d'empilement</span>: opacité!</h2>
          <article class="demo demo--side">
            <style>
            #ex6{
              position: relative;
            }
            #ex6 .parent{
              width: 200px; height: 200px;
              margin: auto;
              background: tomato;
              border: 5px solid black;
            }
            #ex6 .enfant{
              width: inherit; height: inherit;
              background: deepskyblue;
              position: absolute;
              z-index: -1;
              margin-top: 50px; margin-left: 50px;
              border: 5px solid black;
            }
            </style>
            <div>
<pre><code class="liveCoding css" data-livecoding-id="ex6" contenteditable spellcheck="false">.parent {
  
}
.enfant {
  position: absolute;
  z-index: -1;
}
</code></pre>
            </div>
            <div id="ex6">
              <div class="parent">Parent
                <div class="enfant">Enfant</div>
              </div>
            </div>
          </article>
        </section>

        <section>
          <h2>Ressources</h2>
          <ul>
            <li><a href="http://letrainde13h37.fr/17/transitions-et-animations-css/">Les transitions / animations</a></li>
            <li><a href="http://iamvdo.me/blog/ce-que-vous-avez-toujours-voulu-savoir-sur-css">CSS, les bases avancées</a> (contexte de formatge, BFC, empilement, etc.)</li>
            <li><a href="http://css3create.com">Plus de démos en CSS3</a></li>
          </ul>
        </section>

        <section class="me">
          <h2>Merci, <span>questions?</span></h2>
          <p class="u-aligncenter">Vincent De Oliveira &middot; <a href="http://twitter.com/iamvdo">@iamvdo</a></p>
          <p class="u-aligncenter"><a href="http://slides.iamvdo.me/yajug15">slides.iamvdo.me/yajug15</a></p>
        </section>

      </div>

    </div>

    <div class="info-overlay" id="info-twitter"><a href="https://twitter.com/iamvdo">@iamvdo</a></div>
    <div class="info-overlay" id="info-slides"><a href="http://slides.iamvdo.me/yajug15">slides.iamvdo.me/yajug15</a></div>

    <script src="<?php echo $root; ?>lib/js/head.min.js"></script>
    <script src="<?php echo $root; ?>js/reveal.min.js"></script>

    <script>

      // master?
      /*
      var file = 'client';
      var secret = null;
      if (window.location.pathname.indexOf('master') !== -1) {
        file = 'master';
        secret = '14290135599873480339';
      }
      */

      // Full list of configuration options available here:
      // https://github.com/hakimel/reveal.js#configuration
      Reveal.initialize({
        controls: true,
        progress: false,
        history: true,
        center: false,

        transitionSpeed: 'slow',

        theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
        transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

        // Parallax scrolling
        //parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
        //parallaxBackgroundSize: '2100px 900px',
        /*
        multiplex: {
          secret: secret,
          id: '7d70fbcbce612db0',
          url: 'revealjs.jit.su:80'
        },
        */

        // Optional libraries used to extend on reveal.js
        dependencies: [
          { src: '<?php echo $root; ?>lib/js/classList.js', condition: function() { return !document.body.classList; } },
          { src: '<?php echo $root; ?>plugin/prismjs/prism.js', async: true, callback: function () {
            Prism.highlightAll();
          } },
          { src: '<?php echo $root; ?>plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
          { src: '<?php echo $root; ?>plugin/prefixfree/prefixfree.js', async: true },
          { src: '<?php echo $root; ?>plugin/live-coding/live-coding.js', async: true, condition: function() { return !!document.body.classList; }},
          { src: '<?php echo $root; ?>plugin/nav/nav.js', async: true}

        ]
      });

    </script>
    
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-17376769-7']);
    _gaq.push(['_setDomainName', 'iamvdo.me']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
    

  </body>
</html>
