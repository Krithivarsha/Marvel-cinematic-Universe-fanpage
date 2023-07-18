<?php
include('config.php');

if (isset($_GET['posted'])) {
	if ($_GET['posted'] == 'yes') {
	echo "<script>alert('Your review was posted successfully!')</script>";
	}
}
?>

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
<a href="disney.phpr">Disney+ series</a>
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
<h2>Reviews</h2>
<!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="openFilter(event, 'all')" id="defaultOpen">All</button>
  <button class="tablinks" onclick="openFilter(event, 'movies')">Movies</button>
  <button class="tablinks" onclick="openFilter(event, 'series')">Series</button>
</div>

<!-- Tab content -->
<!-- all filter starts-->
<div id="all" class="tabcontent">
 <?php

if(ISSET($_GET['page'])) {
$page = $_GET['page'];
} else {
$page = 1;
}
$start_from = ($page - 1)*$rpp;
$sql = "SELECT r.name, r.category, r.msname, r.rating, r.comment, r.time, p.url
FROM ratings AS r
JOIN posters AS p ON p.pname = r.msname 
ORDER by r.time DESC
LIMIT $start_from, ".$rpp;
$result=$conn->query($sql);

 while($data = mysqli_fetch_assoc($result)) {
 ?>
<!-- review card starts-->
<div class="card review">
<!--grid container starts-->
<div class="grid-container">
  <div class="item1">
	  <span class="left"><?php if($data['name'] == "") {echo "Anonymous";}
	 else {echo $data['name'];} ?></span>
	  <span class="right time"><?php echo $data['time'];?></span>
	  <br><span class="star"><?php switch ($data['rating']) {
		 case 1: echo "★";
	   break;
		 case 2: echo "★★";
	   break;
		 case 3: echo "★★★";
	   break;
		 case 4: echo "★★★★";
	   break;
		 case 5: echo "★★★★★";
	   break; }?></span>
	</div>
  <div class="item2">
	  <span class="category"><?php echo $data['category'].'<br>';?></span> <?php echo $data['msname']; ?> <br><img class ="revimg" src="<?php echo $data['url']?>" alt="<?php echo $data['msname']?>" /></div>
  <div class="item3"><?php echo $data['comment']; ?> </div>

	</div>
<!--grid container ends-->
</div>
<!-- review card ends-->
 <?php }
?> 
<?php 
$sql = "SELECT COUNT(id) AS total FROM ratings";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $rpp); // calculate total pages with results

echo "<div class='center'><div class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='review.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> ";
};
echo "</div></div>"

?>
</div>

<!--all filter ends-->

<!--movie filter starts-->
<div id="movies" class="tabcontent">
  <?php
$sql = "SELECT r.name, r.category, r.msname, r.rating, r.comment, r.time, p.url
FROM ratings AS r
JOIN posters AS p ON p.pname = r.msname 
WHERE category = 'Movies'
ORDER by r.time DESC";
$result=$conn->query($sql);
  while($data = mysqli_fetch_assoc($result)) {
 ?>
<!-- review card starts-->
<div class="card review">
<!--grid container starts-->
<div class="grid-container">
  <div class="item1">
	  <span class="left"><?php if($data['name'] == "") {echo "Anonymous";}
	 else {echo $data['name'];} ?></span>
	  <span class="right time"><?php echo $data['time'];?></span>
	  <br><span class="star"><?php switch ($data['rating']) {
		 case 1: echo "★";
	   break;
		 case 2: echo "★★";
	   break;
		 case 3: echo "★★★";
	   break;
		 case 4: echo "★★★★";
	   break;
		 case 5: echo "★★★★★";
	   break; }?></span>
	</div>
  <div class="item2">
	  <span class="category"><?php echo $data['category'].'<br>';?></span> <?php echo $data['msname']; ?> <br><img class ="revimg" src="<?php echo $data['url']?>" alt="<?php echo $data['msname']?>" /></div>
  <div class="item3"><?php echo $data['comment']; ?> </div>

	</div>
<!--grid container ends-->
</div>
<!-- review card ends-->
 <?php } ?>


</div>
<!--movie filter ends-->

<!--series filter starts-->
<div id="series" class="tabcontent"><?php
$sql = "SELECT r.name, r.category, r.msname, r.rating, r.comment, r.time, p.url
FROM ratings AS r
JOIN posters AS p ON p.pname = r.msname 
WHERE category = 'TV Shows'
ORDER by r.time DESC";
$result=$conn->query($sql);
  while($data = mysqli_fetch_assoc($result)) {
 ?>
<!-- review card starts-->
<div class="card review">
<!--grid container starts-->
<div class="grid-container">
  <div class="item1">
	  <span class="left"><?php if($data['name'] == "") {echo "Anonymous";}
	 else {echo $data['name'];} ?></span>
	  <span class="right time"><?php echo $data['time'];?></span>
	  <br><span class="star"><?php switch ($data['rating']) {
		 case 1: echo "★";
	   break;
		 case 2: echo "★★";
	   break;
		 case 3: echo "★★★";
	   break;
		 case 4: echo "★★★★";
	   break;
		 case 5: echo "★★★★★";
	   break; }?></span>
	</div>
  <div class="item2">
	  <span class="category"><?php echo $data['category'].'<br>';?></span> <?php echo $data['msname']; ?> <br><img class ="revimg" src="<?php echo $data['url']?>" alt="<?php echo $data['msname']?>" /></div>
  <div class="item3"><?php echo $data['comment']; ?> </div>

	</div>
<!--grid container ends-->
</div>
<!-- review card ends-->
 <?php } ?>


</div>
<!--series filter ends-->
	
</div>
<!--card ends-->

</div>
<!--inner row ends-->
</div>
<!--left column ends-->

<!--right column starts-->
<div class="rightcolumn" >
<!--inner row starts-->
<div class="inner-row" >


<!--card starts-->
<div class="card"> 
<h2>Post a review</h2>
<form method="post" action="insert.php">							
<h4>NAME:</h4>
<input type="text" name="username" placeholder="Enter your name..." id="username" />
<h4>EMAIL:</h4>
<input type="email" name="email" placeholder="Enter your email..." id="email" required />

<h4>CATEGORY:</h4>
<select id="category" onchange="disable(this)" name="category" style="width: 100%; height:40px;" required>
<option value="none" selected disabled hidden>Select a category</option>
<option value="Movies">Movies</option>
<option value="TV Shows">TV Shows</option>
</select>

<h4 id="phasesid">PHASES:</h4>
<select id="phases" onchange="display(this)" name="phases" style="width:100%; height:40px;" required>
<option value="none" selected disabled hidden>Select a phase</option>
<option value="1">Phase 1</option>
<option value="2">Phase 2</option>
<option value="3">Phase 3</option>
<option value="4">Phase 4</option>
</select>

<h4 id="moviesid">MOVIES:</h4>
<select id="movies1" name="msname" style="width:100%; height:40px;" required>
<option value="none" selected disabled hidden>Select a movie</option>
<option value="Iron Man 1">Iron Man 1</option>
<option value="Iron Man 2">Iron Man 2</option>
<option value="Captain America">Captain America</option>
<option value="Thor">Thor</option>
<option value="The Avengers">Avengers</option>
</select>

<select id="movies2" name="msname" style="width:100%; height:40px;" required>
<option value="none" selected disabled hidden>Select a movie</option>
<option value="Iron Man 3">Iron Man 3</option>
<option value="Thor: Dark World">Thor: Dark World</option>
<option value="Captain America: The Winter Soldier">Captain America: The Winter Soldier</option>
<option value="Guardians of the Galaxy">Guardians of the Galaxy</option>
<option value="Avengers: Age of Ultron">Avengers: Age of Ultron</option>
</select>

<select id="movies3" name="msname" style="width:100%; height:40px;" required>
<option value="none" selected disabled hidden>Select a movie</option>
<option value="Captain America: The Civil War">Captain America: The Civil War</option>
<option value="Doctor Strange">Dr Strange</option>
<option value="Guardians of the Galaxy 2">Guardians of the Galaxy 2</option>
<option value="Spiderman: Homecoming">Spiderman: Homecoming</option>
<option value="Thor: Ragnarok">Thor: Ragnarok</option>
</select>	

<select id="movies4" name="msname" style="width:100%; height:40px;" required>	
<option value="none" selected disabled hidden>Select a movie</option>
<option value="Black Widow">Black Widow</option>
<option value="Eternals">Eternals</option>
<option value="Spiderman: No Way Home">Spiderman: No Way Home</option>
<option value="Doctor Strange: In the Multiverse of Madness">Dr Strange: In the Multiverse of Madness</option>
</select>

<h4 id="tvid">TV SHOWS:</h4>
<select id="shows" name="shows" onchange="hide(this)" style="width:100%; height:40px;" required>
<option value="none" selected disabled hidden>Select a category</option>	
<option value="Marvel Heroes">Marvel Heroes</option>
<option value="Disney+ series">Disney+ series</option>
</select>

<h4 id="seriesid">SERIES:</h4>
<select id="series1" name="msname" style="width:100%; height:40px;" required>
<option value="none" selected disabled hidden>Select a series</option>
<option value="Agents of S.H.I.E.L.D.">Agents of S.H.I.E.L.D.</option>
<option value="Agent Carter">Agent Carter</option>
</select>
<select id="series2" name="msname" style="width:100%; height:40px;" required>
<option value="none" selected disabled hidden>Select a series</option>
<option value="Wanda Vision">Wanda Vision</option>
<option value="The Falcon and The Winter Soldier">The Falcon and the Winter Soldier</option>
<option value="Loki">Loki</option>
<option value="What If...?">What If...?</option>
</select>

<h4>RATING:</h4>
<div class="clear-float">
<div class="rating">
<input type="radio" name="rating" value="5" id="5"><label for="5">★</label>
<input type="radio" name="rating" value="4" id="4"><label for="4">★</label>
<input type="radio" name="rating" value="3" id="3"><label for="3">★</label>
<input type="radio" name="rating" value="2" id="2"><label for="2">★</label>
<input type="radio" name="rating" value="1" id="1" required /><label for="1">★</label>

</div>
</div>

<h4>REVIEW:</h4>
<textarea id="comment" name="comment" style="width:100%; height:auto; resize: none;" rows="10" placeholder="Write a review..."></textarea>
<input type="submit" name="submit" value="Submit" id="reviewbtn" />
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
	
/*select options*/


document.getElementById("seriesid").hidden = true;
document.getElementById("series1").hidden = true;
document.getElementById("series2").hidden = true;
		
		
document.getElementById("moviesid").hidden = true;
document.getElementById("movies1").hidden = true;
document.getElementById("movies2").hidden = true;
document.getElementById("movies3").hidden = true;
document.getElementById("movies4").hidden = true;
		
document.getElementById("phasesid").hidden = true;
document.getElementById("phases").hidden = true;
		
		
document.getElementById("tvid").hidden = true;
document.getElementById("shows").hidden = true;
		
function disable(cat){

if(cat.value == "Movies") {
document.getElementById("shows").hidden = true;
document.getElementById("tvid").hidden = true;
document.getElementById("seriesid").hidden = true;
document.getElementById("series1").hidden = true;
document.getElementById("series2").hidden = true;
document.getElementById("phases").hidden = false;
document.getElementById("phasesid").hidden = false;
document.getElementById("movies").hidden = false;
document.getElementById("moviesid").hidden = true;
document.getElementById("movies").hidden = true;
}
	
else if(cat.value == "TV Shows") {
document.getElementById("shows").hidden = false;
document.getElementById("tvid").hidden = false;
document.getElementById("seriesid").hidden = true;
document.getElementById("series1").hidden = true;
document.getElementById("series2").hidden = true;
document.getElementById("phases").hidden = true;
document.getElementById("phasesid").hidden = true;
document.getElementById("moviesid").hidden = true;
document.getElementById("movies1").hidden = true;
document.getElementById("movies2").hidden = true;
document.getElementById("movies3").hidden = true;
document.getElementById("movies4").hidden = true;
}
	
}

function hide(cat){
if(cat.value == "Marvel Heroes") {
document.getElementById("seriesid").hidden = false;
document.getElementById("series1").hidden = false;
document.getElementById("series2").hidden = true;
}

else if(cat.value == "Disney+ series") {
document.getElementById("seriesid").hidden = false;
document.getElementById("series1").hidden = true;
document.getElementById("series2").hidden = false;
}
	
}

function display(cat){
if(cat.value == "1") {
document.getElementById("moviesid").hidden = false;
document.getElementById("movies1").hidden = false;
document.getElementById("movies2").hidden = true;
document.getElementById("movies3").hidden = true;
document.getElementById("movies4").hidden = true;
}
else if(cat.value == "2") {
document.getElementById("moviesid").hidden = false;
document.getElementById("movies1").hidden = true;
document.getElementById("movies2").hidden = false;
document.getElementById("movies3").hidden = true;
document.getElementById("movies4").hidden = true;
}
else if(cat.value == "3")	{
document.getElementById("moviesid").hidden = false;
document.getElementById("movies1").hidden = true;
document.getElementById("movies2").hidden = true;
document.getElementById("movies3").hidden = false;
document.getElementById("movies4").hidden = true;
}
else if(cat.value == "4") {
document.getElementById("moviesid").hidden = false;
document.getElementById("movies1").hidden = true;
document.getElementById("movies2").hidden = true;
document.getElementById("movies3").hidden = true;
document.getElementById("movies4").hidden = false;
}
}

/*tab links start*/
	
function openFilter(evt, filter) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(filter).style.display = "block";
  evt.currentTarget.className += " active";
}
/* to open all filter by default*/	
document.getElementById("defaultOpen").click();
/*tab links end*/

</script>
<!-- script ends-->

</body>
<!--body ends-->
</html>
