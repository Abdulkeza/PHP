<?

if(isset($_POST['submit'])){
    //data validation
    if(empty($_POST['name'])){
        die("You did not enter your name");
    }

    //establishing connection
    require_once('dbConf.php');
    require_once('dbConnection.php');
    require_once('studentModel.php');
    $sm = new StudentModel($_POST['name'], $_POST['email'], $_POST['phone']);
    echo $sm->save();
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
?>