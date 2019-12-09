<?php require_once("header.php"); //Шапка сайта ?>
<?php require_once("libs.php"); //Программное обеспечение ?>
      <!-- Регистрация -->
       
    <div class="wrapper">
        <div class="container">
          <div class="row">
            <!-- Правый панель -->
            <div class="col-lg-3 pull-right">

              <!-- Картинка -->
              <div class="panel-body">
                <div class="well">
                 <img src="template/images/icon.png">        
                </div>
              </div>

                <!-- Панель состав -->
              <div class="panel panel-info hidden-xs">
                  <div class="panel-heading">
                    <div class="sidebar-header">Состав</div>
                  </div>

                <div class="panel-body">
                  <ul class="list-group">
                    <li class="list-group-item list-group-warning">
                    <span class="badge">11</span>
                    <a href="sostav.php">Стартовый состав</a>
                    </li>
                    <li class="list-group-item list-group-warning">
                    <span class="badge">11</span>
                    <a href="#">Второй состав</a>
                    </li>
                    <li class="list-group-item list-group-warning">
                    <span class="badge">11</span>
                    <a href="#">Молодёжный состав</a>
                    </li>
                    <li class="list-group-item list-group-warning">
                    <span class="badge">11</span>
                    <a href="#">Женский состав</a>
                    </li>
                  </ul>
                </div>
              </div><!-- // Панель состав -->

  <div class="panel panel-info hidden-xs">
    <div class="panel-heading"><div class="sidebar-header">Статистика</div></div>
      <div class="panel-body">
        <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <!-- Начало -->
            <div class="accordion-heading">
              <li class="list-group-item list-group-warning">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
              Нападающие</a></li>
            </div>

            <div id="collapseOne" class="accordion-body collapse">
              <div class="accordion-inner">
                <a href="statik.php">Обшая характеристика</a> <br>
                <a href="footer.php">Обшая характеристика</a> 
              </div>
            </div> <!-- Конец -->
            
            <!-- Начало -->
            <div class="accordion-heading">
              <li class="list-group-item list-group-warning">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseToo">
              Полузашитники</a></li>
            </div>

            <div id="collapseToo" class="accordion-body collapse">
              <div class="accordion-inner">
                <a href="">Обшая характеристика</a> 
              </div>
            </div> <!-- Конец --> 
              
            <!-- Начало --> 
            <div class="accordion-heading">
              <li class="list-group-item list-group-warning">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
              Зашитники</a></li>
            </div>

            <div id="collapseThree" class="accordion-body collapse">
              <div class="accordion-inner">
                <a href="">Обшая характеристика</a> 
              </div>
            </div><!-- Конец --> 
            
            <!-- Начало -->
            <div class="accordion-heading">
              <li class="list-group-item list-group-warning">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
              Вратари</a></li>
            </div>
            
            <div id="collapseFour" class="accordion-body collapse">
              <div class="accordion-inner">
                <a href="">Обшая характеристика</a> 
              </div>
            </div><!-- Конец -->
          
          </div>
      </div>
    </div>
  </div>
      <!-- Панель аккаунт -->  
      <div class="panel panel-info hidden-xs">
        <div class="panel-heading">
          <div class="sidebar-header">Аккаунт</div>
        </div>
          <div class="panel-body">
            <form role="form">
                <div class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="Логин">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="Пароль">
                </div>
                  <button type="submit" class="btn btn-default pull-right">Вход</button>
            </form>
          </div><!-- Панель аккаунт -->
      </div>
    </div><!-- col-lg-3 -->

<div class="col-lg-9 pull-left">
<marquee behavior="" direction=""><?php echo $marque_res['m_text']; ?></marquee>
<!-- Верхный часть главного страницы -->
  <div class="jumbotron">
    <div class="container">
      <h2>Последные новости</h2>
      <hr>
<!-- Слайдер -->     
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Показатели -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Обертка для слайдов -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
       <p class="news-p"><?php echo $newsHeader_fetch['news_title'];?></p>
       <div class="carousel-caption">
      
      </div>
    </div>

  <?php while($newsHeader_fetch2 = mysqli_fetch_array($newsHeader_query2)):?>
    <div class="item">
       <p class="news-p"><?php echo $newsHeader_fetch2['news_title'];?></p>
      <div class="carousel-caption">
       
      </div>
    </div>
  <?php endwhile ?>
   
  </div>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Подробнее</a></p>
</div>
</div>
</div>
    <div class="margin-8"></div>
    
    <?php while($newsSite_result = mysqli_fetch_array($newsSite_query)): ?>
    <!-- Новости  -->
    <h4><?php echo $newsSite_result['news_site_time']; ?></h4>
    <a href=""><h3><?php echo $newsSite_result['news_site_title']; ?></h3></a>
    <p><?php echo $newsSite_result['short_content'];?></p>
    <a href="#" class="btn btn-primary pull-right">Читать</a>
    
    <div class="margin-8"></div>
    
    <?php endwhile ?>
    
    
    <nav>
      <ul class="pager">
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Все новости</a></p>
      </ul>
    </nav>

</div>
</div>
</div>
<?php require_once("footer.php"); //footer сайта ?>


