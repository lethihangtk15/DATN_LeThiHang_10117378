<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\chuyenmuc;
use App\Models\tintuc;
use App\Models\comment;
use App\Models\video;
use Illuminate\Support\Facades\Auth;

class FEController extends Controller
{
    //
    
    public function trangchu(){
        $tintuc=tintuc::paginate(10);
        $danhmuc=chuyenmuc::all();
    	$noibat=tintuc::where('NoiBat',1)->paginate(2);
    	return view('page.trangchu',compact('tintuc','noibat','danhmuc'));
    }

    public function chitiettintuc(Request $req){
        $cm=chuyenmuc::all();
    	$tintuc=tintuc::where('id',$req->id)->first();
        $lienquan=tintuc::where('idChuyenMuc',$tintuc->idChuyenMuc)->get();
        $chuyenmuc=chuyenmuc::where('id',$tintuc->idChuyenMuc)->first();
        $comment=comment::where('idTinTuc',$req->id)->where('trangthai',1)->get();       
        return view('page.chitiettintuc',compact('cm','tintuc','lienquan','chuyenmuc','comment'));
    }
    
    public function loaitin($type){
        $chuyenmuc=chuyenmuc::where('id',$type)->first();
        $tintuc=tintuc::where('idChuyenMuc',$type)->get();
        $cm=chuyenmuc::all();
        $noibat=tintuc::where('NoiBat',1)->paginate(2);
        return view('page.loaitin',compact('tintuc','chuyenmuc','cm','noibat'));
    }
    
     public function getSearch(Request $req){
        $tintuc=tintuc::where('TieuDeTin','like','%'.$req->key.'%')->get();
        return view('page.search',compact('tintuc'));

    }

    public function Comment(Request $request){
        if(Auth::check()){
            comment::create($request->all());           
            return redirect('home');
        }else{
            return redirect()->route('login');
        }       
    }

    public function Video(){
        $video=video::all();
        $cm=chuyenmuc::all();
        $noibat=tintuc::where('NoiBat',1)->paginate(2);
        return view('page.video',compact('video','cm','noibat'));
    }

    public function chitietvideo(Request $req){
        $cm=chuyenmuc::all();
    	$video=video::where('id',$req->id)->first();
        $lienquan=tintuc::where('idChuyenMuc',$video->idChuyenMuc)->get();
        $chuyenmuc=chuyenmuc::where('id',$video->idChuyenMuc)->first();
        $comment=comment::where('idTinTuc',$req->id)->where('trangthai',1)->get();       
        return view('page.chitietvideo',compact('cm','video','lienquan','chuyenmuc','comment'));
    }
}
