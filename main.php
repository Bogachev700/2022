<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
    <head>   
    <script>
             function digitalClock() {
              var date = new Date();
              var hours = date.getHours();
              var minutes = date.getMinutes();
              var seconds = date.getSeconds();
      
                if (hours < 10) hours = "0" + hours;
                if (minutes < 10) minutes = "0" + minutes;
                if (seconds < 10) seconds = "0" + seconds;
        document.getElementById("id_clock").innerHTML = hours + ":" + minutes + ":" + seconds;
        setTimeout("digitalClock()", 1000);
   }
  </script>


</head>
<body>

    <div class="flex-container">

        <div class="header">
              <?php include 'logo.inc.php' ?>
                     <div id="id_clock"></div>
                       <script>digitalClock();</script>

                <?php include 'menu.inc.php' ?>
               

        </div>

        <div class="about_me">

          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php
                    echo '<img src="/img/php.png">';
                    ?>
                </div>

                <div class="fullname">
                    <p> <strong>Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                          echo 'Я из города', ' ', $city, ' ', $redion; ?>
                         </strong> 
                    </p>

                    <p> <i>
                     Мне
                    <?php  echo $age;   ?>
                    года 
                       </i>
                     </p>
                    <p>
                        Я изучил  блок 3 <strong>Основы вэб-программирования</strong>
                       <ol> 
                          <em>
                                <li> Получил базовые знания HTML, CSS, JavaSkript </li>
                                <li> Прошёл Тренажёр по HTML</li>
                                <li> Узнал что такое язык программирования PHP</li>
                                <li> Научился устанавливать и запускать локальный сервер </li>
                                <li> Научился создавать скрипты и выводить информацию и др.</li>
                            </em>
                        </ol>
                    </p>
                </div>
            </div>

            <div class="knowledge">

                    <?php  include 'knowledge.inc.php'; ?>
                    <?php
                    echo $a, ' ', $b, ' ', $c;
                    ?> <br>

                    <?php
                        $a = 5;
                        $b = 30;
                        $c = $a * $b;
                        echo $c;
                    ?>   <br>
                     <?php
                        echo $d;
                    ?>

            </div>

            <div class="article">
                <p class="text">
                     <li> HTML (Hyper Text Markup Language) —  язык разметки гипертекста. Это означает, что он предназначен для описания структуры веб-страницы, чтобы браузер понимал, как именно её отобразить.</li> 
                     <li> PHP (Hypertext PreProcessor, препроцессор гипертекста) — язык программирования, исполняемый на стороне веб-сервера.</li>
                     <li> JavaScript — мультипарадигменный язык программирования. Популярное расширение языка EСMAScript, который был создан для обработки действий на компьютерах пользователей.</li>  

               </p>
            
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>