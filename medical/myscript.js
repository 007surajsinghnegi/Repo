function myFunction() {
  var x = document.getElementById("nav-flex");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

var card = document.querySelector('.card-item1');
card.addEventListener( 'click', function() {
  card.classList.toggle('is-flipped');
});



