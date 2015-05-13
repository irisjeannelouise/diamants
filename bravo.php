<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet">
	<title></title>
</head>
<body>
<div class="contenu">

<?php if($_POST["password"] == "diamant"){
	echo "<h1 id='bravo'> Bravo tu as gagné!</h1>";
	}
	else{
		  header('Location: index.php');  
		}
	?>
</div>
</body>
</html>