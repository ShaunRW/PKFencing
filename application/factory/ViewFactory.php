<?php

	class ViewFactory
	{
		public function LoadView( $ViewName, $Data, $Application )
		{
			require( "views/".$ViewName.".php" );
		}
	}

?>