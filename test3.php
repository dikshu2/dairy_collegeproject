<?php
session_start();
if(isset($_SESSION['name'])){
echo $_SESSION["name"];
}
else{
    echo "nothing stored in session";
}

?>


<html>
    <form action="test3.php" method="get">
        <input type="submit" name = "submit">

    </form>
</html>


<?php
    if(isset($_GET["submit"])){
        session_destroy();
    }
?>