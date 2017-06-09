<?php
/**
 * Created by PhpStorm.
 * User: bar
 * Date: 8-11-2015
 * Time: 21:06
 */

function Dispatch () {
// routeer de GET acties naar de verschillende functies
//
// login scherm gebruiken als true
    global $smarty;

// login subform
    if ( $_SESSION['toegang'] ) {
        $smarty->assign('showLogin',false);
    } else {
        $smarty->assign('showLogin',true);
    }


// actie login
    if ( isset($_GET["action"])) {
        if ( $_GET["action"] == "login" && $_SESSION['toegang'] == false) {
            $_SESSION['toegang'] = login();

        }
    }

}


function login () {


    /**
     * Created by PhpStorm.
     * User: bar
     * Date: 8-11-2015
     * Time: 20:14
     */
    // nog beter met een variabele
    global $smarty;
    global $toegang;


    include('dbConnect.php');


    // global $email, $password;
    // WTF

    $email= $_POST['username'];
    $password= $_POST['password'];

    //
    $query = "SELECT * from users WHERE email='$email' AND password='$password'";


    try {

        $queryResult = $dbh->prepare($query);
        $queryResult->execute();

        // indien voorkomen dan is het goed
        // Roep hier een functie password secure HASH in


        if ($row = $queryResult->fetch()) {
            $toegang = true;
            $_SESSION["username"] = $email;
            $smarty->assign('showLogin',false);

        } else {

            $toegang = false;

        }

        // indien gewenst .. open laten
        unset($dbh);
        unset($queryResult);
    } catch (PDOException  $e) {
        echo "database Error " . $e;
    }

    return $toegang;

} // end function login()


function add2cart($id) {
    include('dbConnectPublic.php');
    $table = 'products';
    $query = "SELECT productID, name , description, price,in_stock FROM $table WHERE productID='$id';";

    $result = $dbh->query( $query );
    return $result;
}


function getProducts() {

    $table = 'products';
    $query = "SELECT productID, name , description, price,in_stock, thumbnail FROM $table WHERE enabled=1;";
    return  db_query($query);

}


function db_query( $sqlQuery ) {
    include('dbConnectPublic.php');

    $resultArray = array();

    if ( $row = $dbh->query( $sqlQuery ) ) {
        // maak er een associatieve array van
        while ($r = $row->fetch()) {
            array_push($resultArray , $r);
        }
    }
    return $resultArray;

}


function getOrders() {
    /* Was een filestream
    if ( $filestream = fopen('../overzichtWerknemers.txt','r') ) {
        $rn = 1;
        while (($data = fgetcsv($filestream, 1000, ",")) !== FALSE) {
             $num = count($data);
            echo "<p> $num fields in line $rn: <br /></p>\n";
            $rn++;
            for ($c=0; $c < $num; $c++) {
                echo $data[$c];
            }
            echo "<br>";


        }
    }

     */

    $table1 = 'orderregels';
    $table2 = 'products';

    $query = "SELECT orderid, achternaam, name, productaantal1  FROM $table1, $table2 WHERE $table1.productid1 = $table2.productID;";
// Neem anders letterlijk over uit mysql-console
// $query = "SELECT orderid, achternaam, name,productaantal1 FROM `products`, `orderregels` WHERE products.productID = orderregels.productid1";

    return  db_query($query);


}


function show_price($productID) {
    include('dbConnectPublic.php');
    $table = 'products';
    $price = 0;
    $query= "SELECT price FROM products WHERE productID=$productID";
    if ( $row = $dbh->query( $query ) ) {
        // maak er een associatieve array van
        while ($r = $row->fetch()) {
            $price = $r['price'];

        }
    }
    return $price;

}
function get_current_time() //get current date and time as a string
//required to do INSERT queries of DATETIME/TIMESTAMP in different DBMSes
{
    $timestamp = time();
    $s = strftime("%Y-%m-%d %H:%M:%S", $timestamp);
    return $s;
}

function overzichtWerknemers() {

    $table = 'werknemers';
    $query = "SELECT * FROM $table";
    return  db_query($query);

}




?>