<?php
function process()
{
  $shippingCost = 0;
  $shipping= $_POST["shippingMethod"];
  if($shipping == "sevenDay")
  {
    $shippingCost = 0;
  }
  if($shipping == "threeDay")
  {
    $shippingCost = 5;
  }
  if($shipping == "overnight")
  {
    $shippingCost = 50;
  }

  $duckAmount= $_POST["duckQuan"];
  $duckCost= 30 * $duckAmount;

  $friedRiceAmount= $_POST["friedRiceQuan"];
  $friedRiceCost= 20 * $friedRiceAmount;

  $eggRollAmount= $_POST["eggRollQuan"];
  $eggRollCost= 10 * $eggRollAmount;

  $totalCost= $eggRollCost + $shippingCost + $friedRiceCost + $duckCost;
  $password= $_POST["password"];
  $username= $_POST["username"];
  echo "<link href='style.css'
        rel='stylesheet'
        type='text/css'/>";
  echo "<h1>THANK YOU FOR SHOPPING WITH US ".$username."!</h1>";
  echo "<p>Your password is: ".$password."</p>";
  echo "<h2>Here is your receipt:</h2>";
  echo "<table id='receiptTable'><tr><th>Name</th><th>Quantity</th><th>Cost Per Item</th><th>Total Cost</th></tr>";
  echo "<tr><td><b>Duck Sauce</b></td><td>".$duckAmount."</td><td>$30</td><td><b>$".$duckCost."</b></td></tr>";
  echo "<tr><td><b>Fried Rice</b></td><td>".$friedRiceAmount."</td><td>$20</td><td><b>$".$friedRiceCost."</td></tr>";
  echo "<tr><td><b>Duck Sauce</b></td><td>".$eggRollAmount."</td><td>$10</td><td><b>$".$eggRollCost."</td></tr>";
  echo "<tr><td colspan='3'><b>".$shipping." shipping</b></td><td><b>$".$shippingCost."</b></td></tr>";
  echo "<tr><td colspan='3'><b>Total cost</b></td><td><b>$".$totalCost."</b></td></tr></table>";

}
process();
?>
