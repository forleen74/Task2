<html>

<head>

<title>Web</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css"> 


<style>
 body { 
 background: url(j.jpg);
no-repeat;
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
 background-size: 100%; /* Современные браузеры */ }
    
</style>

</head>

<body TEXT="#9400D3" >

<div id="header" ALIGN="center"><IMG SRC="fon.jpg">
</div>
<div id="left">
Для обратной связи мы предлагаем Вам заполнить форму ниже.
<form name="form1" method="post" action="index.php"> 
<p> Имя: <input type="text" name="sirname"> </p>
<p> Ваш Email: <input  type="text" name="email"></p>
<p> Сообщение <textarea name="message"> </textarea> </p>
<p><input type="submit" name="send" value="Отправить"></p>
</form>

<?php
$db=mysql_connect("localhost", "root","");
mysql_select_db("mysite", $db);
?>
<?
$name = $_POST["sirname"];
$email = $_POST["email"];
$text_message = $_POST["message"];

$sql = "INSERT INTO mymessage(name, email, message) VALUES ('$name', '$email', '$text_message')";
$result=mysql_query($sql) or die("Ошибка в запросе!".mysql_error());


?>
</div>


<div id="content" >

<p><h2 ALIGN="center" COLOR="#D8BFD8"> <br>
</h2></p>
<p><h2 ALIGN="center">Почему волки воют на луну?</h2></p> 

<HR WIDTH="82%" SIZE="1" ALIGN="right">


<p ALIGN="justify">Зачем вообще волки (а также собаки, койоты, шакалы, лисы и т.д.) повышают голос? Что бы уведомить всех, что это — их территория, конечно! 
Такой способ установления границ называется «акустическая метка», и она служит очевидной цели — очертить сферы влияния между животными одного вида.

Так, а что там с луной-то? А там всё просто — человек в силу своего врожденного мистицизма в очередной раз спутал причину со следствием. Дело в том, что в ясную погоду влажность не мешает распространению звука. Отсутствие туч даёт нам прекрасный вид на спутник Земли, а волкам возможность знатно проораться, чтобы все соседи в округе знали, чей это район. Так что в отличие от домохозяек, моряков и астрономов, четвероногие санитары леса не озабочены лунными циклами.

А что же до того, что волки обращаются мордой к луне, поднимая головы? Ещё одно совпадение. С поднятой головой резонирующий вой разносится куда дальше и куда дольше. Попробуйте покричать, глядя под ноги, и добиться звучного эха.

А вообще волки могут выть и без луны, и с луной, и в дождь, и в снег, и даже днем — погода погодой, а свой район очертить надо!</p>
 <p> 
    <a href="pic.html"><img  src="pic.jpg" size:100 ALIGN="center" border="0"</a> 
  </p>
</div>
</body>
</html>