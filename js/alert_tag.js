/*$('a').click(function(){
	e.preventDefault();
    alert($(this).text());
    return false;
});*/
$(document).ready(function() {
	$('#close').click(function(e)
	{
		e.preventDefault();

		$(window.location.replace('members.php'));

	});
});