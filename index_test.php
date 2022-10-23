<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Crimson&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PTSans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=WorkSans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Neuton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<title>.VG.</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
:root {
  --color-1: darkblue;
  --color-2: lightgray;
  --color-3: mediumorchid;
  --color-4: darkblue;
}
* {
  box-sizing: border-box;
}

body {
  /* font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; */
  /*font-family: 'Work Sans', sans-serif;*/
  font-family: 'Lato', sans;
  max-width: 1000px;
  margin: auto;
  padding: 0 1em;
}

/* Style the header */
header {
  width: 100%;
  display: flex;
  flex-wrap: nowrap;
  padding-top: 20px;
  text-align: left;
  font-family: Georgia, 'Times New Roman', Times, serif;
  font-family: 'Macondo', cursive;
  font-size: large;
  color: var(--color-1);
  justify-content: space-between;
}
header h2 {
  padding-left: 1em;
}
header h3 {
  color: var(--color-1);
}
header img {
  max-width: 200px;
  max-height: 200px;
  object-fit: contain;
  clip-path: circle();
  background-color: var(--color-2);
  padding: 4px;
  border-radius: 50%;
}

.header {
  width: 700px;
  justify-content: space-between;
}
.header> h1 {
  margin-bottom: 0;
  padding-left: 10px;
}
.header>.nav {
  display: flex;
  flex-wrap: nowrap;
  padding-left: 1em;
}
.header>.nav> p {
  font-family: 'Handlee', cursive;
  margin-right: 1em;
}
.header>.nav> ul {
  font-family: Georgia, 'Times New Roman', Times, serif;
  list-style-type: none;
  padding: 0;
  font-size: large;
  text-align: right;
}
.header>.nav> ul li {
  margin-top: 2px;
}
.header>.nav> ul li a{
  background-color: var(--color-1);
  border-radius: 10px 0 0 10px;
  color: white;
  padding: 0 10px;
  text-decoration: none;
}
hr {
  color: lightgray;
  height: 0px;
  border-width: 1px;
  border-style: solid;
}

/* Container for flexboxes */
section {
  display: flex;
  flex-wrap: wrap;
  background-color: white;
  margin: 1em 0;
  align-items: flex-start;
  width: 100%;
}
section h1 {
  display: flex;
  /* font-family: Georgia, 'Times New Roman', Times, serif; */
  font-family: 'Neuton', serif;
  font-size: larger;
  color: white;
  padding: 0 6px;
  background-color: var(--color-4);
  margin: 0;
  border-radius: 4px 4px 0 0;
}
section div {
  /*background-color: whitesmoke;*/
  border-top: 2px var(--color-4) solid;
  flex: 100%;
}
section p {
  /*font-style: italic;*/
  padding: 0 1em;
}

/* Style the navigation menu */
nav {
  font-size: large;
  text-align: right;
  padding: 0px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}
nav li {
  background-color: aquamarine;
  color: red;
  font-size: 200;
}

/* Style the footer */
footer {
  /* font-family: Georgia, 'Times New Roman', Times, serif; */
  font-family: 'Handlee', cursive;
  font-size: medium;
  padding: 10px;
  text-align: center;
  color: var(--color-1);
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
</head>
<body>
<header>
  <div><img src="images/profile.jpg" alt="Vahid"></div>
  <div class="header">
    <h1>Vahid Ganjalizadeh</h1>
  <div class="nav">
      <p>A Ph.D. stduent at UCSC in Electrical and Computer Engineering. 
        Enjoys working with optics and photonics and codes to do all these!</p>
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#research">Research</a></li>
          <li><a href="#publications">Publications</a></li>
        </ul>
    </div>
  </div>
</header>

<section id="about">
  <h1>
    About me
  </h1>
  <div>
    <p>
      I'm a last year Ph.D. candidate at UCSC.
    </p>
  </div>
</section>
<section id="skills">
  <h1>Skills</h1>
  <div>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 130 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </div>
</section>
<section id="research">
  <h1>Research</h1>
  <div>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 130 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </div>
</section>
<section id="publications">
  <h1>Publications</h1>
  <div>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 130 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 130 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 130 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 130 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 130 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 130 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </div>
  <div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center" id="publication">PUBLICATIONS</h3>
  <p class="w3-center"><em>Here is the list of my publications as the first author or as a collaborator in numerous projects.</em></p><br>
  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <p>
		<!-- <link rel="stylesheet" type="text/css" href="css/docs.css" /> -->
		<link rel="stylesheet" type="text/css" href="css/bibtex.css" />
    <?php 
      $Path['lib'] = './lib/';
      require_once $Path['lib'] . 'lib_bibtex.inc.php';
      $Site['bibtex'] = new Bibtex('mypublications_doi.bib');
      $Site['bibtex']->SetBibliographyStyle('numeric');
      $Site['bibtex']->SetBibliographyOrder('year_d');
      $Site['bibtex']->Select(array('author' => ''));
      $Site['bibtex']->PrintBibliography();
    ?>
  </p>
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/pcooksey/bibtex-js@1.0.0/src/bibtex_js.js"></script>
<bibtex src="mypublications_doi.bib"></bibtex>
<div class="bibtex_structure">
  <div class="sections bibtextypekey">
      <div class="section article">
        <section>
      <h1>Refereed Articles</h1>
      <div class="sort year" extra="DESC string">
        <div class="templates"></div>
      </div>
    </section>
    </div>
    <div class="section book">
      <h1>Books</h1>
      <div class="sort year" extra="ASC number">
        <div class="templates"></div>
      </div>
    </div>
    <div class="section inproceedings">
      <h1>Conference and Workshop Papers</h1>
      <div class="sort year" extra="ASC number">
        <div class="templates"></div>
      </div>
    </div>
    <div class="section misc|phdthesis|mastersthesis|bachelorsthesis|techreport">
      <h1>Other Publications</h1>
      <div class="sort year" extra="ASC number">
        <div class="templates"></div>
      </div>
    </div>
  </div>
</div>
<div id="bibtex_display"></div>
</section>
<footer>
  <p>Designed and developed by Vahid Ganjalizadeh. Updated on Oct '22.</p>
</footer>

</body>
</html>

