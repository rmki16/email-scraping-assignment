<?php
$prodi = array(
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
"http://forlap.dikti.go.id/perguruantinggi/detail/NDlBNDU4NTItMjFFQi00MDJFLTlCM0UtQTAyNjgzMzYyRjcx",
			);

date_default_timezone_set("Asia/Jakarta");
echo "=========================<br>";
echo ">> Mulai : pukul " . date('h:i:s') . " WIB<br>";
echo "=========================<br>";		 

for($x=0; $x<=20; $x++)
{
    $html = file_get_contents($prodi[$x]);
    //Create a new DOM document
    $dom = new DOMDocument;

    //Parse the HTML. The @ is used to suppress any parsing errors
    //that will be thrown if the $html string isn't valid XHTML.
    @$dom->loadHTML($html);

    //Get all links. You could also use any other tag name here,
    //like 'img' or 'table', to extract other tags.
    $links = $dom->getElementsByTagName('a');

    //Iterate over the extracted links and display their URLs
    foreach ($links as $link)
    {
        //Extract and show the "href" attribute.
        //echo $link->nodeValue;
        echo $link->getAttribute('href'), '<br>';
    }
}

echo "==========================<br>";
echo ">> Selesai : pukul " . date('h:i:s') . " WIB<br>";
echo "==========================<br>";

?>

