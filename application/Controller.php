<?php

	class Controller
	{
		// return data values assign to the var name. 
		protected function RequestData( $InputData, $VarName, $Default = "" )
		{
			// first, check if the input data override exists for the VarName.
			if ( isset($InputData[$VarName]) )
			{
				return $InputData[$VarName];
			}
			// second, check if there is a $_REQUEST value for the VarName.
			elseif( isset($_REQUEST[$VarName]) )
			{
				return $_REQUEST[$VarName];
			}
			// thirdly, if not input data or request data exists, use the default value specified.
			else
			{
				return $Default;
			}
		}
	}

?>