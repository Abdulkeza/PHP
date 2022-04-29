<?php
require_once('dbConf.php');
require_once('dbConnection.php');
require_once('studentModel.php');
$sm = new StudentModel($_POST['name'], $_POST['email'], $_POST['phone']);
if(isset($_POST['submit'])){
    //data validation
    if(empty($_POST['name'])){
        die("You did not enter your name");
    }
    echo $sm->save();
    //establishing connection
    //require_once('dbConf.php');
    //$dbCon = new PDO("mysql:host=localhost;dbname=ict_db", "root", "pass");
    // $dbCon = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    // $stm = $dbCon->prepare("INSERT INTO student(name,email,phone)VALUES(?,?,?)");
    // $stm->execute([$_POST['name'], $_POST['email'], $_POST['phone']]);
    // if($dbCon->lastInsertId() >0 ){
    //     echo "Data saved";
    // }
    // else{
    //     echo "Something went wrong";
    // }


}

//var_dump($sm->getAll());

$studs = $sm->getAll();
if(isset($_GET['id'])){
    $sm->setId($_GET['id']);
    $studs = $sm->getById();
}
$len = count($studs);
if($len > 0){
    echo '<table border="1" cellspacing="0" cellpadding="0">
    <thead><th>No.</th><th>Name</th><th>Email</th><th>Phone</th></thead>';
    for($i=0; $i<$len; ++$i){
        echo '<tr>';
        echo '<td>'.($i+1).'</td>';
        echo '<td>'.($studs[$i]['name']).'</td>';
        echo '<td>'.($studs[$i]['email']).'</td>';
        echo '<td>'.($studs[$i]['phone']).'</td>';
        echo '</tr>';
    }
   echo ' </table>';
}
?>

