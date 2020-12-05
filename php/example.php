<?php
 // INCLUDE THE phpToPDF.php FILE
require("phpToPDF.php"); 

// SET YOUR PDF OPTIONS
// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'url',
  "source" => 'https://cseb2017.github.io',
  "action" => 'save',
  "save_directory" => '',
  "file_name" => 'bonafide.pdf');

// CALL THE phptopdf FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
echo ("<a href='bonafide.pdf' target='_blank'>Download Your PDF</a>");
?>