<?php
namespace App\Http\Controllers;
use App\ManualAuth\Guard;
use App\ManualAuth\UserProviders\UserProvider;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
class RegisterController extends Controller
{
    protected $guard;
    protected $userProvider;
    /**
     * RegisterController constructor.
     * @param $guard
     * @param $userProvider
     */
    public function __construct(Guard $guard, UserProvider $userProvider)
    {
        $this->guard = $guard;
        $this->userProvider = $userProvider;
    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $this->validateRegister($request);
        $this->create($request);
        return redirect('home');
    }
    private function validateRegister($request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    private function create($request)
    {
        $credentials = $request->only('name','email','password');  //
        $this->userProvider->setUser($credentials);
        $this->guard->setUser($this->userProvider->getUserByCredentials($credentials));
    }
}
