<?php
require_once 'Persona.php';

$persona1=new Persona("Josaphat","Lopez","Cafes","Negro",1.80,250.1,40,"Soltero","Masculino");
$persona2=new Persona("Cecilia","Flores","Cafes","Negro",1.70,149.1,30,"Soltero","Femenino");
$persona3=new Persona("Raul","Lopez","Cafes","Negro",1.80,155.1,17,"Soltero","Masculino");
$persona4=new Persona("Yuly","Ceron","Cafes","Negro",1.69,150.1,59,"Casada","Femenino");

echo "<table>
<tr>
<td>";
echo $persona1->persona($persona1);
echo $persona1->setEstadoCivil("Comprometido");
echo "<br>Perdon quise decir mi Estado Civil es: ".$persona1->getEstadoCivil();
echo "<br>=================================================<br>";
echo $persona1->programando();
echo "<br>=================================================<br>";
echo "</td>
<td>";
echo $persona2->persona($persona2);
echo $persona2->setPelo("Castaño");
echo "<br>Perdon quise decir mi pelo es: ".$persona2->getPelo();
echo "<br>=================================================<br>";
echo $persona2->correr();
echo "<br>=================================================<br>";
echo "</td>
</tr>
<tr>
<td>";
echo $persona3->persona($persona3);
echo "<br>=================================================<br>";
echo $persona3->comer();
echo "<br>=================================================<br>";
echo "</td>
<td>";

echo $persona4->persona($persona4);
echo "<br>=================================================<br>";
echo $persona4->dormir();
echo "<br>=================================================<br>";
echo "</td>
</tr>
</table>";




