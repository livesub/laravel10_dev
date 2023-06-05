<?php
#############################################################################
#
#		파일이름		:		JoinController.php
#		파일설명		:		회원가입
#		저작권			:		저작권은 제작자에 있지만 누구나 사용합니다.
#		제작자			:		김영섭
#		최초제작일	    :		2023년 05월 31일
#		최종수정일		:		2023년 05월 31일
#
###########################################################################-->

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;  //체크
use App\Models\User;    //모델 정의
use Illuminate\Support\Str;     //각종 함수(str_random)

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
    {
        //로그인 된 상태에선 이 페이지 못열게
//        $this->middleware('guest', ['except' => 'destroy']);
    }    
    public function index(Request $request)
    {
        $url = $request->input('url');

        return view('auth.join',[
            'url'   => $url,
        ]);
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $url = trim($request->get('url'));

        $user_id = trim($request->get('user_id'));
        $user_name = trim($request->get('user_name'));
        $user_pw = trim($request->get('user_pw'));
        $user_pw_confirmation = trim($request->get('user_pw_confirmation'));
        //$user_email = $request->get('user_email');
        $user_phone = trim($request->get('user_phone'));
        $user_confirm_code = str::random(60);  //사용자 이메일 확인을 위해서..

        Validator::validate($request->all(), [
            'user_id'  => ['required', 'string', 'regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/', 'max:200', 'unique:users'],
            'user_name'  => ['required', 'string'],
            'user_pw'  => ['required', 'string', 'min:6', 'max:16', 'confirmed'],
            'user_pw_confirmation'  => ['required', 'string', 'min:6', 'max:16', 'same:user_pw'],
            'user_phone'  => ['required', 'max:20']
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
