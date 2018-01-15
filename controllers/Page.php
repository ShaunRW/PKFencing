<?php

	class Controller_Page extends Controller implements IController
	{
		public function BuildViewData( $InputData )
		{
			$model = new Model_Page();
			$model->Page = $this->RequestData( $InputData, "page", "pages/home" );

			return $model;
		}
	}

?>