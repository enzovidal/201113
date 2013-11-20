<html>
<head>
	<meta charset="UTF-8">
	<title>Repaso</title>
</head>
<body>
	
	<form name="formulario" action="inscribir.php" method="POST">
		<input type="text" name="nombre" placeholder="Nombre"><br>
		<input type="text" name="usuario" placeholder="Usuario"><br>
		<input type="password" name="clave" placeholder="Clave"><br>
		<input type="password" name="clave2" placeholder="Reingrese clave"><br>
		<input type="button" value="Inscribir" onclick="validar();">
	</form>
	
	<script type="text/javascript">
		function validar()
		{
			if (document.formulario.nombre.value.length==0)
					{
						alert("Falta nombre");
						document.formulario.nombre.focus();
						return 0;
					};

			if (document.formulario.usuario.value.length==0)
					{
						alert("Falta usuario");
						document.formulario.usuario.focus();
						return 0;
					};

			if (document.formulario.clave.value.length==0)
					{
						alert("Falta clave");
						document.formulario.clave.focus();
						return 0;
					};

			if (document.formulario.clave2.value.length==0)
					{
						alert("Reingrese Clave");
						document.formulario.clave2.focus();
						return 0;
					};

			if (document.formulario.clave.value!=document.formulario.clave2.value)
					{
						alert("Las claves no coinciden");
						document.formulario.clave.focus();
						return 0;
					};


			document.formulario.submit();

		}
	</script>

</body>
</html>