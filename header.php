<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Барселона</title>
    <!-- Bootstrap -->
    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/css/style.css" rel="stylesheet">
</head>
  

  <body>
    <div class="container-fluit">
      <div class="row">
        <nav class="navbar navbar-statik">
          <div class="container">
            <div class="navbar-header header">
              <div class="container">

                <!-- Шапка сайта -->
                <div class="navbar-header">
                  <a class="navbar-brand" href="index.php" 
                  target="ext"><b>Новости Барселона</b></a>
                  <a class="navbar-toggle" data-toggle="collapse" 
                  data-target=".navbar-collapse">
                  <span class="glyphicon glyphicon-chevron-down"></span>
                  </a>
                </div>

                    <!-- Форма для поиcка -->
                    <div class="navbar-right">
                      <form class="form-inline">
                        <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Поиск">
                      </form>
                    </div>
                    
                    <!-- Меню сайта -->
                      <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">  
                        <li><a href="bloks.php">Блоги</a></li>
                        <li><a href="transfers.php">Трансферы</a></li>
                        
                        
                        
                        <!-- Выпадающее меню -->
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Личный кабинет</a>
                            <ul class="dropdown-menu">
                              <li><a href="#" data-toggle="modal" data-target="#vxModal">Вход</a></li>
                              <li><a href="#" data-toggle="modal" data-target="#myModal">Регистрация</a></li>
                            </ul>
                        </li>
                        
                      </div>
                  
                </div>
              </div>

          </div>
        </nav><!-- nav -->
      </div><!-- row -->  
    </div>  <!-- Container -->
  </body> 

<!-- Регистрация -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Запольните форму для регистрации</h4>
              </div>
              <div class="modal-body">
              
                <div class="form-group">
                  <input type="text" name="nameorg" id="nameorg" class="form-control" placeholder="Имя">
                </div>
                
                <div class="form-group">
                  <input type="text" name="nameorg" id="nameorg" class="form-control" placeholder="Фамилия">
                </div>

                <div class="form-group">
                  <input type="text" name="nameorg" id="nameorg" class="form-control" placeholder="Год рождения">
                </div>

                <div class="form-group">
                  <input type="text" name="nameorg" id="nameorg" class="form-control" placeholder="Логин">
                </div>

                <div class="form-group">
                  <input type="text" name="nameorg" id="nameorg" class="form-control" placeholder="Пароль">
                </div>

                <div class="form-group">
                  <input type="text" name="nameorg" id="nameorg" class="form-control" placeholder="Потвердите пароль  ">
                </div>
              
              </div>
                  
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                  <button type="button" class="btn btn-primary">Сохранить</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- // Регистрация -->
  
  <!-- Вход -->
<div class="modal fade" id="vxModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Введите ваш логин и пароль для входа</h4>
              </div>
              <div class="modal-body">
              
                <div class="form-group">
                  <input type="text" name="nameorg" id="nameorg" class="form-control" placeholder="Логин">
                </div>
                
                <div class="form-group">
                  <input type="password" name="nameorg" id="nameorg" class="form-control" placeholder="Пароль">
                </div>
                <a href="" style="text-align:center;">Забыли пароль?</a>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                  <button type="button" class="btn btn-primary">Вход</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- // Регистрация -->    