let container = document.getElementById("driver-med-slideshow");
let slides = document.getElementsByClassName("driver-med-slides");
let bubble1 = document.getElementById("slideshow-bubble-1");
let bubble2 = document.getElementById("slideshow-bubble-2");
let bubble3 = document.getElementById("slideshow-bubble-3");
let i = 2,
	prev = 1;

var slideInterval = setInterval(slideshow, 2500);

function resetSlideshow() { // hides all slides
	for (let j = 0; j < 3; ++j) {
		slides[j].style.display = "none";
	}
}

function slideshow() { // hides previous slide and displays current slide
	prev = (i++) % 3;
	i %= 3;

    console.log("prev: " + prev + " curr: " + i);

    resetSlideshow();

	slides[i].style.display = "block";
}

function bubbleMouseOver(n) { // stops slideshow
    prev = (n + 1) % 3;
    i = (n + 2) % 3;
    console.log("prev: " + prev + " curr: " + (n - 1));
	clearInterval(slideInterval);
	resetSlideshow();
	slides[n - 1].style.display = "block";

}

container.onmouseover = function() {
	clearInterval(slideInterval);
}

container.onmouseout = function() {
	slideInterval = setInterval(slideshow, 2500);
}
