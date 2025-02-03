<?php
$result = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                $result = $num2 != 0 ? $num1 / $num2 : 'Salah!!!';
                break;
            default:
                $result = 'Nah Kan Gagal, Salah tuu';
                break;
        }
    } else {
        $result = 'Masukkan angka yang Benar';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP</title>
</head>

<body>
    <h1>Kalkulator Sederhana</h1>
    <form method="POST" action="">
        <input type="number" name="num1" placeholder="Angka 1" required>
        <select name="operator">
            <option value="add">Tambah (+)</option>
            <option value="subtract">Kurang (-)</option>
            <option value="multiply">Kali (*)</option>
            <option value="divide">Bagi (/)</option>
        </select>
        <input type="number" name="num2" placeholder="Angka 2" required>
        <button type="submit">Hitung</button>
        <button type="reset">Reset</button>
    </form>
    <h2>Hasil: <?php echo $result; ?></h2>
</body>

</html>