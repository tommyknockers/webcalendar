<?php /* $Id$  */ 
defined( '_ISVALID' ) or die( 'You cannot access this file directly!' );

$color = $arinc[3];
?>

function sendColor ( color ) {
	var thisInput = window.opener.document.prefform.<?php echo $color; ?>;

  thisInput.value = color;
	if (thisInput.onkeyup) {
		// This updates the color swatch for this color input.  It relies on the
		// <input>s of the prefform having onkeyup="updateColor(this);" as an
		// attribute
		thisInput.onkeyup();
	}
  window.close ();
}
