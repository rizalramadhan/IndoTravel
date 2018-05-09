<html>
<head>
	<title>IndoTravel</title>
	
</head>
<body style="background-color: #666666;">
<?php foreach ($isi->result() as $key): ?>

<form method="post" action="http://localhost/IndoTravel/index.php/user/gantikan/<?php echo $key->id ?>">
	
	<div class="Formnya">
	<div><input type="text" class="usernamenya" name="username" placeholder="Masukan Username"></div>
	<div><input type="password" class="passwordnya" name="password" placeholder="Masukan Password"></div>
	<div><input type="text" name="fullname" class="fullnamenya" placeholder="Masukan Nama Lengkap"></div>
	<div><input type="text" name="level" class="levelnya" placeholder="Masukan Level"></div>
	<div><input type="submit" name="submit" value="submit">
	</div>

</form>

<?php endforeach ?>

</body>
</html>