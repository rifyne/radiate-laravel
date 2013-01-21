<?php

class HomeController extends BaseController
{
	/**
	 * Default home controller method.
	 *
	 * @access   public
	 * @return   View
	 */
	public function getIndex()
	{
		return View::make('home.index');
	}
}
