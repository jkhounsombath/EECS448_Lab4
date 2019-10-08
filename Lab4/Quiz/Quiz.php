<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

  function grade()
  {
    $q1a = $_POST["q1"];
    $q2a = $_POST["q2"];
    $q3a = $_POST["q3"];
    $q4a = $_POST["q4"];
    $q5a = $_POST["q5"];
    $q1point = 0;
    $q2point = 0;
    $q3point = 0;
    $q4point = 0;
    $q5point = 0;
    if($q1a == 2)
    {
      $q1point = 1;
    }
    if($q2a == 3)
    {
      $q2point = 1;
    }
    if($q3a == 4)
    {
      $q3point = 1;
    }
    if($q4a == 5)
    {
      $q4point = 1;
    }
    if($q5a == 6)
    {
      $q5point = 1;
    }
      echo "<p> Question 1: 1+1=<br>You answered:".$q1a."<br>Correct Answer: 2<br>";
      echo "<p> Question 2: 1+2=<br>You answered:".$q2a."<br>Correct Answer: 3<br>";
      echo "<p> Question 3: 1+3=<br>You answered:".$q3a."<br>Correct Answer: 4<br>";
      echo "<p> Question 4: 1+4=<br>You answered:".$q4a."<br>Correct Answer: 5<br>";
      echo "<p> Question 5: 1+5=<br>You answered:".$q5a."<br>Correct Answer: 6<br>";
      $totScore = $q1point + $q2point + $q3point + $q4point + $q5point;
      $percentage = $totScore/5;
      echo "<p>Score: ";
      echo $totScore;
      echo "/5<br>";
      echo "<p>Percentage:";
      echo $percentage*100;
      echo "%";
  }
grade();
?>
