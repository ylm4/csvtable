<?php
//$csv_array = array()
$html = '<table>';
$file = fopen("grads.csv","r");

while (!feof ($file))
  {
//  print_r(fgetcsv($file));
  $csv = fgetcsv($file);
  $html .= '<tr>';
  $html .= '<tbody>';
  foreach($csv as $val)
  {
  $html .= '<td>'.$val.'</td>';

  }
  $html .= '<tbody>';
  $html .= '</tr>';
 // $csv_array = fgetcsv($file)
  }
fclose($file);
$html .= '</table>';
echo $html;


?>
