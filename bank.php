<?php
//Database Information
$hostname = "localhost";
$username = "root";
$SQLpassword = "";
$db = "bankaccounts";
//Database Connection
$dbconnect = mysqli_connect($hostname,$username,$SQLpassword, $db);


if ($dbconnect->connect_errno){
    die("Database connection failed: ". $dbconnect->connect_errno);
}
?>

<?php
    if(isset($_GET["moneyHave"])){

        $moneysql = $dbconnect->prepare("SELECT Balance from ppl where PersonName = ?");
        $moneysql->bind_param("s", $_GET["moneyHave"]);
        $selectionWentOK = $moneysql->execute();

        if($selectionWentOK){
            $result = $moneysql->get_result();
            while ($row = $result->fetch_assoc()){
                print $row["Balance"]. "<br>";
            }
        } else {
            echo "no results";
        }
        $dbconnect->close();
    }

   /* if(isset($_GET["Deposit"])){
        $depositdraw
    }

    if(isset($_GET["Widthdraw"])){
        $widthdraw
    }*/
?>

