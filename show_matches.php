<table id="search-result" class="table">
	<tr>
		<th>Código</th>
		<th>Nome do produto</th>
		<th>Quantidade disponível</th>
		<th></th>
	</tr>
		
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "usbw";
		$db = "testeweb";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $db);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$selected = mysqli_select_db($conn, "testeweb");
		if (!$selected) {
			die('Invalid query: ' . mysql_error());
		}

		$arg = $_POST['search'];
		$sql = sprintf("SELECT id_product,name,qty FROM testeweb WHERE qty > 0 AND name LIKE '%%s%%'", mysql_real_escape_string($arg));

		$result = mysqli_query($conn, $sql);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		}
		if ($result->num_rows > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>\n
			<th>".$row["id_product"]."</th>
			<th>".$row["name"]."</th>
			<th>".$row["qty"]."</th>
			<th id=\"buttonselector_".$row["id_product"]."\"><a href=\"#\" onclick=\"buyOperation(".$row["id_product"]."\, ".($row["qty"]).");\" class=\"btn btn-primary form-control\">Comprar!</a></th>";
		}
		} else {
			echo "<tr>\n
			<th>Não encontramos nada :( experimente procurar em algumas horas!</th>
			<th></th>";
		}
		mysqli_close($conn);
	?>
</table>
