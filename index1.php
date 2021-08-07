<html>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
#backcolor{
  background-color: lightblue;
  width:800px;
  height:250px;
  margin:150px 100px 0 220px;
}
.price{
    padding:90px 0 0 90px;
  
}
input{
  width:38%;
  box-sizing: border-box;
  padding: 12px 20px;
  margin: 8px 0;
  right:70px;
}
.btn{
  width:30%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left:170px;
  background-color:lightgreen;
}
.output{
	margin-left:60px;
	color:olive;
	font-size:20px;
}
#backcolor2{
  background-color: lightblue;
  width:590px;
  height:150px;
  margin:50px 70px 0 100px;
}
</style> 
</head>
<body>
  <div id="backcolor"</div>
  <form class="price">
     <input type="number" name="cost" placeholder="Cost of item($)">
	 <input type="number" name="markup" placeholder="Markup(%)">
	 <input type="submit" value="Calculate profit" class="btn">
  </form>
  <div id="backcolor2"</div>
         <p class='output'>PROFIT MARGIN CALCULATOR RESULTS</p>
		 <hr>
<?php

$x=$_GET['cost'];
$y=$_GET['markup'];
$z=($y/100)*$x;
$s=$x+$z;
$gm=$s-$x;
$gmp=($gm/$s)*100;

echo "Your sale price: $",$s;
echo "<br>";
echo "Your profit: $", $s-$x;
echo "<br>";
echo "Gross margin: " ,number_format($gmp,2);
echo "%";
?>


</body>
</html>