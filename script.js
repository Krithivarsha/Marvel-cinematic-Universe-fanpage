/* toggle theme */
var click = 0;

function change() {
	click++;
	var e = document.getElementById('themebtn');
	if (click % 2 == 0) {
		toggleTheme('style.css');
		e.title = 'Lumos!';
	} else {
		toggleTheme('light.css');
		e.title = 'Nox!';
	}
}

function toggleTheme(value) {
	var sheets = document.getElementsByTagName('link');
	sheets[1].href = value;
}

/* countdown */
var countDownDate = new Date('July 8, 2022 00:00:00').getTime();

var x = setInterval(function () {
	var now = new Date().getTime();
	var distance = countDownDate - now;
	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	document.getElementById('count').innerHTML =
		days +
		' days, ' +
		hours +
		' hours, ' +
		minutes +
		' minutes, ' +
		seconds +
		'  seconds ' +
		'<br />' +
		'until the international release of Thor: Love and Thunder.';
	if (distance < 0) {
		clearInterval(x);
		document.getElementById('count').innerHTML =
			'Thor: Love and Thunder gets released today! Grab your tickets and go the nearest theatre.';
	}
}, 1000);
