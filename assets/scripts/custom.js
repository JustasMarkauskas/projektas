// navigacinio meniu paslepimas scrolinant zemyn 

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("top-nav").style.top = "0";
  } else {
    document.getElementById("top-nav").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}



// Burgerio meniu


$(document).ready(function(){
				$('.burger').click(function(){
					$('.topnavmenu').toggleClass('show');
				});
			});