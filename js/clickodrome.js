/**
 * clickodrome.js
 *
 * https://www.itthinx.com/
 */

document.addEventListener(
	'click',
	function ( event ) {

		var date = new Date();
		var datetime = date.getFullYear() + '-' + ( date.getMonth() + 1 ) + '-' + date.getDate() + ' ' +
			date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds() + '::' + date.getMilliseconds();
		console.log( '[' + datetime + '] Javascript click on : ' + event.target.tagName );
		console.log( event.target );
	},
	false
);

//$(document).on(
//	'click',
//	function ( event ) {
//		console.log( 'jQuery click on : ' + event.target.tagName );
//	}
//);
