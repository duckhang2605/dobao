<?php 
	namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
//muốn sử dụng đối tượng nào ở trong controller thì phải khai báo để sử dụng
//thao tác với csdl
use DB;
//ma hoa
use Hash;


/**
* 
*/
class dangnhapController extends Controller
{	
	function __construct(){
		if(Auth::check())
			view()->share('nguoidung',Auth::user());
	}
	
	public function getdangnhap(){
		return view('layouts.menu');

	}
	public function postdangnhap( Request $Request){
		$this->validate($Request, [
            'email' => 'required',
            'password' => 'required|min:3|max:32',
        ],

        [
           
            'email.required' => 'Hãy nhập vào địa chỉ Email',
            'email.email' => 'Địa chỉ Email không đúng định dạng',
            'email.max' => 'Địa chỉ Email tối đa 255 ký tự',
            'password.required' => 'Hãy nhập mật khẩu',
            'password.min' => 'Mật khẩu tối thiểu 3 ký tự',

        ]);
        // dung de dang nhap
        if(Auth::attempt(['email'=>$Request->email,'password'=>$Request->password]))

        	{
        		return redirect('/');
        	}
        	else{
        		return redirect('/')->with('thongbao','Đăng nhập không thành công');
        	}
	}
	public function getdangxuat(){
		Auth::logout();
		return redirect('/');
	}
}