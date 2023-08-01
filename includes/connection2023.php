<?php
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$level = $_POST["level"];
$email = $_POST["email"];


$con=mysqli_connect('database-2023.cbbgazpu0nuy.eu-central-1.rds.amazonaws.com', 'admin', 'asdasd12345', 'clients', '3306');

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

echo "Connection is active";

echo "<br>";
echo "<br>";

var_dump($name, $age, $gender, $level, $email);

echo "<br>";
echo "<br>";


$insert = "INSERT INTO clients (name, age, gender, level, email)
            VALUES (?,?,?,?,?) ";
$stmt = mysqli_stmt_init($con);

if( ! mysqli_stmt_prepare($stmt,$insert)){
    die(mysqli_error(con));
}

mysqli_stmt_bind_param($stmt, "sisss",
                       $name,
                       $age,
                       $gender,
                       $level,
                       $email);
mysqli_stmt_execute($stmt);

$sql = "SELECT * FROM 'clients' ";

if($result = mysqli_query($con, $sql))
{
    $resultArray = array();
    $tempArray = array();

    while($row = $result->fetch_oject())
    {
        $tempArray = $row;
        array_push($resultArray);
    }

    //close connections
    mysqli_close($con);
}
?>