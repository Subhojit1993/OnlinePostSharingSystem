(function() {

	  "use strict";

	  var toggles = document.querySelectorAll(".hamburger");

	  for (var i = toggles.length - 1; i >= 0; i--) {
	    var toggle = toggles[i];
	    toggleHandler(toggle);
	  };

	  function toggleHandler(toggle) {
	    toggle.addEventListener( "click", function(e) {
	      e.preventDefault();
	      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
	    });
	  }

	  
	  
	})();

$('.register').click(function(e){
	$('.regtype').animate({'opacity':'1','top':'220px'},"fast");
	 e.stopPropagation();
});

$(document).click(function() {
    $('.regtype').animate({'opacity':'0','top':'280px'},"fast");
});