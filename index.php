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
    echo '<pre>';
    print_r($arrayTask1);
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
    echo "<h3> -------- A --------- </h3>";
    echo "Count over 10: $countOver10";

    echo "<h3> -------- B --------- </h3>";
    $maxValue = 0;

    foreach($arrayTask1 as $arrayInside){
      if($maxValue <= max($arrayInside)){
        $maxValue = max($arrayInside);
      };
    }
    echo "Max value in the array: $maxValue";

    echo "<h3> -------- C --------- </h3>";
    $totalSum = [];

    foreach($arrayTask1 as $arrayInside) {
      foreach($arrayInside as $key => $value) {
        if (!isset($totalSum[$key])) {
          $totalSum[$key] = 0;
        }
        $totalSum[$key] += $value;
      }
    }
    echo 'Total sums of indexes: <pre>';
    print_r($totalSum);
    echo '</pre>';

    echo "<h3> -------- D --------- </h3>";
    
    foreach($arrayTask1 as $key1 => $arrayInside){
      foreach(range(1,7) as $key2 => $_) {
        if ($key2 >= 5){
          $arrayTask1[$key1][] = rand(2,25);
        }
      }
  }
  echo '<pre>';
  print_r($arrayTask1);
  echo '</pre>';

    echo "<h3> -------- E --------- </h3>";

    /* 
    Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
    */
    $arrayTask2E = [];
    foreach($arrayTask1 as $arrayInside){
      $arrayTask2E[] = array_sum($arrayInside) . '<br>';
    }
    echo '<pre>';
    print_r($arrayTask2E);
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