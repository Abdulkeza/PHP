<?
require_once("studentModel.php");

//phpinfo();
$x = 1;
$y = "1";
$s = "PHP is cool";
echo $s."<br />";
if($x===$y){
    echo "x is equal to y";
}
else{
    echo "The are not equal";
}
//control flow
$month = 2;
echo "<br/>";
switch($month){
    case 1:
        echo "Jan";
    break;
    case 2:
        echo "FEB";
    break;
    case 3:
        echo "Mar";
    break;
    case 4:
        echo "APR";
    break;
    default:
    echo "Month out of range";
break;
}
echo "<br />";
//ternary operator
$age=19;
 echo $age>=30? "Is Adult":"Is Youth";
//  if($age>=30){
//      echo "Is Adult";
//  }
//  else{
//      echo "Is youth";
//  }
/*
doing the loops now
*/
for($i=0;$i<100;++$i){
    if($i%20==0)
    echo $i." is divisible by 20<br />";
}

/*while($i<100){
    //statements
}*/

/*do{
    //statment
}while($x<100);*/

//declaring constant
if(!defined("DBNAME"))
    define("DBNAME", "studentsDB");
if(!defined("DBUSER"))
    define("DBUSER", "root");
if(!defined("DBPASS"))
    define("DBPASS", "noPassword");
echo DBNAME;
//simple string manipulation
$regNo = " 19RP10005";
$index = "12301MBC006";
//length of string
echo "<br />".strlen($index);
//substring
echo "<br />". substr($index,0,2);
//replacing something
$nextReg = str_replace(" ", "",$regNo);
echo "<br />".$nextReg;

//searhcing string
$search= "RP";
if(preg_match("/RP/", $regNo)){
    echo "<br />"."String RP found, therefor RP student detected";
}
else{
    echo "not RP student, String RP not found";
}

//creating function
/**
 * to declare a function, use key word function
 * followed by the function name
 */

 function swap($a, $b){
     $content = "<br />Before Swap the value of
     a is ".$a." and the value of b is ".$b."<br />";
        //a=3, $b=2;
     $a = $a+$b; // a=5
     $b = $a-$b; // b=3
     $a = $a-$b; // a=2
     $content .= "After Swap the value of
     a is ".$a." and the value of b is ".$b."<br />";
     return $content;
 }

 echo swap(100,309);

 $model = new StudentModel();
 $model->setName("Patience");
 echo "<br />".$model->getName();
 echo "<br />".$model->getPhone();
 echo "<br />".$model->getEmail();

 
?>  