<?php

	// Include the auto class loader.
	require_once( "application/ClassAutoLoader.php" );

	// Initialize the Auto Class Loader
	$AutoLoader = new ClassAutoLoader();

	// Initialize the factories
	$ControllerFactory  = new ControllerFactory();
	$ViewFactory = new ViewFactory();

	// Initialize the MVC Application
	$Application = new MVCApplication( $ControllerFactory, $ViewFactory );

	// Add the entry point controller and view components.
	if ( isset($_REQUEST['controller']) && isset($_REQUEST['view']) )
	{
		$Application->AddComponent( $_REQUEST['controller'], $_REQUEST['view'] );
	}
	else
	{
		echo "Application Error: Entry Controller and View not supplied.";
	}

?>