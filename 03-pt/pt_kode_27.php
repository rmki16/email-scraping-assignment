<?php
$html= array(
           "http://forlap.dikti.go.id/perguruantinggi/detail/M0JDMkNGQjYtMkFFRi00QkNDLTg5MzgtOTI1RjhGN0E1Njk4",
           "http://forlap.dikti.go.id/perguruantinggi/detail/M0M4M0YzNTktMzA0My00RjFBLTk1RkYtODUxNjM0ODk4Qjkw",
           "http://forlap.dikti.go.id/perguruantinggi/detail/MEQxRkQ2MTAtMTQzMi00REFBLTg1NzMtN0FGMjlDMEUwQTg0",
           "http://forlap.dikti.go.id/perguruantinggi/detail/MTFGMDU2MzItNjE1OS00ODE4LUEwRjItMjE5NDJDODlGQUE2",
           "http://forlap.dikti.go.id/perguruantinggi/detail/MURBRkIwREMtQjg2NS00NEE0LThFM0UtRTJBM0E4RjEyMTQ4",
           "http://forlap.dikti.go.id/perguruantinggi/detail/NEMwQjJDNDYtNUQ5MC00OTExLTg5NzUtRUMyNzNDQjlEREVC",
           "http://forlap.dikti.go.id/perguruantinggi/detail/NTZCQTZCQzMtMDMyOS00NkRCLTkzNzktNzkxRjQzNUYzNjY4",
           "http://forlap.dikti.go.id/perguruantinggi/detail/NjIxNzNBQjUtRTYwMy00MTE1LTlGNDYtOEI3MDhCMjAwOEI3",
           "http://forlap.dikti.go.id/perguruantinggi/detail/NjZBMjA3REUtNkYyMS00MTQwLUJCMTEtQzhCMDcyMTM2QzI5",
           "http://forlap.dikti.go.id/perguruantinggi/detail/NzA1NUFDRjgtOUM3Mi00RkIzLUFENzEtQkFERTlDQzEyRkRD",
           "http://forlap.dikti.go.id/perguruantinggi/detail/NzQ2M0NCNzctNEExMC00MEFELTg1OTYtQUY1OTk2MjU3Njk4",
           "http://forlap.dikti.go.id/perguruantinggi/detail/OTE2QjRFNjItRjBGNi00MjRGLTgzRjItQTVBRDI3QkEzQUQz",
           "http://forlap.dikti.go.id/perguruantinggi/detail/OTU3ODE2MjktM0I1Qi00N0U5LUIyOEMtQkM0QTYwRTBDNTQ1",
           "http://forlap.dikti.go.id/perguruantinggi/detail/QURCOUI4QUEtMzVCOS00MzU3LTk0QkUtQjNFRjRBNzA0MThG",
           "http://forlap.dikti.go.id/perguruantinggi/detail/QjgwRDkyMjEtMTkxNy00NTdGLThBRDctOUZDNzFEQUU3NTc1",
           "http://forlap.dikti.go.id/perguruantinggi/detail/Qzk4RTNFREMtN0YwNy00N0UyLTg5QTItNEY4MTU4M0ZBNUU2",
           "http://forlap.dikti.go.id/perguruantinggi/detail/RDIzQjQ4NEMtRThEQy00RUFBLUJFNUUtQ0E5QkUzQjA0NTgy",
           "http://forlap.dikti.go.id/perguruantinggi/detail/RTNERTYzMzktRjVDRS00MThFLUI5MTYtRjNCQTQwODI3MjA4",
           "http://forlap.dikti.go.id/perguruantinggi/detail/RThFMTBFOEQtMjBCRS00QTlDLThENDItM0ZFRTcyQTI4NzE1",
           "http://forlap.dikti.go.id/perguruantinggi/detail/RUM1OTEwQUItNkYxNy00RjUxLTkxODQtQjJCQkNBMkE2QUU1",
           "http://forlap.dikti.go.id/perguruantinggi/detail/NDlBNDU4NTItMjFFQi00MDJFLTlCM0UtQTAyNjgzMzYyRjcx"
       );
function bacaHTML($url)
{
    // inisialisasi CURL
    $data = curl_init();
    // setting CURL
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    // menjalankan CURL untuk membaca isi file
    $hasil = curl_exec($data);
    curl_close($data);
    return $hasil;
}

echo "No : Nama PT : Alamat : Kota/Kabupaten : Kode Pos : Telepon : Faximile : Email<br>";

for($x=0; $x<=20; $x++)
{
    $kodeHTML = bacaHTML($html[$x]);

    $namaPTN = explode("<td class='tright'>Perguruan Tinggi</td>", $kodeHTML);
    $namaPTN1 = explode("<td class='tright'>Tanggal Berdiri</td>", $namaPTN[1]);

    $alamatPTN = explode("<td class='tright'>Alamat</td>",$kodeHTML);
    $alamatPTN1 = explode("<td class='tright'>Kota/Kabupaten</td>",$alamatPTN[1]);

    $kotaPTN = explode("<td class='tright'>Kota/Kabupaten</td>",$kodeHTML);
    $kotaPTN1 = explode("<td class='tright'>Kode Pos</td>",$kotaPTN[1]);

    $kodeposPTN = explode("<td class='tright'>Kode Pos</td>",$kodeHTML);
    $kodeposPTN1 = explode("<td class='tright'>Telepon</td>",$kodeposPTN[1]);

    $teleponPTN = explode("<td class='tright'>Telepon</td>",$kodeHTML);
    $teleponPTN1 = explode("<td class='tright'>Faximile</td>",$teleponPTN[1]);

    $faxPTN = explode("<td class='tright'>Faximile</td>",$kodeHTML);
    $faxPTN1 = explode("<td class='tright'>Email</td>",$faxPTN[1]);

    $emailPTN= explode("<td class='tright'>Email</td>",$kodeHTML);
    $emailPTN1= explode("<td class='tright'>Website</td>",$emailPTN[1]);

    echo $x+1;
    echo $namaPTN1[0];
    echo $alamatPTN1[0];
    echo $kotaPTN1[0];
    echo $kodeposPTN1[0];
    echo $teleponPTN1[0];
    echo $faxPTN1[0];
    echo $emailPTN1[0];
    echo "<br>";

}

?>
