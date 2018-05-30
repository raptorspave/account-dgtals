<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

use App\Notifications\UserRegisteredNotification;

class AuthController extends Controller
{
    /**
     * register
     */

    public function register()
    {
        return view('auth.register');
    }

    public function registerPost()
    {
        $this->validate($this->request, [
            'name' => 'required|max:255',
            'email' => 'required|regex:/.+@.+\..+/i|unique:users|max:255',
            'password' => 'required|max:255|min:6',
            'password2' => 'required|same:password',
            'is_confirmed' => 'accepted'
        ]);

        $newUserModel = User::create([
            'role_id' => 2,
            'name' => $this->request->input('name'),
            'email' => $this->request->input('email'),
            'password' => bcrypt($this->request->input('password')),
        ]);

        if ($newUserModel){
            $this->registered($newUserModel);

            return redirect()->route('site.auth.login')
                ->with('authSuccess', trans('auth.auth_success'));
        } else
            abort(500);
    }

    protected function registered($user)
    {
        $token = hash('sha256', $user->email);

        $verification = UserVerification::create([
            'email' => $user->email,
            'token' => $token,
            'created_at' => now()->format('Y-m-d H:i:s'),
        ]);

        $user->notify(new UserRegisteredNotification($user, $token));
    }

    /**
     * verification
     */

    public function verification($token)
    {
        $row = UserVerification::select('email')
            ->where('token', $token)
            ->first();

        if($row){
            $user = User::where('email', $row->email)->first();
            $user->status = 1;
            $user->save();

            if($user){
                UserVerification::where('email', $row->email)->delete();

                return view('auth.verification', [
                    'message' => trans('auth.verification_success'),
                ]);
            }
        }

        abort(404);
    }

    /**
     * login
     */

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost()
    {
        $remember = $this->request->input('remember') ? true : false;

        $auth_result = Auth::attempt([
            'email' => $this->request->input('email'),
            'password' => $this->request->input('password'),
        ], $remember);

        if ($auth_result) {
            if (Gate::allows('is.admin'))
                return redirect()->route('voyager.dashboard');

            elseif (Gate::allows('is.status'))
                return redirect()->route('site.home');

            $auth_error = trans('auth.access_denied');
        }
        else $auth_error = trans('auth.wrong_password');

        return redirect()->back()
                    ->withInput($this->request->only('email', 'remember'))
                    ->with('authError', $auth_error);
    }

    /**
     * logout
     */

    public function logout()
    {
        Auth::logout();

        return redirect()->route('site.auth.login');
    }
}
