<?php
	
	class ClassAutoLoader
	{

		// upon class initiation, register the autoload method.
		public function __construct(){
			spl_autoload_register( array($this, "AutoLoad") );
		}

		// Takes a class name and determines which class type to load.
		public function AutoLoad( $ClassName )
		{
			// check if the ClassName resembles a factory class.
			if ( substr( $ClassName, -7 ) == "Factory" )
			{
				$this->LoadFactoryClass( $ClassName );
			}
			// check if the ClassName resembles a controller class.
			elseif( substr( $ClassName, 0, 11 ) == "Controller_" )
			{
				$this->LoadControllerClass( $ClassName );
			}
			// check if the ClassName resembles a model class.
			elseif( substr( $ClassName, 0, 6 ) == "Model_" )
			{
				$this->LoadModelClass( $ClassName );
			}
			// since the class doesn't resemble any other class, lets assume
			// it is a generic application class.
			else
			{
				$this->LoadApplicationClass( $ClassName );
			}
		}


		// ============================
		// Class File loader functions:
		// ============================

		private function LoadApplicationClass( $ClassName )
		{
			require_once( "application/".$ClassName.".php" );
		}

		private function LoadFactoryClass( $ClassName )
		{
			require_once( "application/factory/".$ClassName.".php" );
		}

		private function LoadModelClass( $ClassName )
		{
			// edit the classname to resemble the class file name
			$fileName = substr( $ClassName, 6 );
			require_once( "models/".$fileName.".php" );
		}

		private function LoadControllerClass( $ClassName )
		{
			// edit the classname to resemble the class file name
			$fileName = substr( $ClassName, 11 );
			require_once( "controllers/".$fileName.".php" );
		}

	}

?>