<?php
$html = array(
"http://forlap.dikti.go.id/prodi/detail/QzBGMkI0RjktODdDNC00NTY1LUIyRjEtN0RBOTgzN0QzNDU0/0",
"http://forlap.dikti.go.id/prodi/detail/OUYxQzMxQjktNzM2My00OTcyLUEzREYtNUVCRDkzNEUxMUM3/0",
"http://forlap.dikti.go.id/prodi/detail/NEVFQkI4QkItM0NBNi00RjU5LTk0M0UtNDAyOTJDRjM2QkI5/0",
"http://forlap.dikti.go.id/prodi/detail/MjIxMjRGQjUtREI1QS00MEJDLUJENzQtOUQwNjEyMjE4MDBC/0",
"http://forlap.dikti.go.id/prodi/detail/RDlBNUMzREEtRTcyOC00MDYyLUI3NkEtMkVBMkRDOTJFMTk4/0",
"http://forlap.dikti.go.id/prodi/detail/RDY2MTZCMzEtNkEwMi00REYxLTkxMDctQzQ3QkU5NjMwNEMz/0",
"http://forlap.dikti.go.id/prodi/detail/NjcyMzVERjktMzNDQS00M0Q1LTlBMzktNDg4RjMxNkI1RjQ3/0",
"http://forlap.dikti.go.id/prodi/detail/QjVDNUU2RTgtRTRGMC00MDczLTgyNTgtQjY2MjdCNEMyRDI5/0",
"http://forlap.dikti.go.id/prodi/detail/NjRDMDdBMEYtMjBGMS00M0UzLUE1QTQtQzA2QUU5QjQ2ODc5/0",
"http://forlap.dikti.go.id/prodi/detail/QjZEQThFMDItRUFCMy00RDhDLUFBRjUtMzYzNzkxMDE5Q0RD/0",
"http://forlap.dikti.go.id/prodi/detail/OEIxRTNGQzUtNjMwMi00QjJFLTlFM0YtRUUyRjAyREMzNjFC/0",
"http://forlap.dikti.go.id/prodi/detail/OUFFNDM2NUUtODFFRS00N0MwLUE1RUEtNzE4QzFFODAzRkEz/0",
"http://forlap.dikti.go.id/prodi/detail/MzlGRDgzMUItQ0U0OC00RTIyLUJDMTYtQzFDRUFGMDcwNEU3/0",
"http://forlap.dikti.go.id/prodi/detail/NDJDMjU3OEEtQkE0OS00RjI1LTg1RTktMjU1QzVGRTQwMjQ2/0",
"http://forlap.dikti.go.id/prodi/detail/NTUwMUMyRjMtNkQ3RS00MDEwLUE4RTMtOTcxNTRGNkYzMjE0/0",
"http://forlap.dikti.go.id/prodi/detail/NTdFQUIzNDItMTE1OC00NEJCLUFGRkItREM1Q0JBQkZFQkQx/0",
"http://forlap.dikti.go.id/prodi/detail/NkYyM0I5RkYtMzkwNi00NTQ5LTlERDMtNDQzRkI2QTIzNTc0/0",
"http://forlap.dikti.go.id/prodi/detail/RDkyODdEQUQtMDg2Qi00Q0Q2LTlBMDgtNTM4Mjg5MUM3NTc1/0",
"http://forlap.dikti.go.id/prodi/detail/RjBFRDVCMjgtMEI0Mi00NjdGLUI2MjQtOTc2OUJFRTBCRjYx/0",
"http://forlap.dikti.go.id/prodi/detail/OTQ0Qjk2NDktRkJBMi00MDkzLUE5MEMtMUU4RDMxNDQyMDJG/0",
"http://forlap.dikti.go.id/prodi/detail/MDJBRUYzOTgtMzU4Ni00N0Q0LTlENzAtNTdDNDgxOEE4MDZB/0",
"http://forlap.dikti.go.id/prodi/detail/Qjg3Q0ZFRjgtRjQzOC00M0EyLThCRkItMDYwOUU0Nzc2RkZC/0",
"http://forlap.dikti.go.id/prodi/detail/MDA5QjZENjUtOEZGNi00NkRELTkzNjUtMEJDQjQ5ODlBRkEy/0",
"http://forlap.dikti.go.id/prodi/detail/MjI5REQ1QTAtRDk2OC00QjIzLTkzMzItOUYzN0VDODZGOTA4/0",
"http://forlap.dikti.go.id/prodi/detail/NkY4RTkxNzYtRTY5MS00NzUyLTgxNjItRDdCMDc4OEFFRTJE/0",
"http://forlap.dikti.go.id/prodi/detail/MERENUQ5QTktRDNFMy00OTg2LTkwRTMtNkIwMjM4NTIzQTM0/0",
"http://forlap.dikti.go.id/prodi/detail/RjUwNTZGMDItNzRGNC00NzNBLUIwQjgtRDlBOEJCNDA1MTlC/0",
"http://forlap.dikti.go.id/prodi/detail/QjNDMTdFNTItRTY3RS00NDg1LUIwMjktMUJCRjFGM0JFMzVB/0",
"http://forlap.dikti.go.id/prodi/detail/MEVEOEJEQzktNkEyMS00NDAxLUExOTEtRTUwQkE5NTE5MUU4/0",
"http://forlap.dikti.go.id/prodi/detail/OENGOTY5NUYtMDRENC00NjQxLTkxM0YtRjgwQkIyMDEzMzgw/0",
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

date_default_timezone_set("Asia/Jakarta");
echo "=========================<br>";
echo ">> Mulai : pukul " . date('h:i:s') . " WIB<br>";
echo "=========================<br>";

echo "No : Nama PT : Kode Program Studi : Nama Program Studi : Alamat : Kode Pos : Telepon : Faximile : Email<br>";

for($x=0; $x<=29; $x++)
{
    $kodeHTML = bacaHTML($html[$x]);

    $namaPTN = explode("<td class='tright' valign='top'>Perguruan Tinggi</td>", $kodeHTML);
    $namaPTN1 = explode("<td class='tright' valign='top'>Kode Program Studi</td>", $namaPTN[1]);

    $kodeprodi = explode("<td class='tright' valign='top'>Kode Program Studi</td>", $kodeHTML);
    $kodeprodi1 = explode("<td class='tright' valign='top' width='200px'>Nama Program Studi</td>", $kodeprodi[1]);

    $namaprodi = explode("<td class='tright' valign='top' width='200px'>Nama Program Studi</td>", $kodeHTML);
    $namaprodi1 = explode("<td class='tright' valign='top'>Tanggal Berdiri</td>", $namaprodi[1]);

    $alamatPTN = explode("<td class='tright' valign='top'>Alamat</td>",$kodeHTML);
    $alamatPTN1 = explode("<td class='tright' valign='top'>Kode Pos</td>",$alamatPTN[1]);

    $kodeposPTN = explode("<td class='tright' valign='top'>Kode Pos</td>",$kodeHTML);
    $kodeposPTN1 = explode("<td class='tright' valign='top'>Telepon</td>",$kodeposPTN[1]);

    $teleponPTN = explode("<td class='tright' valign='top'>Telepon</td>",$kodeHTML);
    $teleponPTN1 = explode("<td class='tright' valign='top'>Faximile</td>",$teleponPTN[1]);

    $faxPTN = explode("<td class='tright' valign='top'>Faximile</td>",$kodeHTML);
    $faxPTN1 = explode("<td class='tright' valign='top'>Email</td>",$faxPTN[1]);

    $emailPTN= explode("<td class='tright' valign='top'>Email</td>",$kodeHTML);
    $emailPTN1= explode("<td class='tright' valign='top'>Website</td>",$emailPTN[1]);

	echo $x+1;
    echo $namaPTN1[0];
    echo $kodeprodi1[0];
    echo $namaprodi1[0];
    echo $alamatPTN1[0];
    echo $kodeposPTN1[0];
    echo $teleponPTN1[0];
    echo $faxPTN1[0];
    echo $emailPTN1[0];
    echo "<br>";
}

echo "==========================<br>";
echo ">> Selesai : pukul " . date('h:i:s') . " WIB<br>";
echo "==========================<br>";

?>
