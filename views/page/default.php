<html>
	<head>
		<title><?php $Data->PageTitle ?></title>
	</head>
	<body>
		<?php $Application->AddComponent( "Hello", "Hello/HelloSmall", $Data->HelloInputData ); ?>
	</body>
</html>