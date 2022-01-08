<?php
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "tugasbejoy";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

$sql = mysqli_query($conn, "update contactus set draft='Done' where id='$_GET[id]'");
header("Location: home.php");
// $data = mysqli_fetch_array($sql);
?>

<!-- <H1>reservasi</H1>
<form action="" method="post">
    <table>
        <tr>
            <td width="120"> ID </td>
            <td><input type="text" name="id" value="<?php echo $data['id'];?>"></td>
        </tr>
    </table>
</form> -->