<!DOCTYPE html>
<html>
<head>
    <title>Tugas 13 - Array dan Function</title>
    <style>
        body{
            font-family:Arial;
            background:#f2f2f2;
        }

        .container{
            width:700px;
            margin:auto;
            background:white;
            padding:20px;
            margin-top:40px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        th,td{
            border:1px solid #999;
            padding:10px;
            text-align:center;
        }

        th{
            background:#4CAF50;
            color:white;
        }

        h2{
            text-align:center;
        }

        input[type=text],
        input[type=number]{
            width:100%;
            padding:8px;
            margin:5px 0;
        }

        input[type=submit]{
            background:#4CAF50;
            color:white;
            padding:10px 20px;
            border:none;
            cursor:pointer;
        }

        .hasil{
            margin-top:20px;
            background:#e8f5e9;
            padding:15px;
        }
    </style>
</head>
<body>

<div class="container">

<h2>Aplikasi Nilai Mahasiswa</h2>

<form method="post">

Nama Mahasiswa
<input type="text" name="nama" required>

Nilai Tugas
<input type="number" name="tugas" required>

Nilai UTS
<input type="number" name="uts" required>

Nilai UAS
<input type="number" name="uas" required>

<br><br>

<input type="submit" value="Proses">

</form>

<?php

function hitungRata($tugas,$uts,$uas){
    return ($tugas+$uts+$uas)/3;
}

function grade($nilai){

    if($nilai>=85)
        return "A";
    elseif($nilai>=75)
        return "B";
    elseif($nilai>=65)
        return "C";
    elseif($nilai>=50)
        return "D";
    else
        return "E";
}

if(isset($_POST['nama'])){

    $data=array(

        "Nama"=>$_POST['nama'],
        "Tugas"=>$_POST['tugas'],
        "UTS"=>$_POST['uts'],
        "UAS"=>$_POST['uas']

    );

    $rata=hitungRata($data["Tugas"],$data["UTS"],$data["UAS"]);
    $grade=grade($rata);

    echo "<div class='hasil'>";

    echo "<table>";

    echo "<tr>
            <th>Data</th>
            <th>Nilai</th>
          </tr>";

    foreach($data as $k=>$v){

        echo "<tr>";
        echo "<td>$k</td>";
        echo "<td>$v</td>";
        echo "</tr>";

    }

    echo "<tr>
            <td><b>Rata-rata</b></td>
            <td>".number_format($rata,2)."</td>
          </tr>";

    echo "<tr>
            <td><b>Grade</b></td>
            <td>$grade</td>
          </tr>";

    echo "</table>";

    echo "</div>";

}

?>

</div>

</body>
</html>