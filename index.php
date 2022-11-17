<?php

require 'vendor/autoload.php';
// Parse PDF file and build necessary objects.
$keyword = "Copyright";
$parser = new \Smalot\PdfParser\Parser();
$pdf = $parser->parseFile('assets/BK202200365.pdf');

// $text = $pdf->getPages()[1]->getText();
// print_r($text);
$pages = $pdf->getPages();
$count = count($pages);
// var_dump($count);

for ($x = 0; $x < $count; $x++) {
    if (strpos($pdf->getPages()[$x]->getText(), $keyword) !== false) {
        //print pages
        echo $x + 1 . "\n";
    } else {
        echo "";
    }
}
