<!DOCTYPE html>

<html lang=en>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" /> 
		<title>P&amp;K Fencing</title>

		<?php $Application->AddComponent( "page", "include_css" ); ?>

	</head>
	<body>
		
		<?php $Application->AddComponent( "page", "header/top_contact_bar" ); ?>
		<?php $Application->AddComponent( "page", "header/main_header" ); ?>

		<?php $Application->AddComponent( "page", $Data->Page ); ?>

		<?php $Application->AddComponent( "page", "footer/footer" ); ?>
		<?php $Application->AddComponent( "page", "include_js" ); ?>
		
	</body>
</html>