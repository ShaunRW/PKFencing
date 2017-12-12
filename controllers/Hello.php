<?php

	class Controller_Hello extends Controller implements IController
	{
		public function BuildViewData( $InputData )
		{
			$who = $this->RequestData( $InputData, "Name", "World" );
			return new Model_Hello( $who );
		}
	}

?>