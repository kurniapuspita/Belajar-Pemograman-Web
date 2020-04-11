<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Nilai Faktorial Menggunakan While</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
	<?php
		$n = isset($_POST['n']) ? $_POST['n'] : NULL;
		if(isset($_POST['submit']))
		 {
			if($n!=NULL)
			{
			 $bil = 1;
			 $i=0;
				while($i<$n)
				{
				 $i++;
				 $bil= $bil*$i;
				}
			}
		else
		 {
		  $bil = 'Bilangan tidak boleh kosong!';
		 }
		}

echo '<div class="panel">';
echo '<h2><center>Menghitung Nilai Faktorial Menggunakan While</center></h2>';
echo '<hr>';
echo '<h4>Masukkan Bilangan :</h4>';
echo '<form action="" method="post">';
echo '<input class="field" type="text" name="n" value="'.$n.'" autocomplete="off" placeholder="Masukkan bilangan"/>';
echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
echo '</form>';
if((isset($n))and($n!=NULL))
{
	echo '<h4>Hasil Faktorial :</h4>';
	echo '=> ';
	for($i=1;$i<$n;$i++)
	{echo $i.'x';}
	 echo $n;
     echo '<br>';
}
echo '<h4>Jumlah Faktorial :</h4>';
echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
echo '<hr>';
echo '<a class="created">created by Arumi Adnindriasih</a>';
echo '<br>';
echo '</div>';
?>
</body>
</html>