<?php
header("Content-Type: text/html; charset=UTF-8", true);
header("Cache-Control: max-age=3600", true);
header("Last-Modified: " . gmdate("D, d M Y H:i:s", time()) . " GMT", true);
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 3600) . " GMT", true);
header("Pragma: public");
header("X-Powered-By: FCWS", true);
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Mårten Thavenius</title>
<style type="text/css">
body {padding: 1em 1em;font-family:'Georgia',serif;font-size: 100%}
h1 {font-size:2.8em;font-weight:normal;line-height:1.1;margin:0 0 .3em}
p, address {font-size:1.5em;line-height:1.6; margin:0;font-style:normal;display:block}
p {margin-bottom: 1em; line-height: 1.2; font-style: italic}
.phone, .linkedin {margin-bottom:.6em}
a {color:#c00;text-decoration:none}
@media ( max-width: 32em ) {
body { padding: .5em; }
h1 { font-size: 2em; }
p, address {font-size:1.4em;}
}
</style>
</head>
<body>
<div id="contact" class="vcard">
<h1 class="fn">Mårten Thavenius</h1>
<p>Full stack web developer &amp; typeface designer</p>
<address class="email">&#109;&#097;&#114;&#116;&#101;&#110;&#64;&#116;&#104;&#097;&#118;&#101;&#110;&#105;&#117;&#115;&#046;&#115;&#101;</address>
<address class="phone">+46 707 30 75 20</address>
<address class="url" rel="me"><a href="http://fontcaster.com/">fontcaster.com</a></address>
<address class="url" rel="me"><a href="https://twitter.com/martent">@martent</a></address>
<address class="url" rel="me"><a href="https://github.com/martent?tab=activity">github.com/martent</a></address>
<address class="url linkedin" rel="me"><a href="http://www.linkedin.com/in/martent">/in/martent</a></address>
</div>
<script>var _gaq=_gaq || [];_gaq.push(['_setAccount','UA-598233-4']);_gaq.push(['_trackPageview']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
</body>
</html>
