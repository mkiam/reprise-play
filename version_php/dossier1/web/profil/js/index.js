// This just toggles the follow/following of the button
$('a.follow').click(function () {
  $(this).toggleClass('followed');
  
  if($(this).hasClass('followed')) {
    $(this).text('Connecté(e)');
    $('ul li:last-child').html('325<span>Connectés</span>');
  }
  else {
    $(this).text('Se connecter');
    $('ul li:last-child').html('324<span>Connectés</span>');
  }
});
    