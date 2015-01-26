<?php

class SessionController extends \BaseController {

    /**
     * Show the form for creating a new session.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::check())
        {
            return Redirect::to('account');
        }

        // Show the login page.
        return View::make('session.create');
    }


    /**
     * Store a newly created session
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required'
        );

        $email      = Input::get('email');
        $password   = Input::get('password');

        $input      = Input::only('email', 'password');

        $validator = Validator::make($input, $rules);

        if ($validator->passes())
        {
            if (Auth::attempt(['email' => $email, 'password' => $password]))
            {
                return Redirect::home();
            }

            return Redirect::to('login')->with('error', 'Email or password invalid.');
        }

        // Something went wrong.
        return Redirect::to('login')->with('error', $validator);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id = null)
    {
        Auth::logout();

        return Redirect::home();
    }


}
