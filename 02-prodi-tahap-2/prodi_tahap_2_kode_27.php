<?php
$html = array(
"http://forlap.dikti.go.id/prodi/detail/REU3OTBBREMtQUY3Ri00N0UzLTlEMUEtODMzRjBGRjE5M0Yx/0",
"http://forlap.dikti.go.id/prodi/detail/MTRGQjdENUEtNTdCOC00QzAxLTlDNTEtMThDMDFBRDFGM0Y4/0",
"http://forlap.dikti.go.id/prodi/detail/N0NCMkU3MjUtQjc4My00MDk0LUE3REYtQjg4M0FDMDI1MTFC/0",
"http://forlap.dikti.go.id/prodi/detail/NTRCQTRFODYtQTNBNC00NUFELUI5NTItRDIwNkU1NUZDRDcw/0",
"http://forlap.dikti.go.id/prodi/detail/MTk2QTU0OUEtRjQzOC00M0RGLUIyQTgtREVCQ0M4RDBFOUU2/0",
"http://forlap.dikti.go.id/prodi/detail/M0Q5RUZDNjQtMzk1Qi00MTRGLUE2MjgtQUEyODM4OUNGQTcw/0",
"http://forlap.dikti.go.id/prodi/detail/Rjc2MDZDOTAtQ0E3NS00NzlBLUJENjQtNTJEMzEyREZEOTU4/0",
"http://forlap.dikti.go.id/prodi/detail/Qjk1N0U3NDAtOUI2My00RkMxLUFEOTgtQzY4MEE1Q0U3QTBB/0",
"http://forlap.dikti.go.id/prodi/detail/RkJEMDIzNTQtNzRCOS00RkQ1LUJENTYtRUEyOEM1MkU2QkVB/0",
"http://forlap.dikti.go.id/prodi/detail/RTBEOTg1NjYtRjcwRC00MjVDLTlFQzktNEM3MEVGOTRGQzc4/0",
"http://forlap.dikti.go.id/prodi/detail/RDE4RkUzNEEtOTc0Ri00NDczLTk1NjktQjAwNDg4OEI1MzlG/0",
"http://forlap.dikti.go.id/prodi/detail/NzVEQjZFRTctN0VDRC00RkM0LUEzREUtRThFQThCQUUyQzRF/0",
"http://forlap.dikti.go.id/prodi/detail/QjM1MzUxM0QtMzRERi00NUZBLTg5QUUtM0NCNDQ5RTAwNTc0/0",
"http://forlap.dikti.go.id/prodi/detail/QjBBNDI2QjEtOEFBMi00Q0E4LTg2RUYtNUY5MTM5OTg1RURB/0",
"http://forlap.dikti.go.id/prodi/detail/NTk0MkI1RjEtQUZBOC00MzgwLTg5RDUtMEE3NjA5QTk4RThC/0",
"http://forlap.dikti.go.id/prodi/detail/MTA2MkY3MjMtREEzMC00RDYxLUJBODEtMTQzOEUxOTMwMkFF/0",
"http://forlap.dikti.go.id/prodi/detail/NUQ4RjBGQTEtMDIzNi00MURCLTk0RDktNEU3ODBGODI2M0RD/0",
"http://forlap.dikti.go.id/prodi/detail/NjEwNDI2NEYtNjFENi00NzJBLUExQzktQzdBREY4RDhCQzk2/0",
"http://forlap.dikti.go.id/prodi/detail/QjJGN0I5MkUtOEFCNC00NzNFLTlENDktREQ0N0NFMDM2NzMy/0",
"http://forlap.dikti.go.id/prodi/detail/NzcxQUEwQ0ItMUI2OC00NDgyLTkzQ0YtRTRCQUNCMjI4MTZD/0",
"http://forlap.dikti.go.id/prodi/detail/QTFDRTdGNTYtMUQyMC00QUI2LTg0QUQtRTExM0VDQTM2NkQ2/0",
"http://forlap.dikti.go.id/prodi/detail/N0Y2NjJBOTgtNEU1Ny00RjBBLUI2QkQtNkE5RUM0NjJEQTVG/0",
"http://forlap.dikti.go.id/prodi/detail/QTI0MEE0RDMtMzA4My00QTE5LThCRjYtNkU0RTc3MTdCNTlC/0",
"http://forlap.dikti.go.id/prodi/detail/N0E0QkMyN0MtOUU5Ny00MkU3LThGRTQtQ0ZBQkQ1M0E2OEM4/0",
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

for($x=0; $x<=23; $x++)
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
