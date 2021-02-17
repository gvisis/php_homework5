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
          $arrayTask1[$key1][] = rand(5,25);
        }
      }
    }
  echo '<pre>';
  print_r($arrayTask1);
  echo '</pre>';

    echo "<h3> -------- E --------- </h3>";
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

    // Array of 10
    $arrayTask3 = array_fill(0,10,0);

    // Iterates through each empty array
    foreach($arrayTask3 as &$arrayInside) {
      
      // generates the size of the new Inside Array
      $randomSize = rand(2,20);
      
      // fills array with randomized size and fills with default 'A's
      $arrayInside = array_fill(0,$randomSize,'A');
      
      // changes values to random letters for each element.
      foreach($arrayInside as &$letter) {
        $letter = chr(rand(65,90));
      }
      unset($letter);
      sort($arrayInside);
      // sort($arrayInside,SORT_STRING); // do i need it?
    }
    echo '<pre>';
    print_r($arrayTask3);
    ?>
  </div>

  <div class="task4">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      echo '<pre>';
      sort($arrayTask3);
      print_r($arrayTask3);
    ?>
  </div>
  <div class="task5">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
    
    // TODO: ------------- MISSING UNIQUE ID  -----------

    $userDB = array_fill(0,30,['user_id' => 0,'place_in_row' => 0]);

    foreach ($userDB as &$user){
      $randomRow = rand(0,100);
      $randomID = rand(1,1000000);
      $user = [
        'user_id' => $randomID,
        'place_in_row' => $randomRow
      ];
  }
    echo '<pre>';
    print_r($userDB);
    
    ?>
  </div>
  <div class="task6">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
    echo '<div class="two-columns">';
      echo '<div class="left">';
        echo "user_id ascending: <br>";
        
        usort($userDB, function($a,$b) {
          return $a['user_id'] <=> $b['user_id'];
        });
        
        echo '<pre>';
        print_r($userDB);
        echo '</div>';
        
        echo '<div class="right">';
        echo "place_in_row descending: <br>";
        
        usort($userDB, function($a,$b) {
          return $b['place_in_row'] <=> $a['place_in_row'];
        });

        echo '<pre>';
        print_r($userDB);
      echo '</div>';
    echo '</div>';


    ?>
  </div>
  <div class="task7">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      /* 
      Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
      */

      $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
      foreach($userDB as &$user){
        $user['name'] = substr(str_shuffle($alphabet),rand(5,15),rand(5,15));
        $user['surname'] = substr(str_shuffle($alphabet),rand(5,15),rand(5,15));
      }

      echo '<pre>';
      print_r($userDB);

    ?>
  </div>
  <div class="task8">
    <?php
      echo '<h2> Task ' . (++$taskNumber) . '</h2>';
      /* 
      Sukurkite masyvą iš 10 elementų. 
      Masyvo reikšmes užpildykite pagal taisyklę: 
        generuokite skaičių nuo 0 iki 5. 
        
      Ir sukurkite tokio ilgio masyvą.

      Jeigu reikšmė yra 0 masyvo nekurkite.
        Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. 
      Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
      */
      $arrayTask8 = [];

      foreach(range(0,9) as &$value) {
        $randInArraySize = rand(0,5);
        if ($randInArraySize === 0) {
          $arrayTask8[$value] = 0;     
        } else {
          foreach(range(0,$randInArraySize) as &$number){
            $arrayTask8[$value][$number] = rand(0,10);
          }
        }
      }
      echo '<pre>';
      print_r($arrayTask8);

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