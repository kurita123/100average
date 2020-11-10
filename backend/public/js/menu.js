$('.open').each(function(){
  $(this).css("height",$(this).height()+"px");
});
$('.open').hide();
$('.btn').click(function () {
  $('.open').slideToggle('slow');
  $(this).toggleClass('on');
});
