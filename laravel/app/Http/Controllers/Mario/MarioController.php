<?php

namespace App\Http\Controllers\Mario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Content;
use App\Usermario;
use App\Admin;
use App\Account;


class MarioController extends Controller
{
  public function index(){

    if(Session::get('user_id') == 'admin'){
      return view('admin.adminmain');
    }
    else{
      $content = Content::all();
      return view('marionett.index')->with('content',$content);
    }
  }

  public function product(Request $request){
    $category = $request->input('category','fairytale');
    $content = Content::where('cont_category',$category)->where('cont_check',1)->get();
    return view("marionett.product")->with('content',$content);
  }

  public function productDetail(Request $request){
    $name = $request->input('name','puppy');
    $content = Content::where('cont_name',$name)->get();
    return view("marionett.productDetail")->with('content',$content);
  }



public function preview(Request $request){
$name = $request->input('name');
$content = Content::Where('cont_name',$name)->get();
return view('marionett.preview')->with('content',$content);
}

  public function createMario(){
    return view("marionett.createMario");
  }


  public function createMarioAction(Request $request){
    // return ($_FILES['cont_image']['name']);

if($request->hasFile('cont_image')){ /// 이미지  파일 있는지 검사
  $img_file = $request->file('cont_image');
  $img_name = $img_file->getClientOriginalName();
  $img_file->move(public_path('img'), $img_name);
  $cont_image_path = public_path('img').$img_name;
}

if($request->hasFile('cont_video')){  /// 비디오파일 있는지 검사
  $video_file = $request->file('cont_video');
  $video_name = $video_file->getClientOriginalName();
  $video_file->move(public_path('video'), $video_name);
  $cont_image_path = public_path('video').$video_name;
}
          $cont_category = $request->input('cont_category');
          $cont_name = $request->input('cont_name');
          $cont_effect_sound = $request->input('cont_effect_sound');
          $cont_background_sound = $request->input('cont_background_sound');
          $cont_voice = $request->input("cont_voice");
          $cont_moving = $request->input("cont_moving");
          $cont_video = "/video".'/'.$video_name;
          $cont_image = "/img".'/'.$img_name;
          $cont_detail = $request->input("cont_detail");

          $content = new Usermario;
          $content->cont_category = $cont_category;
          $content->user_id = Session::get('user_id');
          $content->cont_name = $cont_name;
          $content->cont_effect_sound = $cont_effect_sound;
          $content->cont_background_sound = $cont_background_sound;
          $content->cont_voice = $cont_voice;
          $content->cont_moving = $cont_moving;
          $content->cont_video = $cont_video;
          $content->cont_image = $cont_image;
          $content->cont_detail = $cont_detail;
          $content->cont_info = 'mycreate';
          $content->save();
         return Redirect('/myMarionetteStory?info=mycreate');
  }

  public function purchase(Request $request){
    $name = $request->input('name','puppy');  //상품이름 조회
    $content = Content::Where('cont_name',$name)->get();
    foreach ($content as $value) {
      $cont_category = $value->cont_category;
      $cont_price = $value->cont_price;
      $cont_detail = $value->cont_detail;
      $cont_effect_sound = $value->cont_effect_sound;
      $cont_background_sound = $value->cont_background_sound;
      $cont_voice = $value->cont_voice;
      $cont_moving = $value->cont_moving;
      $cont_image = $value->cont_image;
      $cont_check = $value->cont_check;
      $cont_sell = $value->cont_sell;
    }


    Content::where('cont_name',$name)->update(['cont_sell'=>$cont_sell+1]);

    $user_id = Session::get('user_id');
    $usermario = new Usermario;
    $usermario->user_id = $user_id;
    $usermario->cont_category = $cont_category;
    $usermario->cont_name = $name;
    $usermario->cont_detail =$cont_detail;
    $usermario->cont_price = $cont_price;
    $usermario->cont_effect_sound = $cont_effect_sound;
    $usermario->cont_background_sound = $cont_background_sound;
    $usermario->cont_voice = $cont_voice;
    $usermario->cont_moving = $cont_moving;
    $usermario->cont_image = $cont_image;
    $usermario->cont_info = 'purchase';
    $usermario->save();


    return Redirect('/myMarionetteStory?info=purchase');
  }



}
