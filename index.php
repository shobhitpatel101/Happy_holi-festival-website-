<html>
<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3211632818124138",
    enable_page_level_ads: true
  });
</script>

<title>
Happy Holi
</title>
<style>
span {
    width: 100px;
    height: 50px;
    font-weight: bold;
    position: relative;
	animation-iteration-count: infinite;
    animation-direction: alternate;
    animation: mymove 5s infinite;
    
    
}
button
{
    animation: example 5s infinite;
}
input
{
    animation: example1 3s infinite;
    
}
@keyframes example1
{
    5%{background-color:red;}
    15%{background-color:white;}
    
    
}
@keyframes example{
    0%   {background-color:yellow;}
    25%  {background-color:orange;}
    
    50%  {background-color:white;}
    
    100% {background-color:grey;}
}


@keyframes mymove {
     0%   {color:red;left:0px}
    25%  {color:yellow;left:50px;top:15px}
    35%  {color:white;left:100px;top:30px}
    45%  {color:white;left:100px;top:5px}
    55%  {color:white;left:100px;top:-5px}
    65%  {color:white;left:100px;top:-10px}
    75%  {color:orange;left:50px;top:-20px}
    100% {color:red;left:0px}
}

</style>

</head>
<body bgcolor="black" style="background-image:url(bg.gif)">
<div style="width:100%;height:15%">
<img src="happy_holi.gif" width=100% height=100%>


</div>

<div style="width:100%;height:25%">
<br><br>

<!--<span id="s1" style="color:white;font-size:600%;animation-timing-function: linear;"><b></b>Happy Holi</b> from</span>
<hr>
<br>--->
<br><br>
<span style="color:white;font-size:600%;animation-timing-function: ease-in;"><b><?php 
$str="YOUR NAME"
$str = strtoupper($_GET["n"]);

echo $str ?></b></span>

<!---
<br>

<span id="s3" style="color:white;font-size:500%;animation-timing-function: ease;">to you and <br>your Family.</span>
<br>
--->
</div>

<img src="holi.gif" width="100%" height="40%" style="border-radius: 40%;">


<form action="index.php" method="GET" style="padding-top:2%;padding-left:5%" >
<div style="float:left;width:70%;padding-top:5%">
<input type="text" name="n" placeholder=" Enter your name" style="width:75%;height:10%;font-size:350%;border-radius:25px">
&nbsp
<button value="submit" style="width:20%;height:12%;font-size:220%;border-radius: 25px;">Go</button>
</div>
<div style="float:right;width:20%;padding-top:4%">
<foo style="font-size:400%;color:white">Share</foo>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="whatsapp://send?text=<?php $str = strtoupper($_GET["n"]); echo $str; echo " ने भेजा है आपको ये colorful message 
👉"; ?>wish-holi.000webhostapp.com<?php echo  urlencode($_SERVER['REQUEST_URI']) ;?>" data-action="share/whatsapp/share"><img src="wtapp.png"  width="50%" heigth="50%"></a>

</div>


</form>
</body>

</html>
