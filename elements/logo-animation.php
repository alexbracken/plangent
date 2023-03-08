<script>
window.onload = function () {
    if (sessionStorage.getItem("nameAnimationHasPlayed") === null) {
        var loadAnimation = gsap.fromTo(".letter", {y: 30, opacity: 0}, {y: 0, opacity: 1, stagger: 0.05, ease: "elastic", duration: 2, delay: 0.5});
        loadAnimation.play()
        sessionStorage.setItem("nameAnimationHasPlayed", true);
    }
}


var grid = document.querySelector('.grid');
var msnry;

imagesLoaded( grid, function() {
  // init Isotope after all images have loaded
  msnry = new Masonry( grid, {
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
  });
});
</script>