
<?php 
$server = "localhost"; 
$name_user = "Admin"; 
$password_user = "123456"; 
$db_user = "ua"; 


$conn = new PDO("mysql:host=$sever;dbname=$db_user", $name_user, $password_user); 



if (!$connection || !$db)
{
exit(mysql_error());
}

$rezult=mysql_query("SELECT * FROM messege");
mysql_close();

//пока что-то есть в массиве,выводить
while ($row=mysql_fetch_array($rezult))
{?>


<th>Информация о клиентах</th>
<tr class="tr1"><td>Клиент:<?php echo $row['messege_id']?></tr></td>
<p><tr class="tr1"><td>ОП форма: <?php echo $row['name']?></tr></td> </p>

<?php } ?>  


               ?>