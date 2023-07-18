<?php include("config.php") ?>

<!DOCTYPE html>
<html>

<!--header start-->
<head>
<title>MCU wiki</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" type="image/x-icon" href="favicon.png" />
<link rel="stylesheet" type="text/css" href="style.css" id="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Alata" />
<script src="script.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
</head>
<!--header end-->

<!--body start-->
<body>
<!--body wrapper start-->
<div class="wrapper">
<!--page header start-->
<div class="header"></div>
<!--page header end-->

<!--menu container starts-->
<div class="menu-container sticky">
<!--top navigation start-->
<div class="top-nav middle">
<!--left starts-->
<div class="left">
<!--logo-->
<div class="dropdown img middle no-hover">
<a href="mcu-wiki.php"><img src="logo.png" alt="home-logo" height="35px"/></a>
</div>

<!--home-->
<div class="dropdown middle">
<a href="mcu-wiki.php">HOME</a>
</div>

<!--dropdown-->
<div class="dropdown middle">
<a href="javascript:void(0)">UNIVERSE <i class="fas fa-caret-down" style="font-size: 15px; color: white"></i></a>
<div class="dropdown-content">
<a href="organisations.html">Organisations</a>
<a href="characters.html">Characters</a>
<a href="timeline.html">Timeline</a>
</div>
</div>

<!--dropdown-->
<div class="dropdown middle">
<a href="javascript:void(0)">MOVIES <i class="fas fa-caret-down" style="font-size: 15px; color: white"></i></a>
<div class="dropdown-content">
<a href="phase1.php">Phase 1</a>
<a href="phase2.php">Phase 2</a>
<a href="phase3.php">Phase 3</a>
<a href="phase4.php">Phase 4</a>
</div>
</div>

<!--dropdown-->
<div class="dropdown middle">
<a href="javascript:void(0)">TV SHOWS <i class="fas fa-caret-down" style="font-size: 15px; color: white" ></i></a>
<div class="dropdown-content">
<a href="marvelheroes.php">Marvel Heroes</a>
<a href="disney.php">Disney+ series</a>
</div>
</div>

<!--dropdown-->
<div class="dropdown middle">
<a href="review.php">REVIEWS</a>
</div>
</div>
<!--left ends-->
</div>
<!--top navigation ends-->

<!--right starts-->
<div class="right" style="padding: 20px">
<!--theme toggle button-->
<div class="dropdown middle theme no-hover">
<a onclick="change()"><i class="fas fa-adjust" id="themebtn" title="Lumos!"></i></a>
</div>
</div>
<!--right ends-->

<div>
<!--menu button-->
<div class="menu-icon middle no-hover left">
<a class="icon" id="menubtn"><i class="fa fa-bars"></i></a>
</div>

<!--logo-->
<div class="home-icon img middle no-hover center">
<a href="mcu-wiki.php"><img src="logo.png" alt="home-logo" height="35px" /></a>
</div>
<br />
</div>

<!--mob nav starts-->
<div class="mob-nav" id="menu">
<!--home-->
<div class="mob-dropdown middle">
<a href="mcu-wiki.php">HOME</a>
</div>
<br />

<!--dropdown-->
<div class="mob-dropdown middle">
<a href="javascript:void(0)">UNIVERSE<i class="fas fa-caret-down right" style="font-size: 15px; color: white"></i></a>
<div class="mob-dropdown-content">
<a href="organisations.html">Organisations</a>
<a href="characters.html">Characters</a>
<a href="timeline.html">Timeline</a>
</div>
</div>
<br />

<!--dropdown-->
<div class="mob-dropdown middle">
<a href="javascript:void(0)">MOVIES<i class="fas fa-caret-down right" style="font-size: 15px; color: white"></i></a>
<div class="mob-dropdown-content">
<a href="phase1.php">Phase 1</a>
<a href="phase2.php">Phase 2</a>
<a href="phase3.php">Phase 3</a>
<a href="phase4.php">Phase 4</a>
</div>
</div>
<br />

<!--dropdown-->
<div class="mob-dropdown middle">
<a href="javascript:void(0)">TV SHOWS<i class="fas fa-caret-down right" style="font-size: 15px; color: white"></i></a>
<div class="mob-dropdown-content">
<a href="marvelheroes.php">Marvel Heroes</a>
<a href="disney.php">Disney+ series</a>
</div>
</div>
<br />

<!--dropdown-->
<div class="mob-dropdown middle">
<a href="review.php">REVIEWS</a>
</div>
<br />
</div>
<!--mob nav ends-->
</div>
<!--menu container ends-->

<!--row-wrapper starts-->
<div class="row clear-float">
<!--left column starts-->
<div class="leftcolumn">
<!--inner row starts-->
<div class="inner-row">
<!--card starts-->
<div class="card">
<h2>Phase 2</h2>

<div class="card phase">
<div class="grid-container3">
<div class="phaseimg"> 
<img class="center" src="phase2.webp" alt="phase2" style="max-width: 100%"/>
</div>
<div class="phasecnt">
<p>
Phase Two is the second part of the Marvel Cinematic Universe and the second part of the Infinity Saga. 
From 2013 to 2015, the Phase Two films grossed $5.269 billion worldwide, surpassing the Phase One films.
</p>
</div>
</div>
</div>

<div class="card phase">
<div class="grid-container2">
<div class="phaseimg"> 
<img class="center" src="im3.jpg" alt="mcu" style="max-height: 225px;" />
</div>
<div class="phasecnt"><p><b>IRON MAN 3 (2013)</b>
<?php 
$sql1 = "SELECT ROUND(AVG(rating),2) AS average FROM ratings WHERE msname='Iron Man 3'";
$result1 = $conn->query($sql1);
while ($data1 = mysqli_fetch_assoc($result1)) {
?>
	<span class="right"><span class="star" style="font-size:20px;" ><?php $r1 = $data1['average'];
	if($r1 == ""){ 
		echo "";
	} else {
	switch ($r1) {
		 case 1: echo "<i class='fa fa-star'></i>";
	   break;
		case ($r1 > "1" && $r1 < "2"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 2: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r1 > "2" && $r1 < "3"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 3: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r1 > "3" && $r1 < "4"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 4: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
		break;
	case ($r1 > "4" && $r1 < "5"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 5: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break; } }?></span> <span class="rating-val"><?php if($r1 == ""){echo "no ratings yet";}
	   else {echo $r1;} }?></span></span>
</p>
<p>Marvel's Iron Man 3 pits brash-but-brilliant industrialist Tony Stark/Iron Man against an enemy whose reach knows no bounds. 
When Stark finds his personal world destroyed at his enemy's hands, he embarks on a harrowing quest to find those responsible.</p>
</div>
</div>
</div>	

<div class="card clear-float phase">
<div class="grid-container3">
<div class="phaseimg"> 
<img class="center" src="thor2.jpg" alt="mcu" style="max-height: 225px;" />
</div>
<div class="phasecnt"><p><b>THOR: THE DARK WORLD (2013)</b>
	<?php 
$sql2 = "SELECT ROUND(AVG(rating),2) AS average FROM ratings WHERE msname='Thor: Dark World'";
$result2 = $conn->query($sql2);
while ($data2 = mysqli_fetch_assoc($result2)) {
?>
	<span class="right"><span class="star" style="font-size:20px;" ><?php $r2 = $data2['average']; 
    if($r2 == ""){ 
		echo "";
	} else { 
	switch ($r2) {
		 case 1: echo "<i class='fa fa-star'></i>";
	   break;
		case ($r2 > "1" && $r2 < "2"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 2: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r2 > "2" && $r2 < "3"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 3: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r2 > "3" && $r2 < "4"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 4: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
		break;
	case ($r2 > "4" && $r2 < "5"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 5: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
	} }?></span> <span class="rating-val"><?php if($r2 == ""){echo "no ratings yet";}
	   else {echo $r2;} }?></span></span></p>
<p> Thor fights to restore order across the cosmos...but an ancient race led by the vengeful Malekith 
returns to plunge the universe back into darkness. Faced with an enemy that even Odin and Asgard cannot withstand, 
Thor must embark on his most perilous and personal journey yet,
 one that will reunite him with Jane Foster.</p>
</div>
</div>
</div>
	
	
<div class="card phase">
<div class="grid-container2">
<div class="phaseimg"> 
<img class="center" src="ca2.jpg" alt="mcu" style="max-height: 225px;" />
</div>
<div class="phasecnt"><p><b>CAPTAIN AMERICA: THE WINTER SOLDIER (2014)</b>
	<?php 
$sql3 = "SELECT ROUND(AVG(rating),2) AS average FROM ratings WHERE msname='Captain America: The Winter Soldier'";
$result3 = $conn->query($sql3);
while ($data3 = mysqli_fetch_assoc($result3)) {
?>
	<span class="right"><span class="star" style="font-size:20px;" ><?php $r3 = $data3['average']; 
    if($r3 == ""){ 
		echo "";
	} else { 
	switch ($r3) {
		 case 1: echo "<i class='fa fa-star'></i>";
	   break;
		case ($r3 > "1" && $r3 < "2"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 2: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r3 > "2" && $r3 < "3"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 3: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r3 > "3" && $r3 < "4"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 4: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
		break;
	case ($r3 > "4" && $r3 < "5"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 5: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
	} }?></span> <span class="rating-val">
		<?php 
	   if($r3 == ""){echo "no ratings yet";}
	   else {echo $r3;} }?></span></span></p>
<p>Steve becomes embroiled in a web of intrigue that threatens to put the world at risk. Joining forces with the Black 
Widow, Captain America struggles to expose the ever-widening conspiracy while fighting off professional assassins sent to
 silence him at every turn. When the full scope of the villainous plot is revealed, Captain America and 
the Black Widow enlist the help of a new ally, the Falcon.</p>
</div>
</div>
</div>
	
	
<div class="card phase">
<div class="grid-container3">
<div class="phaseimg"> 
<img class="center" src="gotg1.jpg" alt="mcu" style="max-height: 225px;" />
</div>
<div class="phasecnt"><p><b>THE GUARDIANS OF THE GALAXY (2014)</b>
<?php 
$sql4 = "SELECT ROUND(AVG(rating),2) AS average FROM ratings WHERE msname='Guardians of the Galaxy'";
$result4 = $conn->query($sql4);
while ($data4 = mysqli_fetch_assoc($result4)) {
?>
	<span class="right"><span class="star" style="font-size:20px;" ><?php $r4 = $data4['average']; 
    if($r4 == ""){ 
		echo "";
	} else { 
	switch ($r4) {
		 case 1: echo "<i class='fa fa-star'></i>";
	   break;
		case ($r4 > "1" && $r4 < "2"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 2: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r4 > "2" && $r4 < "3"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 3: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r4 > "3" && $r4 < "4"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 4: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
		break;
	case ($r4 > "4" && $r4 < "5"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 5: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
	} }?></span> <span class="rating-val">
		<?php 
	   if($r4 == ""){echo "no ratings yet";}
	   else {echo $r4;} }?></span></span>	
</p>
<p>An action-packed, epic space adventure, Marvel's Guardians of the Galaxy, expands the Marvel Cinematic Universe
into the cosmos, where brash adventurer Peter Quill finds himself the object of an unrelenting bounty hunt after
stealing a mysterious orb coveted by Ronan, a powerful villain with ambitions that threaten the entire universe.</p>
</div>
</div>
</div>
	
<div class="card phase">
<div class="grid-container2">
<div class="phaseimg"> 
<img class="center" src="avng2.jpg" alt="mcu" style="max-height: 225px;" />
</div>
<div class="phasecnt"><p><b> AVENGERS: AGE OF ULTRON (2015)</b>
<?php 
$sql5 = "SELECT ROUND(AVG(rating),2) AS average FROM ratings WHERE msname='The Avengers: Age of Ultron'";
$result5 = $conn->query($sql5);
while ($data5 = mysqli_fetch_assoc($result5)) {
?>
	<span class="right"><span class="star" style="font-size:20px;" ><?php $r5 = $data5['average']; 
    if($r5 == ""){ 
		echo "";
	} else { 
	switch ($r5) {
		 case 1: echo "<i class='fa fa-star'></i>";
	   break;
		case ($r5 > "1" && $r5 < "2"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 2: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r5 > "2" && $r5 < "3"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 3: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r5 > "3" && $r5 < "4"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 4: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
		break;
	case ($r5 > "4" && $r5 < "5"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 5: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
	} }?></span> <span class="rating-val">
		<?php 
	   if($r5 == ""){echo "no ratings yet";}
	   else {echo $r5;} }?></span></span>	
</p></p>
<p>As the villainous Ultron emerges, it is up to the Avengers to stop him from enacting his terrible plans, 
and soon uneasy alliances and unexpected action pave the way for an epic and unique global adventure.</p>
</div>
</div>
</div>

	
</div>
<!--card ends-->
	
</div>
<!--inner row ends-->
</div>
<!--left column ends-->

<!--rightt column starts-->
<div class="rightcolumn">
<!--inner row starts-->
<div class="inner-row">
<!--card starts-->
<div class="card upcoming">
<h2>Upcoming</h2>

<!--slideshow container starts-->
<div class="slideshow-container" data-cycle="3000">
<!--slide-->
<div class="mySlides fade">
<img src="upcoming/thorlat.jpg" alt="thor: love and thunder"/>
</div>

<!--slide-->
<div class="mySlides fade">
<img src="upcoming/wakanda4ever.jpg" alt="wakanda forever" />
</div>

<!--slide-->
<div class="mySlides fade">
<img src="upcoming/gog3.webp" alt="guardians of the galaxy vol.3"/>
</div>

<!--slide-->
<div class="mySlides fade">
<img src="upcoming/shehulk.jpg" alt="she hulk" />
</div>

<!--slide-->
<div class="mySlides fade">
<img src="upcoming/iamgroot.jpg" alt="i am groot" />
</div>
</div>
<!--slideshow container ends-->
</div>
<!--card ends-->

<!--card starts-->
<div class="card">
<h2>Countdown</h2>
<p id="count" class="center"></p>
<img src="thorlat.png" alt="thorlat" class="image" />
</div>
<!--card ends-->

<!--card starts-->
<div class="card char clear-float">
<h2>Featured Characters</h2>

<!--character container starts-->
<div class="char-container left">
<a href="loki.html">
<img src="characters/loki.webp" alt="loki" class="char-img" />
<div class="overlay">Loki</div>
</a>
</div>
<!--character container ends-->

<!--character container starts-->
<div class="char-container left">
<a href="ironman.html">
<img src="characters/iron-man.webp" alt="iron-man" class="char-img" />
<div class="overlay">Iron Man</div>
</a>
</div>
<!--character container ends-->

<!--character container starts-->
<div class="char-container left">
<a href="thanos.html">
<img src="characters/thanos.webp" alt="thanos" class="char-img" />
<div class="overlay">Thanos</div>
</a>
</div>
<!--character container ends-->

<!--character container starts-->
<div class="char-container left">
<a href="moonknight.html">
<img src="characters/moon-knight.webp" alt="moon-knight" class="char-img"/>
<div class="overlay">Moon Knight</div>
</a>
</div>
<!--character container ends-->

<!--character container starts-->
<div class="char-container left">
<a href="scarletwitch.html">
<img src="characters/scarlet-witch.webp" alt="scarlet-witch" class="char-img" />
<div class="overlay">Scarlet Witch</div>
</a>
</div>
<!--character container ends-->

<!--character container starts-->
<div class="char-container left">
<a href="msmarvel.html">
<img src="characters/ms-marvel.webp" alt="ms-marvel" class="char-img" />
<div class="overlay">Ms Marvel</div>
</a>
</div>
<!--character container ends-->

<div class="more left"><button id="morebtn"><a href="characters.html">More...</a></button></div>
</div>
<!--card ends-->

<!--card starts-->
<div class="card">
<h2>Contact Us</h2>

<!--contact starts-->
<div class="contact">
<a href="https://www.instagram.com/marvel/" target="_blank"><i class="fa fa-instagram"></i> Instagram</a><br />
<a href="https://www.facebook.com/groups/MCU.Official" target="_blank"><i class="fa fa-facebook"></i> Facebook</a><br />
<a href="https://twitter.com/MarvelStudios" target="_blank"><i class="fa fa-twitter"></i> Twitter</a><br />
<a href="https://www.youtube.com/c/marvel" target="_blank"><i class="fa-brands fa-youtube"></i> Youtube</a><br />
<a href="mailto: mcuwiki@gmail.com" target="_blank"><i class="fa fa-envelope"></i> E-mail</a><br />
</div>
<!--contact ends-->
</div>
<!--card ends-->

</div>
<!--inner row ends-->
</div>
<!--rightt column ends-->
</div>
<!--row wrapper ends-->

<!--footer starts-->
<div class="footer center">
<p>&copy Copyright JKM, Inc. 2022</p>
</div>
<!--footer ends-->
</div>
<!--body wrapper ends-->

<!--back to top-->
<div class="top">
<a href="#">Top <i class="fa-solid fa-angle-up"></i></a>
</div>

<!--script starts-->
<script>
/* slideshow starts */
var containers = document.getElementsByClassName('slideshow-container');
for (let s = 0; s < containers.length; s++) {
var cycle = containers[s].dataset.cycle;
var slides = containers[s].querySelectorAll('.mySlides');
var slideIndex = 0;
showSlides(slides, slideIndex, cycle);
}

function showSlides(slides, slideIndex, cycle) {
for (i = 0; i < slides.length; i++) {
slides[i].style.display = 'none';
}
slideIndex++;
if (slideIndex > slides.length) {
slideIndex = 1;
}
slides[slideIndex - 1].style.display = 'block';
setTimeout(function () {
showSlides(slides, slideIndex, cycle);
}, cycle);
}
/* slideshow ends */

/* mob-nav starts */
var btn = document.getElementById('menubtn');
var menu = document.getElementById('menu');
var c = 0;

btn.onclick = function () {
c++;
if (c % 2 == 1) {
menu.style.display = 'block';
} else {
menu.style.display = 'none';
}
};
window.addEventListener('mouseup', function (event) {
var menu = document.getElementById('menu');
if (event.target != menu) {
menu.style.display = 'none';
}
});
window.onresize = function () {
menu.style.display = 'none';
};
/* mob-nav ends */

/* go back to top button starts */

var topbutton = document.getElementsByClassName('top')[0];
window.onscroll = function () {
var y = window.scrollY;
if (y >= 800) {
topbutton.style.display = 'block';
} else {
topbutton.style.display = 'none';
}
};
/* go back to top button ends */
</script>
<!-- script ends-->

</body>
<!--body ends-->
</html>
