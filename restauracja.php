<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>

<body>
  <div  id="bodym">
    <?php
    require_once "dbconnect.php";
    $conn=mysqli_connect($host,$user,$pass,$db) or die("error");

    ?>
<div id="baner"> <h1>Witamy w restauracji "Wszystkie smaki" </h1>   </div>
<div id="lewy"> <img src="menu.jpg" alt="nie mozna zaladowac zdjecia"></div>
<div id="prawy"> <h1><b>u nas dobrze zjesz!</h1></b></br>
<ul>
<li>obiady od 40zl</li>
<li>przekaski od 10zł</li>
<li>kolacje od 20zl</li>
</ul>
</div>
<div id="dolny">
  Zarezerwuj stolik online
<form action="restauracja.php" method="post">
  Data(rr-mm-dd)</br>
<input type="date" name="data_rez"></br>
ile osob </br>
<input list="ile" name="ile_osob">
<datalist id="ile_osob">
  <option value="1">
    <option value="2">
      <option value="3">
        <option value="4">
        </datalist>
      </br>
      twoj nr telefonu</br>
      <input type="text" name="telefon"></br>
      <input type="checkbox"> zgadzam sie na przetwarzanie moich danych osobowych</br>
      <input type="submit" value="wyczysc">
      <input type="submit"value="rezeruj">
<?php
require_once 'dbconnect.php';
mysqli_connect($host,$user,$pass,$db);
$data_rez=$_POST['data_rez'];
$ile_osob=$_POST['ile_osob'];
$telefon=$_POST['telefon'];

  $sql="insert into rezerwacje (data_rez, liczba_osob,telefon) values ($data_rez,$ile_osob,$telefon)";


 ?>


</form>
 </div>
  <div id="fotter"><i>strone internetowa opracowal: 99121000558</i> </div>

  </div>

</body>
</html>
