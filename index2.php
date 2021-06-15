<!DOCTYPE html>
<html>
	<head>
		<title>Snackie</title>
		<link rel="stylesheet" href="style.css">

	</head>
	<body>
		<header>
			<div class="heading">
				<a href="index2.php"><img src="img/logo.png" alt=""></a>

				<div class="right_header">
						<ul class="button_user">
              <input class="search" type="text" placeholder="Cari Resep">
							<a href="search.php"><img class="isearch" src="img/isearch.png" alt=""></a>
							<label class="blogin" for="upresep">Buat Resep</label>
							<!-- <a href="upresep.php"><button class="blogin">Buat Resep</button></a> -->
              <a href="profil.php"> <img class="profil" src="img/profil.png" alt=""> </a>
						</ul>
				</div>

			</div>
		</header>

		<div class="body">
			<div class="welcome_word">
				<h1>
					<div class="welcome">
						Selamat datang,
					</div>
					<br>
					<div class="user">
						user!
					</div>
 				</h1>
			</div>
		</div>

		<div class="welcome_resep">
			<h1>Ayo tulis resepmu !</h1>
		</div>

		<div class="resep">
			<div class="resep_form">
				<form action="recipe.php" method="post">
					<input class="rform" type="text" id="upresep" placeholder="Judul Resep">

					<label class="upresep"><input type="file" value="upload">Upload Foto</label>

					<br>
					<textarea class="rtextarea" type="text" placeholder="Tulis resepmu di sini"></textarea>
					<br>
					<a href="recipe.php"><button class="rsend">Unggah</button></a>
				</form>
			</div>
		</div>

		<div class="about">
			<h2>tentang snackie</h2>
		</div>

		<div class="body_about">
			<p>Snackie adalah sebuah web untuk berbagi resep makanan ringan.
				<br>
				Pengguna dapat login untuk bisa membagikan, memilih resep favorit,
				serta berinteraksi dengan pengguna lainnya.
			</p>
		</div>

	</body>
</html>
