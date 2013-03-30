<?php

class BaseController extends Controller
{
	/**
	 * Initializer.
	 *
	 * @access   public
	 * @return   void
	 */
	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @access protected
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
}
