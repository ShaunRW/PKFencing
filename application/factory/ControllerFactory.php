<?php

	class ControllerFactory
	{
		public function ControllerFromString( $controllerName )
		{
			$class = "Controller_".$controllerName;
			return new $class();
		}
	}

?>