<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chuyenmuc;
use App\Models\video;
use DB;

class VideoController extends Controller
{
    public function getVideo(){
        /*$data['ttlist']=DB::table('Video')->join('chuyenmuc','Video.id','=','chuyenmuc.Id_ChuyenMuc')->get();
        return view('admin.Video',$data);*/
        $video=video::all();
        return view('admin.video',['video'=>$video]);
    }
    
    public function getAddVideo(){
        $data['typelist']=chuyenmuc::all();
        return view('admin.themvideo',$data);
    }
     public function postAddVideo(Request $request){
        $video=new video;
        $video->idChuyenMuc=$request->cate;
        $video->TieuDe=$request->name;
        $video->Link=$request->link;
        $video->TomTat=$request->tomtat;
        $video->NoiDung=$request->noidung;
        $video->save();
        return redirect('video');
    }
    public function delete($id){
        $deleteData = DB::table('video')->where('id', '=', $id)->delete();
        return back();
    }
     public function getEditVideo($id){
        $data['video']=video::find($id);
       
        $data['listcate']=chuyenmuc::all();
        return view('admin.suavideo',$data);
    }
     
    public function postEditVideo(Request $request,$id){
        $video=new video;
      //  dd($request->link);
        $arr['idChuyenMuc']=$request->cate;
        $arr['TieuDe']=$request->name;
        $arr['TomTat']=$request->tomtat;
        $arr['NoiDung']=$request->noidung;
        $arr['Link']=$request->link;
        $video::where('id',$id)->update($arr);
        return redirect('video');
    }
}
