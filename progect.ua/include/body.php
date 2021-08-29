<div id="ee">
	<div class="baner">

		<figure>
			<h1>Ласкаво просимо в проект EDUQAS!</h1>
			<p>Програма ЄС в галузі освіти, підготовки кадрів, молоді та спорту</p>
			<a href="http://web.elth.ucv.ro/eduqas/">Долучитися до проекту</a>
		</figure>

	</div></div>

	<div id="inf" >
		
		
	
<div id="red">
<div id="line_block">
<img src="images/agreement.png">
	<h3>Партнерство </h3>
<p> Співпраця з провідними  <br>університетами Європи </p>


</div> 
<div id="line_block">
<img src="images/trust.png">
<h3>Знайомства </h3>
<p>Друзі з різних куточків світу</p>


</div> 
<div id="line_block">

<img src="images/plane.png">
<h3>Мандрівки </h3>
<p>Відвідування багатьох <br> країн Європи</p></div>
	</div>
</div>

<div id="coment">
	
	<div class="news">
		<img src="images/13.jpg">

	</div>

<div class="comments">
	<div class="cl">
		<a href=""><img src="images/fl.png"><p>12</p></a>
		
		<div class="cl1">
	<a href=""><img src="images/kl.png"><p>66</p></a>

</div>
</div>
<h3 class="title-comments">Коментарі</h3>

<div class ="prokrutka">
	
<ul>
	
<?php
$q = 'кодер.укр';
$server = "localhost"; 
$name_user = "Admin"; 
$password_user = "123456"; 
$db_user = "ua"; 
 
try {
    //соединение с БД
    $dbcon = new PDO("mysql:host=$sever;dbname=$db_user", $name_user, $password_user); 
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    //получаем данные
    $data = $dbcon->query('SELECT * FROM massage, message_content');
 
    //выводим результат

    foreach($data as $row) {

       
        echo  "<h5>Ім'я:</h5> <p> "  .$row['name'] . "</p><br />";
           echo " <p>Коментар: "      .$row['content'] . "</p><br /><hr>";
           echo " <p>Дата: "      .$row['message_data'] . "</p><br /><hr>";




    }
 
} catch(PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
?>

</ul>


</div>
<br>


	<form class="decor" action="comment.php" method="post">
		 <div class="form-left-decoration"></div>
  <div class="form-right-decoration"></div>
  <div class="circle"></div>
  <div class="form-inner">
    <h3>Написати коментар</h3>
	<p>Ім'я</p>
	<input type="text" name="name" style="display: block;">
	<p>Коментар</p>
	<textarea name="content" placeholder="Коментар..." rows="3"></textarea>
	<input type="submit" name="" value="Отправить">
</div>






















<style type="text/css">
	

* {box-sizing: border-box;}

.decor {
  position: relative;
  max-width: 400px;
  margin: 50px auto 0;
  background: white;
  border-radius: 30px;
}
.form-left-decoration,
.form-right-decoration {
  content: "";
  position: absolute;
  width: 50px;
  height: 20px;
  background: blue;
  border-radius: 20px;
}
.form-left-decoration {
  bottom: 60px;
  left: -30px;
}
.form-right-decoration {
  top: 60px;
  right: -30px;
}
.form-left-decoration:before,
.form-left-decoration:after,
.form-right-decoration:before,
.form-right-decoration:after {
  content: "";
  position: absolute;
  width: 50px;
  height: 20px;
  border-radius: 30px;
  background: white;
}
.form-left-decoration:before {top: -20px;}
.form-left-decoration:after {
  top: 20px;
  left: 10px;
}
.form-right-decoration:before {
  top: -20px;
  right: 0;
}
.form-right-decoration:after {
  top: 20px;
  right: 10px;
}
.circle {
  position: absolute;
  bottom: 80px;
  left: -55px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: white;
}
.form-inner {padding: 50px;}
.form-inner input,
.form-inner textarea {
  display: block;
  width: 100%;
  padding: 0 20px;
  margin-bottom: 10px;
  background: #E9EFF6;
  line-height: 40px;
  border-width: 0;
  border-radius: 20px;
  font-family: 'Roboto', sans-serif;
  outline: none;
   border: 2px solid #e9e9e9; /* Параметры рамки */
    background: #f3dbdf;
}
.form-inner input[type="submit"] {
  margin-top: 30px;
  background: blue;

  color: white;
  font-size: 14px;
}
.form-inner input[type="submit"]:hover{
 background: #2EE59D;
  box-shadow: 0 15px 20px rgba(46,229,157,.4);
  color: white;
  transform: translateY(-7px);

}
.form-inner textarea {resize: none;}
.form-inner h3 {
  margin-top: 0;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  font-size: 24px;
  color: #707981;
}

</style>


</form>

<div>
	




</div>


</div>










</div>

<div id="coment1">
	
	<div class="news1">
		<img src="images/200.jpg">
		<h3>Ключова дія 2- Нарощування потенціалу у галузі вищої освіти<br>
		Назва проекту:Впровадження системи забеспечення якості освіти<br>
		через співпрацю університту та бізнесу-уряду у ВНЗ (EDUQAS)


		</h3>

	</div>
</div>





<div id="rp">
	<div class="red1">
	<div class="fg">
		<h1>Що випусники говорять...</h1>

		<div id="line_block1">
<img src="images/photo_2020-02-20_01-22-40.jpg">
	<h3>Марія </h3>
<p> Це просто фантастика. Я у повному  <br>
захваті від цієї програми </p>


</div>
<div id="line_block1">
<img src="images/photo_2020-02-20_01-22-08.jpg">
	<h3>Дмитро </h3>
<p> Це просто фантастика. Я у повному  <br>
захваті від цієї програми </p>

</div>
<div id="line_block1">
<img src="images/photo_2020-02-20_01-22-51.jpg">
	<h3>Вікторія </h3>
<p> Це просто фантастика. Я у повному  <br>
захваті від цієї програми </p>
</div>
</div>
	</div>

</div>






  <div id="ff">
  	<div class="uu">
  		<h2>Готові роспочати роботу? Долучайся зараз!</h2>
  		<a href="http://web.elth.ucv.ro/eduqas/">Долучитися до проекту</a>
  	</div>
  			

  </div>
<br>
<br>
<br>
  <footer>
  	<h5>Universiry of Craiova,EDUQAS Project</h5>
  <p>13,A.l. Cuza Str.,Craiva 200585, ROMANIA</p>
  <p>eduqas.ucv@outlook.com</p>  
  <div class="wrap">
  <p><a href="https://twitter.com/hashtag/eduqas"><img src="images/twitter.png"></p>
  <p><a href="http://web.elth.ucv.ro/eduqas/"><img src="images/instagram.png" alt=""></a></p> 
 <p><a href="https://www.facebook.com/EDUQASErasmus/"><img src="images/facebook.png" alt=""></a></p> 
</div>
<style>
  
  .wrap {
    width: 60%;
    min-height: 50px;
   
  }
  .wrap p {
    display: inline-block;
    float: right;
    width: 9.3%;
  }
  .wrap img {
    max-width: 85%;
    display: block;
   	margin-right: 45px;
  }
  </style>
</footer>