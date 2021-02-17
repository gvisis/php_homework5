<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <h1>4. Masyvai II</h1>
  <div class="task1">
    <?php
      $taskNumber = 0;
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      $arrayTask1 = [];
      foreach(range(1,10) as $key1 => $_){
        foreach(range(1,5) as $key2 => $_){
          $arrayTask1[$key1][$key2] = rand(5,25);
        }
      }
    _dc($arrayTask1);
    ?>
  </div>
  <div class="task2">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      $countOver10 = 0;

      foreach($arrayTask1 as $arrayInside){
        foreach($arrayInside as $value){
          if ($value > 10) $countOver10++;
        }
      }
    echo "Count over 10: $countOver10";
    ?>
  </div>
  <div class="task3">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      
    ?>
  </div>
  <div class="task4">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      
    ?>
  </div>
  <div class="task5">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      
    ?>
  </div>
  <div class="task6">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      
    ?>
  </div>
  <div class="task7">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      
    ?>
  </div>
  <div class="task8">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      
    ?>
  </div>
  <div class="task9">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      
    ?>
  </div>
  <div class="task10">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      
    ?>
  </div>
</body>

</html>