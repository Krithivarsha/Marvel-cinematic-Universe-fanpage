<?php include("config.php"); 

if (isset($_GET['subscribed'])) {
	if ($_GET['subscribed'] == 'yes') {
	echo "<script>alert('Welcome to the family! You are now subscribed to our website.')</script>";
}
}?>

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
<a href="#"><img src="logo.png" alt="home-logo" height="35px"/></a>
</div>

<!--home-->
<div class="dropdown middle">
<a href="#">HOME</a>
</div>

<!--dropdown-->
<div class="dropdown middle">
<a href="javascript: void(0)">UNIVERSE <i class="fas fa-caret-down" style="font-size: 15px; color: white"></i></a>
<div class="dropdown-content">
<a href="organisations.html">Organisations</a>
<a href="characters.html">Characters</a>
<a href="timeline.html">Timeline</a>
</div>
</div>

<!--dropdown-->
<div class="dropdown middle">
<a href="javascript: void(0)">MOVIES <i class="fas fa-caret-down" style="font-size: 15px; color: white"></i></a>
<div class="dropdown-content">
<a href="phase1.php">Phase 1</a>
<a href="phase2.php">Phase 2</a>
<a href="phase3.php">Phase 3</a>
<a href="phase4.php">Phase 4</a>
</div>
</div>

<!--dropdown-->
<div class="dropdown middle">
<a href="javascript: void(0)">TV SHOWS <i class="fas fa-caret-down" style="font-size: 15px; color: white" ></i></a>
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
<a href="#"><img src="logo.png" alt="home-logo" height="35px" /></a>
</div>
<br />
</div>

<!--mob nav starts-->
<div class="mob-nav" id="menu">
<!--home-->
<div class="mob-dropdown middle">
<a href="#">HOME</a>
</div>
<br />

<!--dropdown-->
<div class="mob-dropdown middle">
<a href="javascript: void(0)">UNIVERSE<i class="fas fa-caret-down right" style="font-size: 15px; color: white"></i></a>
<div class="mob-dropdown-content">
<a href="organisations.html">Organisations</a>
<a href="characters.html">Characters</a>
<a href="timeline.html">Timeline</a>
</div>
</div>
<br />

<!--dropdown-->
<div class="mob-dropdown middle">
<a href="javascript: void(0)">MOVIES<i class="fas fa-caret-down right" style="font-size: 15px; color: white"></i></a>
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
<a href="javascript: void(0)">TV SHOWS<i class="fas fa-caret-down right" style="font-size: 15px; color: white"></i></a>
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
<h2>Home</h2>
<div class="image center">
<img class="image" src="mcu.webp" alt="mcu" />
</div>
<p class="red center">
Beware, this Marvel Cinematic Universe Wiki may
<span class="blue">blow your mind!</span>
</p>
<p class="red center">
<span class="blue">(Just kidding! .... or am I?)</span> But seriously beware, this site contains spoilers for all <span class="blue">Marvel Cinematic Universe</span> media.
</p>
</div>
<!--card ends-->

<!--card starts-->
<div class="card">
<h2>About Us</h2>
<h4>Our Mission</h4>
<p>
MCU wiki powers fan experience - Our mission is to understand, inform, entertain and celebrate fans by building the best entertainment communities, services and experiences.
</p>
<br />
<h4>Our Aim</h4>
<p>
We aim to create a peaceful fandom for the Marvel Cinematic Universe where everyone can share their thoughts and obtain information about their favorite movies and tv shows.
</p>
<br />
<h4>What do we do?</h4>
<p>
Here at the Marvel Cinematic Universe wiki, a wide range of articles on MCU movies, series, and characters are available for all our users. Our primary goal is to provide detailed information to MCU fans so they can know everything they want about the Marvel Cinematic Universe. There is also an option to rate and review your favourite movies and TV shows to let the world know what makes them so great and why you love them. 
</p>
<p>
We are always open to new suggestions and ideas on how to improve the website, so feel free to contact us on any of the  social media links given below. Enter your email address to stay updated on all things Marvel by receiving our official newsletter(Don't worry we won't spam you).
</p>
</div>
<!--card ends-->

<!--card starts-->
<div class="card clear-float">

<h2>Latest Updates</h2>

<!--news container starts-->
<div class="news-card-container left">
<!--news card starts-->
<div class="news-card">
<img src="News/thornews.png" alt="thor-news" /><button class="modal-button" href="#mymodal1"> Tickets For ‘Thor: Love and Thunder’ Arrive In This Realm on Monday </button>

<!--modal starts-->
<div id="mymodal1" class="modal">
<!--modal content begins-->
<div class="modal-content">
<span class="close">&times;</span>
<div class="genre">MOVIES</div>
<div class="date">Published June 8, 2022</div>
<h2 class="headline">Tickets For ‘Thor: Love and Thunder’ Arrive In This Realm on Monday</h2>
<div class="deck">One month till Thor’s latest cosmic adventure begins.</div>
<div class="by">BY RACHEL PAIGE</div>
<img src="News/thornews.png" alt="thor-news" class="modal-img"/>

<!--modal article begins-->
<div class="article">
<p>
In just one month, the Space Viking returns. Marvel Studios’ Thor: Love and Thunder arrives in theaters on July 8th but you don’t have to wait until then to start preparing for the cosmic adventure — tickets for the film go on sale Monday, June 13.
</p>
<p>
The film finds Thor (Chris Hemsworth) on a journey unlike anything he’s ever faced — a search for self-discovery. But his retirement is interrupted by a galactic killer known as Gorr the God Butcher (Christian Bale), who seeks the extinction of the gods. To combat the threat, Thor enlists the help of King Valkyrie (Tessa Thompson), Korg (Taika Waititi), and ex-girlfriend Jane Foster (Natalie Portman), who — to Thor’s surprise — inexplicably wields his magical
hammer, Mjolnir, as the Mighty Thor. Where will this quest take them? On a trek to Olympus where Zeus (Russell Crowe) reigns supreme, for starters.
</p>
<p>
Together, they embark upon a harrowing cosmic adventure to uncover the mystery of the God Butcher’s vengeance and stop him before it’s too late. 
</p>
<p>
Returning director Taika Waititi is back to helm Thor: Love and Thunder, and the film is produced by Kevin Feige and Brad Winderbaum.
</p>
</div>
<!--modal article ends-->

<h3><i>Adventure awaits, Thor: Love and Thunder opens in theaters July 8, 2022.</i></h3>
</div>
<!--modal content ends-->
</div>
<!--modal ends-->
</div>
<!--news card ends-->
</div>
<!--news container ends-->

<!--news container starts-->
<div class="news-card-container left">
<!--news card starts-->
<div class="news-card">
<img src="News/drnews.jpg" alt="dr-news" /><button class="modal-button" href="#mymodal2">Stream 'Doctor Strange in the Multiverse of Madness' June 22 on Disney+</button>

<!--modal starts-->
<div id="mymodal2" class="modal">
<!--modal content begins-->
<div class="modal-content">
<span class="close">&times;</span>
<div class="genre">MOVIES</div>
<div class="date">Published June 13, 2022</div>
<h2 class="headline">Stream 'Doctor Strange in the Multiverse of Madness' June 22 on Disney+</h2>
<div class="deck">Take a trip back into the Multiverse!</div>
<div class="by">BY CHRISTINE DINH</div>
<img src="News/drnews.jpg" alt="dr-news" class="modal-img"/>

<!--modal article begins-->
<div class="article">
<p>The Multiverse has changed forever.</p>
<p>
Disney+ announced today that the Marvel Studios' hit blockbuster, Doctor Strange in the Multiverse of Madness, will arrive on the service exclusively later this month on June 22!
</p>
<p>
In a brand-new spot, the cast of the film thanks the fans for the incredible support shown for the film, above!
</p>
<p>
In Doctor Strange in the Multiverse of Madness, the MCU unlocks the Multiverse and pushes its boundaries further than ever before. Journey into the unknown with Doctor Strange, who, with the help of mystical allies both old and new, traverses the mind-bending and dangerous alternate realities of the Multiverse to confront a mysterious new adversary.
</p>
<p>
Doctor Strange in the Multiverse of Madness stars Benedict Cumberbatch, Chiwetel Ejiofor, Elizabeth Olsen, Benedict Wong, Xochitl Gomez, with Michael Stühlbarg, and Rachel McAdams. The film is directed by Sam Raimi, and Kevin Feige is the producer. Louis D’Esposito, Victoria Alonso, Eric Hauserman Carroll and Jamie Christopher serve as executive producers. The screenplay was written by Michael Waldron.
</p>
</div>
<!--modal article ends-->

<h3><i>Doctor Strange in the Multiverse of Madness arrives on Disney+ on June 22!</i></h3>
</div>
<!--modal content ends-->
</div>
<!--modal ends-->
</div>
<!--news card ends-->
</div>
<!--news container ends-->

<!--news container starts-->
<div class="news-card-container left">
<!--news card starts-->
<div class="news-card">
<img src="News/ms-marvel.webp" alt="ms-marvel-news" />
<button class="modal-button" href="#mymodal3">Discover Kamala Khan's Journey with 'A Fan Guide to Ms. Marvel' on Disney+</button>

<!--modal starts-->
<div id="mymodal3" class="modal">
<!--modal content begins-->
<div class="modal-content">
<span class="close">&times;</span>
<div class="genre">TV SHOWS</div>
<div class="date">Published June 17, 2022</div>
<h2 class="headline">Discover Kamala Khan's Journey with 'A Fan Guide to Ms. Marvel' on Disney+</h2>
<div class="deck">Kamala's adventure begins June 8 on Disney+.</div>
<div class="by">BY RACHEL PAIGE</div>
<img src="News/ms-marvel.webp" alt="ms-marvel-news" class="modal-img"/>

<!--modal article begins-->
<div class="article">
<p>
Wondering how to fully prepare for the arrival of Marvel Studios' Ms. Marvel on Disney+? If you're looking for a quick rundown of everything Kamala Khan, "A Fan's Guide to Ms. Marvel" is now available to stream on the platform!
</p>
<p>
The documentary short gives viewers an exclusive look behind-the-scenes on the original series, from its comic book origins to its development and production. Featuring interviews with the creative team and cast, including star Iman Vellani — who once made her own Ms. Marvel costume!
</p>
<p>
Ms. Marvel is a new, original series that introduces Kamala Khan, a Muslim American teenager growing up in Jersey City. An avid gamer and a voracious fan-fiction scribe, Kamala is a Super Hero mega-fan with an oversized imagination—particularly when it comes to Captain Marvel. Yet Kamala feels invisible both at home and at school—that is, until she gets super powers like the heroes she’s always looked up to. Life gets better with super powers, right?
</p>
<p>
Iman Vellani stars as Kamala Khan aka Ms. Marvel. The cast also includes Aramis Knight, Saagar Shaikh, Rish Shah, Zenobia Shroff, Mohan Kapur, Matt Lintz, Yasmeen Fletcher, Laith Nakli, Azhar Usman, Travina Springer, and Nimra Bucha.
</p>
<p>
Episodes are directed by Adil El Arbi & Bilall Fallah, Meera Menon, and Sharmeen Obaid-Chinoy. Kevin Feige, Louis D’Esposito, Victoria Alonso, and Bisha K. Ali are the executive producers. Co-executive producers for the series are Sana Amanat and Trevor Waterson, and Bisha K. Ali is the head writer.
</p>
</div>
<!--modal article ends-->

<h3><i>Watch the short now on Disney+, and Ms. Marvel premieres on June 8!</i></h3>
</div>
<!--modal content ends-->
</div>
<!--modal ends-->
</div>
<!--news card ends-->
</div>
<!--news container ends-->
	
</div>
<!--card ends-->

<!--card starts-->
<div class="card posters">
<h2>Movies and TV Shows</h2>

<!--slideshow container-->
<div class="slideshow-container" data-cycle="2000">
<!--slide1-->
<div class="mySlides fade">
<img src="posters/antman.jpg" alt="antman and the wasp" />
</div>

<!--slide2-->
<div class="mySlides fade">
<img src="posters/black-panther.jpg" alt="black panther" />
</div>

<!--slide3-->
<div class="mySlides fade">
<img src="posters/falconwinter.jpeg" alt="falcon and the winter soldier"/>
</div>

<!--slide4-->
<div class="mySlides fade">
<img src="posters/gotg.jpg" alt="guardians of the galaxy" />
</div>

<!--slide5-->
<div class="mySlides fade">
<img src="posters/loki.webp" alt="loki" />
</div>

<!--slide6-->
<div class="mySlides fade">
<img src="posters/infinitywar.jpg" alt="inifnity war" />
</div>

<!--slide7-->
<div class="mySlides fade">
<img src="posters/nowayhome.jpg" alt="no way home" />
</div>

<!--slide8-->
<div class="mySlides fade">
<img src="posters/thor.webp" alt="thor: ragnorok" />
</div>

<!--slide9-->
<div class="mySlides fade">
<img src="posters/wandavision.jpg" alt="wandavision" />
</div>

<!--slide10-->
<div class="mySlides fade">
<img src="posters/whatif.jpg" alt="whatif" />
</div>
</div>
<!--slideshow container ends-->
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

<!--card starts-->
<div class="card">
<h2>Subscribe</h2>
<form method="post" action="subscribe.php">
<div class="subscribe">
<input type="text" name="name" placeholder="Please enter your name" required/><br>
<input type="email" name="mailid" placeholder="Please enter your mail id" title="format: someone@example.com" required/><br>
<span><input type="checkbox" name="subscribe" id="subscribe" />Newsletter</span>
<input type="submit" name="sub" value="SUBSCRIBE" id="subscription" />
</div>
</form>
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

/* news modal starts */
var btn = document.querySelectorAll('button.modal-button');
var modals = document.querySelectorAll('.modal');
var spans = document.getElementsByClassName('close');

for (var i = 0; i < btn.length; i++) {
btn[i].onclick = function (e) {
e.preventDefault();
modal = document.querySelector(e.target.getAttribute('href'));
modal.style.display = 'block';
};
}
for (var i = 0; i < spans.length; i++) {
spans[i].onclick = function () {
for (var index in modals) {
if (typeof modals[index].style !== 'undefined')
modals[index].style.display = 'none';
}
};
}
window.onclick = function (event) {
if (event.target.classList.contains('modal')) {
for (var index in modals) {
if (typeof modals[index].style !== 'undefined')
modals[index].style.display = 'none';
}
}
};
/* news modal ends */

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

/*checkbox*/
// Check
document.getElementById("checkbox").checked == true;

// Uncheck
document.getElementById("checkbox").checked = false;
/*checkbox*/
</script>
<!-- script ends-->

</body>
<!--body ends-->
</html>
