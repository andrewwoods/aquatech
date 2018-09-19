
/**
* Main Loop
*/
 document.addEventListener("DOMContentLoaded", function(event) {

	window.addEventListener("hashchange", Aquatech.setFocus , false);

});


/**
* Custom 'class' for this theme
*/
var Aquatech = function(){ };

Aquatech.setFocus = function( event ) {

	var element = document.getElementById( location.hash.substring(1) );
	if (element) {

		if (!/^(?:a|select|input|button|textarea)$/i.test( element.tagName )) {
			element.tabIndex = -1;
		}

		element.focus();
	}

};

