<?php

	class Controller_Page extends Controller implements IController
	{
		public function BuildViewData( $InputData )
		{
			$model = new Model_Page();
			$model->PageTitle = $this->RequestData( $InputData, "page", "home" );
			
			$model->HelloInputData['Name'] = "Jeffy";

			return $model;
		}
	}

?>