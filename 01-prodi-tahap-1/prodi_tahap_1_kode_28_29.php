<?php
$prodi = array(
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
"http://forlap.dikti.go.id/perguruantinggi/detail/RjExRTIwNzMtNkY0Qi00OTgxLTg3MTAtMUQ0MDAyNTY0OEJD",
			);

date_default_timezone_set("Asia/Jakarta");
echo "=========================<br>";
echo ">> Mulai : pukul " . date('h:i:s') . " WIB<br>";
echo "=========================<br>";		 

for($x=0; $x<=14; $x++)
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

