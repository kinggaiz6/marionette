<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Content;
use App\Usermario;


class AdminController extends Controller
{
    public function adminmain(Request $request){
      if($request->has('category')){
        $category = $request->input('category');
        $content = Content::where('cont_category',$category)->get();
      }
      else{
      $content = Content::all();
      }

      $count = 0;

foreach ($content as $value) {
  $count += $value->cont_sell;
}  // $Totalsales = 0;
      return view("admin.adminmain")->with('count',$count);
}
public function myPageAdmin(Request $request){
if($request->input('num') == '1'){
    $content = Content::where('cont_check',1)->get();   /// 등록된컨테츠 띄움
  }
else if ($request->input('num') =='2'){
    $content = Content::where('cont_check',0)->get();  /// 미검토컨텐츠 띄움
  }

  else {
    $content = Content::where('cont_check',1)->get(); /// 기본으로 등록된 컨텐츠
  }
  return view('admin.myPageAdmin')->with('content',$content);
}



public function Reviewed(Request $request){ //검토된 컨텐츠
  $cont_name = $request->input('name');
  $content = Content::where('cont_name',$cont_name)->where('cont_check',1)->get();
  return view('admin.Reviewed')->with('content',$content);
}

public function approval(Request $request){
  $cont_name = $request->input('name');
  Content::where('cont_name',$cont_name)->update(['cont_check'=>1]);
  return Redirect('/myPageAdmin/?num=1');
}

public function Unreviewed(Request $request){ //미검토 컨텐츠
  $cont_name = $request->input('name');
  $content = Content::where('cont_name',$cont_name)->where('cont_check',0)->get();
  return view('admin.Unreviewed')->with('content',$content);
}

public function productDel(Request $request){
  $cont_name = $request->input('name');
  Content::where('cont_name',$cont_name)->delete();
  return Redirect('/myPageAdmin/?num=1');
}

public function createMarioAdmin(){
  return view('admin.createMarioAdmin');
}

public function createAction(Request $request){

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
            $cont_price = $request->input("cont_price");

            $content = new Content;
            $content->cont_price = $cont_price;
            $content->cont_category = $cont_category;
            $content->cont_name = $cont_name;
            $content->cont_effect_sound = $cont_effect_sound;
            $content->cont_background_sound = $cont_background_sound;
            $content->cont_voice = $cont_voice;
            $content->cont_moving = $cont_moving;
            $content->cont_video = $cont_video;
            $content->cont_image = $cont_image;
            $content->cont_detail = $cont_detail;
            $content->cont_check = 1;
            $content->save();
           return Redirect('/myPageAdmin/?num=1');
}

}
