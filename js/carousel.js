// carousel variables
var slides = $('.slider .slide');
var slidesLength = slides.length;
//current
var i = 0;
//next
var n = i + 1;
//next on deck
var ne = n + 1;
//prev
var p = slidesLength - 1;
//prev on deck
var pr = slidesLength - 2;

window.setInterval(nextSlide, 5000);

$('#prev').click(function() {
    prevSlide();
});

$('#next').click(function() {
    nextSlide();
});

function nextSlide() {
    // prev slide is cleared
    slides.eq(p).removeClass('prev');
    // active slide becomes prev slide
    slides.eq(i).removeClass('active').addClass('prev');
    // next slide becomes active slide
    slides.eq(n).removeClass('next').addClass('active');
    // next-on-deck becomes next slide
    slides.eq(ne).addClass('next');
    // counters
    pr = (pr + 1) % slidesLength;
    p = i;
    i = (i + 1) % slidesLength;
    n = (n + 1) % slidesLength;
    ne = (ne + 1) % slidesLength;

    console.log(pr + ' ' + p + ' ' + i + ' ' + n + ' ' + ne);
}

function prevSlide() {
    // next slide is cleared
    slides.eq(n).removeClass('next');
    // prev on deck becomes prev slide
    slides.eq(pr).addClass('prev');
    // prev slide becomes active slide
    slides.eq(p).removeClass('prev').addClass('active');
    // active slide becomes next slide
    slides.eq(i).removeClass('active').addClass('next');
    ne = (ne - 1) % slidesLength; 
    n = i;
    i = (i - 1) % slidesLength;
    p = (p - 1) % slidesLength;
    pr = (pr - 1) % slidesLength;
    console.log(pr + ' ' + p + ' ' + i + ' ' + n + ' ' + ne);
}