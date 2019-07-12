<?php
namespace App\Http\Controllers\Auth;
use Auth;
use Melipayamak;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->user = new User;
    }

    public function login(Request $request)
    {

        $mobile_no=$request->get('mobile_no');
        $password=$request->get('password');
        if (false){
            return json_encode(["status" => "authOK",'msg'=>'شما قبلا وارد شده اید']);
        }elseif (!$password) {

            if (!$mobile_no) return json_encode(["status" => "error",'msg'=>'شماره همراه را وارد کنید']);
            $user = User::where('mobile_no', $request->get('mobile_no'))->first();

            // Check Condition Mobile No. Found or Not
            if (!$user) {

                return json_encode(["status" => "error",'msg'=>'شماره همراه یافت نشد']);
            }


            // Redirect home page
            \Session::put('user_id', $user->id);
            $user->password=mt_rand(100000,999999);
            try{

                $sms = Melipayamak::sms();
                $to = $mobile_no;
                $from = '+9821000000010000';
                $text = $user->password;
                $response = $sms->send($to,$from,$text);

                $json = json_decode($response);
                //echo $json->Value; //RecId or Error Number
            }catch(Exception $e) {
                echo $e->getMessage();
            }
            $user->save();
            return json_encode(["status" => "numOK",'msg'=>$user->password]);
        }elseif(\Session::has('user_id')){
            $user = User::where('id', \Session::get('user_id'))->first();
            if($password==$user->password)
                Auth::login($user);
                \Session::forget('user_id');
                return json_encode(["status" => "logOK",'msg'=>'با موفقیت وارد شدید']);
        }
        return json_encode(["status" => "error",'msg'=>'رمز صحیح نیست']);
    }
    public function validateMobile(Request $request)
    {
        // Check validation

        $user = User::where('mobile_no', $request->mobile_no)->first();

        // Check Condition Mobile No. Found or Not
        if (!$user) return "false";
        else return "true";

    }
}
