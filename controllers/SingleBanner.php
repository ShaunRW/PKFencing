<?php

	class Controller_SingleBanner extends Controller implements IController
	{
		public function BuildViewData( $InputData )
		{
			$model = new Model_SingleBanner();
			$model->ImageName = $this->RequestData( $InputData, "ImageName", "ColorbondFenceWithFoilage" );

			return $model;
		}
	}

?>