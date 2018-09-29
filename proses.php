<?php
error_reporting(0);	
if (isset($_POST['submit'])) {
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];

		$login = array('uname'  => 'anton',
					   'pass' => 'antongans');

		if ($uname==$login['uname'] && $pass==$login['pass']) {
			echo "<h1>Selamat Anda Telah Berhasil Login. Silahkan Pilih Film Favorite dan Tujuan Travelling</h1>";
?>

<form method="POST">
	<h2>Pilih Genre Film Favorit :</h2><br>
		Horror<input type="checkbox" name="film[]" value="Horror"><br>
		Action<input type="checkbox" name="film[]" value="Action"><br>
		Anime<input type="checkbox" name="film[]" value="Anime"><br>
		Thriller<input type="checkbox" name="film[]" value="Thriller"><br>
		Animasi<input type="checkbox" name="film[]" value="Animasi"><br>
		
	<br><h2>Pilih Tujuan Wisata Favorit Travelling :</h2><br>
			Bali<input type="checkbox" name="travel[]" value="Bali"><br>
			Raja Ampat<input type="checkbox" name="travel[]" value="Raja Ampat"><br>
			Pulau Derawan<input type="checkbox" name="travel[]" value="Pulau Derawan"><br>
			Bangka Belitung<input type="checkbox" name="travel[]" value="Bangka Belitung"><br>
			Labuan Bajo<input type="checkbox" name="travel[]" value="Labuan Bajo"><br>
			<input type="submit" name="kirim" value="Kirim">
</form>

<?php
		}
		else{
			echo "<h1>Username Atau Password Yang Anda Masukkan Salah<h1>";
		}
	}
	if (isset($_POST['kirim'])) {
			$pilfilm = $_POST['film'];
			$piltravel = $_POST['travel'];

			echo "<h2>PILIHAN FILM FAVORIT ANDA</h2><br>";
			foreach ($pilfilm as $film) {
				echo $film."<br>";
			}

			echo "<h2>PILIHAN TEMPAT TRAVELLING ANDA</h2><br>";
			foreach ($piltravel as $travel) {
				echo $travel."<br>";
			}
	}
?>
