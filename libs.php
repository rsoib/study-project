<?php require_once("db.php");//Подключение к базе данных  ?>

<!-- Показать Меню из БД -->
<?php 
	
	$menu = "SELECT * FROM menu ORDER BY menu_id ASC";
	$menu_query = mysqli_query($con, $menu);
	
	


?>


<!-- Показать движущийся новости из БД на главном странице -->
<?php 
	
	$marque = "SELECT * FROM marque ORDER BY m_date DESC";
	$marque_info = mysqli_query($con, $marque);
	$marque_res = mysqli_fetch_array($marque_info);
	
?>

<!-- Показать движущийся новости из БД на панель адмнистратора -->
<?php 

	if (isset($_GET['menu_id'])) 
	{
		$menu_id = $_GET['menu_id'];
	}	
	
	$marque_show = "SELECT * FROM marque ORDER BY m_id DESC";
	$marque_info_show = mysqli_query($con, $marque_show);
?>

<!-- Добавить новый движущий текст  -->
<?php 
	
	$massiv = array('name'=>1);
	if (isset($_GET['add_10'])) 
	{
		$add_10 = $_GET['add_10'];
	}

	if (isset($_POST['add'])) 
	{	
		$m_text = trim($_POST['m_text']);
	if ($m_text=='') 
	{
		
	$m_error = "Запольните форму!";
		
	}else
		{
			$m_add = "INSERT INTO marque VALUES(NULL,'$m_text',
				CURRENT_TIMESTAMP)";
			$m_add_query = mysqli_query($con,$m_add);
			$m_add_info = "Текст успешно добавлен!";
		}
	}
?>
<!-- Изменение движущий текст  -->
<?php 
	
	if (isset($_GET['m_update'])) 
	{
		$m_update = $_GET['m_update'];
		$m_update_query = "SELECT * FROM marque WHERE m_id = $m_update";
		$m_update_info = mysqli_query($con, $m_update_query);
		$m_fetch = mysqli_fetch_array($m_update_info);
	}
	if (isset($_POST['m_edit'])) 
	{
		$m_edit_text = trim($_POST['m_edit_text']);
		if ($m_edit_text =='') 
		{
			$m__edit_error = "Запольните форму!";
		}else
			{	
				$m_edit_query = "UPDATE marque SET m_text = '$m_edit_text', 
				m_date = CURRENT_TIMESTAMP WHERE m_id = $m_update";
				$m_edit_query2 = mysqli_query($con, $m_edit_query);
				$m_edit_info = "Текст успешно изменён! Обновляйте страницу!";
			}

	}

?>
<!-- Удаление движущий текст  -->
<?php 

	if (isset($_GET['m_delete'])) 
	{
		$m_delete = $_GET['m_delete'];
		$m_delete_query = "DELETE FROM marque WHERE m_id = $m_delete";
		$m_delete_info = mysqli_query($con,$m_delete_query);
		$m_delete_res = "Текст успешно удалён!";
	}
?>

<!-- Показать последные новости на сайте  -->
<?php 
	$showNews_header = "SELECT * FROM news_header ORDER BY id DESC LIMIT 1";	
	$newsHeader_query = mysqli_query($con,$showNews_header);
	$newsHeader_fetch = mysqli_fetch_array($newsHeader_query);

	$showNews_header2 = "SELECT * FROM news_header ORDER BY id DESC LIMIT 2";
	$newsHeader_query2 = mysqli_query($con,$showNews_header2);


?>

<!-- Показать последные новости на панель управления  -->
<?php 
	$showNews_admin = "SELECT * FROM news_header ORDER BY id DESC";
	$newsHeader_query = mysqli_query($con,$showNews_admin);
	

?>

<!-- Добавит последные новости  -->
<?php 
	if ($_GET['add_11']) {
		$add_11 = $_GET['add_11'];
	}
	if (isset($_POST['add_header']))
	 {
	 	$newsHeader_title = trim($_POST['newsHeader_title']);
	 	$header_content = trim($_POST['header_content']);
		if ($newsHeader_title=="" && $header_content=="") 
		{
			$headerError = "Запольните форму!";
		}else
		 {
		 	$headerAdd = "INSERT INTO news_header VALUES(NULL,'$newsHeader_title',
		 	'$header_content', CURRENT_TIMESTAMP)";
			$headerQuery = mysqli_query($con, $headerAdd);
			$headerInfo = "Новости успешно добавлен!";

		 }
	 }


?>

<!-- Изменит последные новости  -->
<?php 
	if (isset($_GET['header_update'])) {
		$header_update = $_GET['header_update'];
		$newsHeader_update = "SELECT * FROM news_header WHERE id = $header_update";
        $newsUpdate_query = mysqli_query($con, $newsHeader_update);
        $headerUpdate_fetch = mysqli_fetch_array($newsUpdate_query); 

        	if (isset($_POST['update_header'])) 
        	{

        		$updateHeader_title = trim($_POST['updateHeader_title']);
        		$updateHeader_content = trim($_POST['updateHeader_content']);
        			
        		if ($updateHeader_title=='' || $updateHeader_content=='') 
        		{
        			$headerUpdateError = "Запольните форму!";
        		}else
        			{
        				$headerEdit = "UPDATE news_header SET
        				news_title = '$updateHeader_title', 
        				content='$updateHeader_content', 
        				news_time=CURRENT_TIMESTAMP WHERE id = $header_update";
        				$headerEdit_query = mysqli_query($con,$headerEdit);
        				$headerUpdateInfo = "Новости успешно изменён! Обновляйте страницу!";       	
        			}
        	}		

	}

?>


<!-- Удаление последные новости -->
<?php
	
	if (isset($_GET['header_delete'])) 
	{
		$header_delete = $_GET['header_delete'];
		$header_delete = "DELETE FROM news_header WHERE id = $header_delete";
		$headerDelete_query = mysqli_query($con, $header_delete);
		$headerDeleteInfo = "Новости успешно удалён!";
		
	}

?>

<!-- Показывание новости сайта на сайте -->
	
<?php 

	$showNewsSite = "SELECT * FROM news_site ORDER BY news_id DESC LIMIT 3";
	$newsSite_query = mysqli_query($con, $showNewsSite);

?>

<!-- Показывание новости сайта на панел управление -->

<?php 

	$showNewsSite_admin = "SELECT * FROM news_site ORDER BY news_id DESC";
	$newsSite_query_admin = mysqli_query($con, $showNewsSite_admin);

?>

<!-- Добавление новости сайта  -->

<?php 
	
	if (isset($_GET['add_12'])) 
	{
		$add_12 = $_GET['add_12'];
	}

	if (isset($_POST['add_newsSite'])) 
	{
		$newsSite_title = trim($_POST['newsSite_title']);
		$newsSiteShort_content = trim($_POST['newsSiteShort_content']);
		$newsSite_content = trim($_POST['newsSite_content']);
	if ($newsSite_title=='' || $newsSiteShort_content=='' || $newsSite_content=='')
	{
		$newsSite_error = "Запольните форму!";
	}else
	{
		$addNewsSite = "INSERT INTO news_site VALUES(NULL, '$newsSite_title',
			'$newsSiteShort_content','$newsSite_content',CURRENT_TIMESTAMP)";
		$addNewsSite_result = mysqli_query($con, $addNewsSite);
		$addNewsInfo = "Новости успешно добавлен! Обновляйте страницу!";
	}

		
	}

?>