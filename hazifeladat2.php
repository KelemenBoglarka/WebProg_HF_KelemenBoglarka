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
        <?php
        $tomb= array([5, '5', '0.5', 12.3, 'five', '10e200']);
        foreach ($tomb as $elem){
           if(is_numeric($elem)){
               echo $elem." Igen <br>";
            }else{
                echo " Nem <br>";
            }
        }
        ?>
        <?php
        $orszagok = array("Magyarország"=>"Budapest","Romania"=>"Bukarest","Belgium"=>"Brussels","Austria"=>"Vienna","Poland"=>"Warsaw");
        foreach ($orszagok as $kulcs => $fovaros){
            print "$kulcs fővárosa $fovaros<br>";
        }
        print "<br>";
        ?>
        <?php
        $napok = array(
    	"HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    	"EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    	"DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
        );
        foreach ($napok as $value => $elem) {
            echo $value. ": ";
            foreach ($elem as $ertek){
            echo $ertek. ", ";   
            }
             echo "<br>";
        }
       
        ?>
        <?php
        $szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');
        function change(&$tomb,$kis_nagy){
        if($kis_nagy=="kisbetu"){
        foreach ($tomb as &$value){
            $value= strtolower($value);
        }
            }elseif($kis_nagy=="nagybetu"){
        foreach ($tomb as &$value){
            $value= strtoupper($value);
        }
        }else{
        echo "Nem ilyen";
        }
        }
        change($szinek, "kisbetu");
        foreach ($szinek as $value) {
          echo $value." ";
        }
        echo "<br>";
        change($szinek, "nagybetu") ;
        foreach ($szinek as $value) {
          echo $value." ";

        }
        ?>
    </body>
</html>
