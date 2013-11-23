/*$('a').click(function(){
	e.preventDefault();
    alert($(this).text());
    return false;
});*/
$(document).ready(function() {
	$('#close').click(function(e)
	{
		e.preventDefault();

		$('div.comments_wrapper_on').toggleClass('comments_wrapper_on comments_wrapper');

	});

	$('a').click(function(e)
		{
			e.preventDefault();

			var comment = ($(this).text());

			
			$('#comment').empty().html('<h4>Hi <span class="comment_tag">' + comment + '</span></h4>');

		});


});