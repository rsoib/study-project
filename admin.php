<?php require_once("libs.php"); ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Панел управления</title>
      <!-- Bootstrap -->
      <link href="/template/css/bootstrap.min.css" rel="stylesheet">
      <link href="/template/css/style.css" rel="stylesheet">
  </head>
    

    <body>
      <div class="container-fluit">
        <div class="row">
          <nav class="navbar navbar-admin">
            <div class="container">
              <div class="navbar-header">
                <div class="container">
                
                  <!-- Шапка сайта -->
                  <div class="navbar-header">
                    <div class="container">
                     <div class="row">
                        <div class="col-lg-12">
                          <h1><a href="">Панель управления</a></h1>
                        </div>
                      </div>
                    </div>                     
                  </div>

                </div>
              </div>
            </div>
          </nav>
        </div>
    </div>

    <!--  Меню -->
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Меню</h3>
                </div>
                
                <div class="panel-body panel-admin">
                 <div class="list-group">
                  <a href="admin.php" class="list-group-item">
                    <i class="glyphicon glyphicon-home home"></i>
                    Главный
                  </a>
<!-- Показывание меню -->
                <?php while($menu_res = mysqli_fetch_array($menu_query)): ?>
                
                  <a href="?menu_id=<?=$menu_res['menu_id']?>" class="list-group-item">
                    <i class="glyphicon glyphicon-chevron-right home"></i>
                    <?php echo $menu_res['menu_name']; ?>
                  </a>
  
                <?php endwhile; ?>

                </div>
                </div>
              </div>
            </div>

<!-- Панел показывание категории меню (Панел адмнистратора) -->
            <div class="col-lg-9">
              <a href="" class="btn btn-sm btn-primary">Сообщения</a>
              <a href="" class="btn btn-sm btn-warning">Заявки
              <span class="badge">2</span>
              </a>
            <div class="clearfix">&nbsp;</div>
            
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Панел администратора</h3>
              </div>
              
              <div class="panel-body panel-admin">
                <?php if ($m_delete == true): ?>
                  <h4 style="color:green;"><?php echo $m_delete_res; ?></h4>
                  <a href="admin.php?menu_id=10" class="btn btn-default">Обновить</a>
                <?php endif ?>
<!-- Добавление движущие тексты -->
                  <?php if ($add_10 == 1): ?>
                    <h4>Добавление новый текст</h4>
                    <hr>
                    <h4 style="color:green;"><?php echo $m_add_info; ?></h4>
                    <h4 style="color:red;"><?php echo $m_error; ?></h4>
                    <form action="" method="POST">
                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Соддержание текст *</label>
                        <textarea class="form-control" rows="5" name="m_text" data-validation-optional="true"></textarea>
                      </div>
                       <input type="submit" value='Довавить' name="add" class="btn btn-primary">
                      
                        <?php if ($_POST['add_10'] == true): ?>
                          <a href="admin.php?menu_id=10" class="btn btn-default">Обновить</a>
                        <?php endif ?>
                    </form>
                  <?php endif; ?>
<!-- Изменение движущие тексты -->
                   
                   <?php if ($m_update==true): ?>
                    <h4 style="color:green;"><?php echo $m_edit_info; ?></h4>
                    <h4 style="color:red;"><?php echo $m__edit_error; ?></h4>
                    <form action="" method="POST">
                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Изменения текста *</label>
                        <textarea class="form-control" rows="7" name="m_edit_text" data-validation-optional="true"><?php echo $m_fetch['m_text']; ?></textarea>
                      </div>
                       <input type="submit" value='Изменит' name="m_edit" class="btn btn-primary">
                       <?php if ($_POST['m_edit']==true): ?>
                        <a href="admin.php?menu_id=10" class="btn btn-default">Обновить</a>
                       <?php endif ?>
                    </form>

                   <?php endif ?>


<!-- Показывание движущие тексты -->
                  <?php if ($menu_id == 10 ): ?>
                    <div class="title">
                      Тексты

                      <a href="?add_10=<?=$massiv['name']?>" class="pull-right btn btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i>Добавить новый текст
                      </a>
                    </div>
                  <hr>                  
                    <?php $i=1; while($i<$marque_res_show = mysqli_fetch_array($marque_info_show)):?>
                    <h4>
                    <?php echo $i.') '.$marque_res_show['m_text']; ?>
                    </h4>
                    <a href="?m_update=<?=$marque_res_show['m_id']?>" class="btn btn-default">Изменит</a>
                    <a href="?m_delete=<?=$marque_res_show['m_id']?>" class="btn btn-default">Удалит </a> 
                  <hr>

                 <?php $i++; endwhile ?>
                 <?php endif ?>
<!-- Конец показывание движущие тексти -->

<!-- Последные новости -->
                  <?php if ($menu_id==11): ?>
                    <div class="title">
                      Последные новости
                      <a href="?add_11=<?=$massiv['name']?>" class="pull-right btn btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i>Добавить новый новости
                      </a>
                    </div>
                    <hr>   
                    <?php $i = 1; while($newsHeader_admin=mysqli_fetch_array($newsHeader_query)): ?>
                      <h4 style="color: green;"><?php echo $i.') '.$newsHeader_admin['news_title']; ?></h4>
                      <p><?php echo $newsHeader_admin['content']; ?></p>
                      <a href="?header_update=<?=$newsHeader_admin['id']?>" class="btn btn-default">Изменит</a>
                      <a href="?header_delete=<?=$newsHeader_admin['id']?>" class="btn btn-default">Удалит </a> 
                    <?php $i++; endwhile ?>
                  <?php endif ?>

<!-- Добавление последные новости -->
                  <?php if ($add_11 == 1): ?>
                  <h4 style="color:green;"><?php echo $headerInfo; ?></h4>
                  <h4 style="color:red;"><?php echo $headerError; ?></h4>
                    <form action="" method="POST">
                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Заголовок текст *</label>
                        <input type="text" name='newsHeader_title' class="form-control">

                      </div>
                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Соддержание текст *</label>
                        <textarea class="form-control" rows="5" name="header_content" data-validation-optional="true"></textarea>
                      </div>
                       <input type="submit" value='Довавить' name="add_header" class="btn btn-primary">
                    </form>
                  <?php endif ?>
                  <?php if ($_POST['add_header']==true): ?>
                    <a href="admin.php?menu_id=11" class="btn btn-default">Обновить</a>
                  <?php endif ?>

<!--  Изменение последные новости -->
                  <?php if ($header_update==true): ?>
                  <h4 style="color:green;"><?php echo $headerUpdateInfo; ?></h4>
                  <h4 style="color:red;"><?php echo $headerUpdateError; ?></h4>
                    <form action="" method="POST">
                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Заголовок текст *</label>
                        <textarea class="form-control" rows="3" name="updateHeader_title" data-validation-optional="true">
                        <?php echo $headerUpdate_fetch['news_title']; ?>
                        </textarea>
                      </div>
                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Соддержание текст *</label>
                        <textarea class="form-control" rows="5" name="updateHeader_content" data-validation-optional="true">
                         <?php echo $headerUpdate_fetch['content']; ?> 
                        </textarea>
                        <input type="hidden" name="header_id" value=<?php echo $headerUpdate_fetch['id']; ?>>
                      </div>
                       <input type="submit" value='Изменить' name="update_header" class="btn btn-primary">      
                  <?php endif ?>
                  <?php if ($_POST['update_header']==true): ?>
                    <a href="admin.php?menu_id=11"class="btn btn-default">Обновить</a>
                  <?php endif ?>

<!--  Удаление последные новости -->
                  
                  <?php if ($header_delete==true): ?>
                    <h4 style="color:green;"><?php echo $headerDeleteInfo; ?></h4>
                    <a href="admin.php?menu_id=11"class="btn btn-default">Обновить</a>
                  <?php endif ?>

<!--  Показывание новости сайта -->
                  <?php if ($menu_id == 12): ?>
                    <div class="title">
                      Новости сайта
                      <a href="?add_12=<?=$massiv['name']?>" class="pull-right btn btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i>Добавить новый новости
                      </a>
                    </div>
                    <hr>  
                    
                  <?php $i = 1; while($newsSite_info = mysqli_fetch_array($newsSite_query_admin)): ?>
                    <h4 style="color:green;"><?php echo $i.") ".$newsSite_info['news_site_title']; ?></h4>
                    <p><?php echo $newsSite_info['news_content']; ?></p>
                    <a href="" class="btn btn-default">Изменит</a>
                      <a href="" class="btn btn-default">Удалит </a>
                      <hr>
                  <?php $i++; endwhile ?>
                  <?php endif; ?>

<!--  Добавление новости сайта -->
                  <?php if ($add_12 == 1): ?>
                  <h4 style="color:green;"><?php echo $addNewsInfo; ?></h4>
                  <h4 style="color:red;"><?php echo $newsSite_error; ?></h4>
                    <form action="" method="POST">
                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Заголовок текст *</label>
                        <input type="text" name='newsSite_title' class="form-control">

                      </div>
                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Короткий обзор *</label>
                        <textarea class="form-control" rows="3" name="newsSiteShort_content" data-validation-optional="true"></textarea>
                      </div>

                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Соддержание текст *</label>
                        <textarea class="form-control" rows="5" name="newsSite_content" data-validation-optional="true"></textarea>
                      </div>
                       <input type="submit" value='Довавить' name="add_newsSite" class="btn btn-primary">
                  <?php endif ?>

                  <?php if ($_POST['add_newsSite']==true): ?>
                    <a href="admin.php?menu_id=12" class="btn btn-default">Обновить</a>
                  <?php endif ?>
                </div><!-- panel-body -->
              </div>
            </div>
          </div>
        </div>

    </body>
  </html> 

  