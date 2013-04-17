<?php

require('fpdm.php');

/*$fields = array(
    'First_Name'    => 'Priyank',
    'address' => 'My address',
    'city'    => 'My city',
    'phone'   => 'My phone number'	
);
*/

//$fields	=	null;

$pdf = new FPDM('Confidential3.pdf');
//$pdf->Load($fields, true); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output();

?>
