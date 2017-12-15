<?php
$prodi = array(
"http://forlap.dikti.go.id/perguruantinggi/detail/MDQwRjUzNzctMTYyNy00RkIxLTg5NDItNDlEQzlEMkZGNzVC",
"http://forlap.dikti.go.id/perguruantinggi/detail/MzQ5MUI0RjEtMkQ3Ri00OEEwLTkwRjEtNEJENTczRUU5QjE5",
"http://forlap.dikti.go.id/perguruantinggi/detail/NTdCRDU2QUUtN0RGNS00RkNELTk0QTUtQkJFQjNBREQyODk2",
"http://forlap.dikti.go.id/perguruantinggi/detail/NzhCM0JCMzctN0UzMy00NjVFLTlGNEMtRjM1NkMyRjU5MTYx",
"http://forlap.dikti.go.id/perguruantinggi/detail/OURBRjREMkYtMUJBRS00MzgwLTkxQ0ItNjMyQjk1QzIxMjU1",
"http://forlap.dikti.go.id/perguruantinggi/detail/QjM0NzYwQzItNDI5RC00OTQ0LTk3NjktQTUyRThBODBEMUVD",
"http://forlap.dikti.go.id/perguruantinggi/detail/QzUwRDgwNDctNjgxMi00QTA4LTg5QjMtRjJBMjdEN0Y0RkJG",
"http://forlap.dikti.go.id/perguruantinggi/detail/RDc2Njg0MjQtRTU3OC00NEZCLTgyOTYtRDE0NEIzODQ4QzQ1",
			);

date_default_timezone_set("Asia/Jakarta");
echo "=========================<br>";
echo ">> Mulai : pukul " . date('h:i:s') . " WIB<br>";
echo "=========================<br>";		 

for($x=0; $x<=7; $x++)
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

