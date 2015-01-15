 <?php 

$link=mysql_connect(localhost,root,root);
if (!mysql_connect(localhost,root,root)){
echo "Нет такой".spectexniki."!<br/>";
echo mysql_error();
}
//Для русских букв  


//открываем бузы данных
mysql_select_db(spectexniki) or die("базы данных не существует");
//mysql_query("set names 'cp1251',$link");	
//utf8_general_ci
mysql_query ("set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");
//print "Вы подключены к базе данных MySQL!<br>";

?>
