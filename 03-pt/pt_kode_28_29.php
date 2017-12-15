<?php
$html= array(
           "http://forlap.dikti.go.id/perguruantinggi/detail/MDZDRkU4MEQtREU4NS00ODhELUI3MjEtRDUyQjU5QjZCMjUx",
           "http://forlap.dikti.go.id/perguruantinggi/detail/MTBEOUYxQkYtMzE3RS00NUI4LTlCRDEtRjhGNUZBQTE3MzU0",
           "http://forlap.dikti.go.id/perguruantinggi/detail/MTFFQzVFMjAtM0NFMC00OUY3LTkxM0QtNkQ2NDdEMjI0MUE0",
           "http://forlap.dikti.go.id/perguruantinggi/detail/MTcxMjFCNzYtNzk5Ri00M0QxLUEyN0EtQ0M3RUEwN0IxNzJD",
           "http://forlap.dikti.go.id/perguruantinggi/detail/MUIxOTZFNTQtOUZGOC00NTQ4LTlGMDEtOURFOENEMjA0NzU3",
           "http://forlap.dikti.go.id/perguruantinggi/detail/NTUwOEYxMEMtRjNFOC00NThBLTg3QkQtRjU4RENDQTU1ODE3",
           "http://forlap.dikti.go.id/perguruantinggi/detail/NjY2NkM4NkYtNzk0Qi00RUFCLTkwOUQtQjZGMDhCMkM2NENF",
           "http://forlap.dikti.go.id/perguruantinggi/detail/Njg3OThCMkQtNTQ5NC00OUYzLUJDRUYtMjA2OTBBRThGQTA0",
           "http://forlap.dikti.go.id/perguruantinggi/detail/NzExQjQ1NjQtRDY2Qi00OTQ1LTlCMjktOTU1Mjk3MDk3QUEx",
           "http://forlap.dikti.go.id/perguruantinggi/detail/OThEMzA0QjUtQkE4MC00Mjc2LUJEMTgtM0IxNkNCQjdGOUQ1",
           "http://forlap.dikti.go.id/perguruantinggi/detail/OUE1MzM4RDMtREFFMS00MTg3LTgyNEItMDhCNzBCQkEyRkIx",
           "http://forlap.dikti.go.id/perguruantinggi/detail/Q0REOEMyNjMtOUUxQy00OUNFLUFBNEEtRDBBMkUxOUM4NDUx",
           "http://forlap.dikti.go.id/perguruantinggi/detail/Qzg0QUMxMDAtMEJGRS00NEE3LUJDQUYtMERCREY5RUYwRjY0",
           "http://forlap.dikti.go.id/perguruantinggi/detail/RTlFN0QzMEItQUE1OC00M0IxLUI1RDUtNjBGNENCMThCRkRD",
           "http://forlap.dikti.go.id/perguruantinggi/detail/RjExRTIwNzMtNkY0Qi00OTgxLTg3MTAtMUQ0MDAyNTY0OEJD"
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

for($x=0; $x<=14; $x++)
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
