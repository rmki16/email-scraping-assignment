<?php
$html= array(
           "http://forlap.dikti.go.id/perguruantinggi/detail/MDQwRjUzNzctMTYyNy00RkIxLTg5NDItNDlEQzlEMkZGNzVC",
           "http://forlap.dikti.go.id/perguruantinggi/detail/MzQ5MUI0RjEtMkQ3Ri00OEEwLTkwRjEtNEJENTczRUU5QjE5",
           "http://forlap.dikti.go.id/perguruantinggi/detail/NTdCRDU2QUUtN0RGNS00RkNELTk0QTUtQkJFQjNBREQyODk2",
           "http://forlap.dikti.go.id/perguruantinggi/detail/NzhCM0JCMzctN0UzMy00NjVFLTlGNEMtRjM1NkMyRjU5MTYx",
           "http://forlap.dikti.go.id/perguruantinggi/detail/OURBRjREMkYtMUJBRS00MzgwLTkxQ0ItNjMyQjk1QzIxMjU1",
           "http://forlap.dikti.go.id/perguruantinggi/detail/QjM0NzYwQzItNDI5RC00OTQ0LTk3NjktQTUyRThBODBEMUVD",
           "http://forlap.dikti.go.id/perguruantinggi/detail/QzUwRDgwNDctNjgxMi00QTA4LTg5QjMtRjJBMjdEN0Y0RkJG",
           "http://forlap.dikti.go.id/perguruantinggi/detail/RDc2Njg0MjQtRTU3OC00NEZCLTgyOTYtRDE0NEIzODQ4QzQ1"
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

for($x=0; $x<=7; $x++)
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
