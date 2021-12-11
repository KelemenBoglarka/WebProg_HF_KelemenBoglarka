<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php
        $today =date("D");
        if ($today == "Mon")
        {
            echo "Ma hétfő van.";
        }elseif ($today == "Tue")
        {
            echo "Ma kedd van.";
        }elseif ($today == "Wed")
        {
            echo "Ma szerda van.";
        }elseif ($today == "Wed")
        {
            echo "Ma csütörtök van.";
        }elseif ($today == "Fri")
        {
            echo "Ma péntek van.";
        }elseif ($today == "Sat")
        {
            echo "Ma szombat van.";
        }else 
        {
            echo "Ma vasárnap van.";
        }
        
    $hiba = "";
    $x = "";
    $y = "";
    $result = "";
    if(isset($_GET['operation'])){
        $x = $_GET['num1'];
        $y = $_GET['num2'];
        $op = $_GET['operation'];
    }
        if(is_numeric($x) && is_numeric($y)){
            switch($op){
                case 'add' : $result =  $x  + $y;
                    break;
                case 'sub' : $result =  $x  - $y;
                    break;
                case 'pro' : $result =  $x  * $y;
                    break;
                case 'div' : $result =  $x  / $y;
                    break;
            }
        }else{
            $hiba = "Előszőr a számot írd be!";
        }
        
        for($row=1;$row<=8;$row++)
        {
	echo "<tr>";
	for($column=1;$column<=8;$column++)
	{
		$total=$row+$column;
		if($total%2==0)
		{
			echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
		}
		else
		{
			echo "<td height=35px width=30px bgcolor=#000000></td>";
		}
	}
	echo "</tr>";
}
        ?>
    </body>
</html>
