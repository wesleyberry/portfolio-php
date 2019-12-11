var rotate = 360;
$(".intro a[href^='#']").on("click", function(e) {
    e.preventDefault();

    var hash = this.hash;
 
    $('html, body').animate({
        scrollTop: $(hash).offset().top
    }, 1000, function(){
 
    window.location.hash = hash;
    });
});

window.sr = ScrollReveal();
sr.reveal('.titleH3', {
    duration: 1000, 
    origin: 'bottom',
    distance: '500px',
});
sr.reveal('.titleName', {
    duration: 1000,
    delay: 250, 
    origin: 'bottom',
    distance: '500px'
});
sr.reveal('.titleProfession', {
    duration: 1000, 
    delay: 450,
    origin: 'bottom',
    distance: '500px'
});
sr.reveal('.scrollNav', {
    duration: 1000, 
    delay: 650,
    origin: 'bottom',
    distance: '500px'
});
sr.reveal('.social', {
    duration: 1250,
    delay: 650,
    origin: 'left',
    distance: '200px'
});
sr.reveal('.emailCont', {
    duration: 1250,
    delay: 650,
    origin: 'right',
    distance: '200px'
});

window.onload = function() {
	lax.setup() // init

	const updateLax = () => {
		lax.update(window.scrollY)
		window.requestAnimationFrame(updateLax)
	}

	window.requestAnimationFrame(updateLax)
}