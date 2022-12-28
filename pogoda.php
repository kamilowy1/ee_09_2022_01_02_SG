<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="styl2.css"/>
    <title>Prognoza pogody Wrocław</title>
</head>
<body>
    <div id="baner_l">
     <img src="logo.png" alt="meteo"/>
    </div>

      <div id="baner_s">
       <h1>Prognoza dla Wrocławia</h1>
      </div>

        <div id="baner_p">
         <p>maj, 2019 r.</p>
        </div>

          <div id="główny">
          <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
<?php
// utworzenie zmiennych polaczeniowych

$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "prognoza";

$conn = mysqli_connect($server,$user,$passwd,$dbname);

//sprawdzenie polaczenia 
/*
if (!$conn){
  die ("fatal error:" .mysqli_error($conn));
} echo "jest okej";
*/

$sql = "SELECT * FROM `pogoda` WHERE `miasta_id`='1' ORDER BY `data_prognozy` ASC";

$zapytanie = mysqli_query($conn,$sql);

while ($wynik = mysqli_fetch_row($zapytanie)){
  echo "<tr>";
  echo "<td>". $wynik[2] ."</td>";
  echo "<td>". $wynik[3] ."</td>";
  echo "<td>". $wynik[4] ."</td>";
  echo "<td>". $wynik[5] ."</td>";
  echo "<td>". $wynik[6] ."</td>";
  echo "</tr>";
}
mysqli_close($conn);
?>
          </table>
          </div>

            <div id="lewy">
             <img src="obraz.jpg" alt="Polska, Wrocław"/>
            </div>

              <div id="prawy">
               <a href="kwerendy.txt">Pobierz kwerendy</a>
              </div>

                <div id="stopka">
                 <p>Stronę wykonał: 000000000</p>
                </div>

</body>
</html>