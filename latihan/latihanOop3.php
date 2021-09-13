<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmatika</title>
</head>
<body>
    <form action="" method="post">
<fieldset>
    <legend>Aritmatika</legend>
            <table>
                <tr>
                    <td>bilangan1</td>
                    <td>:</td>
                    <td><input type="number" name="bil1"></td>
                </tr>
                <tr>
                    <td>bilangan2</td>
                    <td>:</td>
                    <td><input type="number" name="bil2"></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
<?php

class aritmatika
{
    public $bill1;
    public $bill2;

    public function __construct($bill1, $bill2)
    {
        $this->bill1 = $bill1;
        $this->bill2 = $bill2;
    }
}

if (isset($_POST['proses'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $aritmatika1 = new aritmatika($bil1, $bil2);
    $tambah = $bil1 + $bil2;
    $kurang = $bil1 - $bil2;
    $bagi = $bil1 / $bil2;
    $kali = $bil1 * $bil2;
    $modulus = $bil1 % $bil2;

    echo $bil1 . "+" . $bil2 . "=" . $tambah . "<br>";
    echo $bil1 . "-" . $bil2 . "=" . $kurang . "<br>";
    echo $bil1 . "/" . $bil2 . "=" . $bagi . "<br>";
    echo $bil1 . "x" . $bil2 . "=" . $kali . "<br>";
    echo $bil1 . "%" . $bil2 . "=" . $modulus . "<br>";

}
