<?php

	class MVCApplication
	{

		// Class Factories
		private $ControllerFactory;
		private $ViewFactory;

		// Initialize the mvc application with the controller and view factories.
		public function __construct( $ControllerFactory, $ViewFactory )
		{
			$this->ControllerFactory = $ControllerFactory;
			$this->ViewFactory = $ViewFactory;
		}

		// Adds a component and a view to the current output.
		public function AddComponent( $ControllerName, $ViewName, $InputData = null )
		{
			// Create the requested controller object using the string name.
			$Controller = $this->ControllerFactory->ControllerFromString( $ControllerName );

			// Get the data for the view to utilize.
			$Data = $Controller->BuildViewData( $InputData );

			// Load the view, and pass the $data and the Application object.
			$this->ViewFactory->LoadView( $ViewName, $Data, $this );
		}
	}

?>