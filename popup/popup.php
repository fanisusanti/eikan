<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POPUP</title>
	<!-- Template Stylesheet -->
    <link href="style1.css" rel="stylesheet">
</head>
<body>
<!-- content -->
    <section>
      <h1><em>Smart Welcome Popup</em></h1>
      <p><u>Smart Welcome PopUp</u> is the responsive css welcome popup to welcome your website visitors and ask them to subscribe for the newsletter or close the popup or go to some link.</p>
<hr/><em>Refresh me Please!</em>
    </section>
<!-- end -->

<!-- Close Box -->
<div class="box">
<span class="close"></span>
<div class="content">

<!-- Close Box Content -->

<div id="card">
<spa>Go<b>o</b><b>g</b><b>l</b>e</spa>
<div class="content">
<span class="text">
<h2>sHarjeet<span>&nbsp;</span></h2>
</span>
<ul>
<li>
        <span><a href="http://fundaclear.com/"><b>Funda Clear</b> (A Professional CSS Community)</a></span>
        <span ><a href="http://fundaclear.com/">Join My Forum Please!</a></span>
        <span>Mobile: +1234-567-89</span>
        <span>Email: <b>sharjeet90.s</b>@gmail.com</span>
</li>
</ul>
</div>
</div>
</div>
</div>
<!-- end -->

<!-- popup -->
<div class="popScroll">
<div class="popup">
<span class="ribbon top-left ribbon-primary">
<small>Hello!</small>
</span> 
<h1>Join Funda Clear Now</h1>
  <div class="subscribe-widget">
<!-- form -->
<form id="subscribe-form">
<input type="email" name="email" placeholder="Your Email Please" class="email-form" required>
<button type="submit" class="button">Subscribe</button>
</form>
<!-- end form-->
</div>
<p>Close the Pop up or You can Go Home Now.</p>
<div id="option">
<a href="#" id="home" class="boxi">Home</a> 
<em>or</em>
<a href="#" id="close" class="boxi closei">Close</a>
<p class="adstext"><u>Advertisement</u></p>
<div class='video-wrapper'>
<div class='video'>
<iframe id="player" width="290" height="200" src="https://www.youtube.com/embed/GAamW074WdM" frameborder="0" allowfullscreen></iframe>
</div>
</div>
</div></div>
</div>
<!--ending popup-->
</body>
    <script>
    var $box = $('.box');

  $('.closei').each(function(){
    var color = $(this).css('backgroundColor');
    var content = $(this).html();
    $(this).click(function() {
    $box.css('backgroundColor', color);
    $box.addClass('open');
    $box.find('p').html(content);
  });
    
  $('.close').click(function() {
    $box.removeClass('open');
    $box.css('backgroundColor', 'transparent');
    
 });
  
  $('body').toggleClass('overlay');
$("#pop-toggle").click(function(){
  $(".popup").toggle();
  $('body').toggleClass('overlay');
})
$(".close").click(function(){
  $(".popup").toggle();
  $('body').toggleClass('overlay');
});
  
});
    </script>
</html>