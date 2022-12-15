<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS p10</title>
    <style>
        table{
            border: solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>NIM</td>
            <td>Jurusan</td>
            <td>Email</td>
            <td>Nilai</td>
            <td>Status</td>
        </tr>
        <?php
        $mhs = "Rizky";
        $nim = "123456";
        $jrs = "TI";
        $mail = "Rizky@gmail.com";
        $nilai = [90, 60, 80];
        $sts = ["Lulus","Tidak Lulus"]

        ?>

        <?php for($i = 0; $i<=2;) {
        ?>

        <tr>
            <td class="mhs"><?php echo $mhs; ?></td>
            <td><?php echo $nim; ?></td>
            <td><?php echo $jrs; ?></td>
            <td class="em"><?php echo $mail; ?></td>
            <td><?php echo $nilai[$i]; ?></td>

            <td><?php echo $sts[0];?></td>
            
        <?php $i++;} ?>

        </tr>
    </table>
</body>
</html>