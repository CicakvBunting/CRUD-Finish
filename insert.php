<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ZZmart create</title>
	<style>
html {
    min-height: 100%; 
}


</style>
</head>
<body background="assets/img/bg-masthead.jpg">

	<h1>Buat Produk</h1>
	<form action="doAddProduct.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama Produk</td>
				<td>:</td>
				<td><input type="text" name="NAMAproduct"></td>
			</tr>
			<tr>
				<td>Deskripsi Produk</td>
				<td>:</td>
				<td><textarea name="DESKproduct"></textarea> </td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="number" name="Harga"></td>
			</tr>
			<tr>
				<td>Gambar Produk</td>
				<td>:</td>
				<td><input type="file" name="IMGproduct"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button>Save Product</button></td>
			</tr>
		</table>
	</form>
	<?php
		if(isset($_SESSION["message"])){
			echo $_SESSION["message"];
			unset($_SESSION["message"]);
		}
	?>
</body>
</html>