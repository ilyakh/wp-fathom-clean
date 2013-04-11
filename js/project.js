$(document).ready( function() {
	/* exludes the mobile user agents from the fathom-view */
	if ( !( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) )) {
		var fathom = new Fathom('#presentation', {
		displayMode: 'multi'
		});
	}
});
