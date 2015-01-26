<?php

class AccountController extends AuthorizedController
{
    /**
     * Let's whitelist all the methods we want to allow guests to visit!
     *
     * @access   protected
     * @var      array
     */
    protected $whitelist = array(
        'create',
        'store'
    );

    /**
     * Main users page.
     *
     * @access   public
     * @return   View
     */
    public function index()
    {
        return View::make('account.index')->with('user', Auth::user());
    }

    /**
     * User account creation form page.
     *
     * @access   public
     * @return   View
     */
    public function create()
    {
        if (Auth::check()) return Redirect::home();

        return View::make('account.create');
    }

    /**
     * User account creation form processing.
     *
     * @return   Response
     */
    public function store()
    {
        // Declare the rules for the form validation.
        $rules = array(
            'name'                  => 'required|between:2,40',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|min:4|confirmed',
            'password_confirmation' => 'required'
        );

        // Validate the inputs.
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success.
        if ($validator->passes())
        {
            // Create the user.
            $user = new User;
            $user->name         = Input::get('name');
            $user->email        = Input::get('email');
            $user->password     = Input::get('password');
            $user->save();

            Auth::login($user);

            return Redirect::home();
        }

        // Something went wrong.
        return Redirect::to('register')->withInput()->withErrors($validator);
    }
}
