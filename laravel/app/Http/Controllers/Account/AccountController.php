<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\User;
use App\Admin;
use App\Usermario;
use App\Content;

class AccountController extends Controller
{


////////////////////로그인
public function loginAction(Request $request){
  $user_id = $request->input('user_id');
  $user_password = $request->input('user_password');
  $user = User::where('user_id',$user_id)->get();

foreach ($user as $userINFO) {
  if($userINFO->user_password == $user_password){
    Session::put('user_id',$userINFO->user_id);
    Session::put('user_name',$userINFO->user_name);
    Session::put('user_password',$userINFO->user_password);
    if($userINFO->user_id == 'admin'){
      return Redirect('/adminmain');
    }
    else {
      return Redirect('/');
    }
  }

  ////비밀번호 틀렸을때
  else{
    return Redirect('/');
  }
}
}

public function login(){
  return view('account.login');
}

////////////////////////로그아웃
public function logout(){
  Session::flush();
  return Redirect('/');
}

  /////////////////////////회원가입
  public function registerView(){
    return view("account.registerView");
  }

public function register(Request $request){
  $user_id = $request->input('user_id');
  $user_password = $request->input('user_password');
  $user_name = $request->input('user_name');

  $user = new User;
  $user->user_id = $user_id;
  $user->user_password = $user_password;
  $user->user_name = $user_name;
  $user->save();
  return Redirect('/');
}

public function myPage(){
  return view("account.myPage");
}

public function myInfo(){
  $user_id = Session::get('user_id');
  $user = User::where('user_id',$user_id)->get();
  return view("account.myInfo")->with('user',$user);
}

public function mySell(){
  return view("account.mySell");
}

public function myMarionetteStory(Request $request){
  $info = $request->input('info','mycreate');
  $id = Session::get('user_id');
  $content = Usermario::Where('user_id',$id)->Where('cont_info',$info)->get();
  return view("account.myMarionetteStory")->with('content',$content);
}

public function myMarioDetail(Request $request){
  $name = $request->input('name');
  $content = Usermario::Where('cont_name',$name)->get();
 return view("account.myMarioDetail")->with('content',$content);
}

public function download(Request $request){
  $name = $request->input('name');
  $content = Usermario::Where('cont_name',$name)->get();
  foreach ($content as $value) {
    $cont_image = $value->cont_image;
  }
  return response()->download(public_path().$cont_image);
}

public function makeMoving(){
  return view("account.makeMoving");
}

public function sellApply(Request $request){
  $name = $request->input('name');
  $content = Usermario::Where('cont_name',$name)->get();

  foreach ($content as $value) {
    $cont_category = $value->cont_category;
    $cont_price = $value->cont_price;
    $cont_detail = $value->cont_detail;
    $cont_effect_sound = $value->cont_effect_sound;
    $cont_background_sound = $value->cont_background_sound;
    $cont_voice = $value->cont_voice;
    $cont_moving = $value->cont_moving;
    $cont_image = $value->cont_image;
    $cont_video = $value->cont_video;
  }

  $cont = new Content;
  $cont->cont_category = $cont_category;
  $cont->cont_name = $name;
  $cont->cont_price = '12000';
  $cont->cont_detail =$cont_detail;
  $cont->cont_effect_sound = $cont_effect_sound;
  $cont->cont_background_sound = $cont_background_sound;
  $cont->cont_voice = $cont_voice;
  $cont->cont_moving = $cont_moving;
  $cont->cont_image = $cont_image;
  $cont->cont_check = 0;
  $cont->cont_video = $cont_video;
  $cont->save();
return Redirect('/myMarionetteStory');
}

}
