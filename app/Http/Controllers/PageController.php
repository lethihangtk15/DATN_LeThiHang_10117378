<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\chuyenmuc;
use App\Models\tintuc;
use App\Models\comment;
use Auth;
class PageController extends Controller
{
    //
    public function getIndex(){
        return view('admin.index');
    }

    public function getChuyenmuc(){
    	$data['dscm']=DB::table('chuyenmuc')->get();
    	return view('admin.chuyenmuc',$data);
    }
    public function getAddChuyenmuc(){
        $data['dscm']=chuyenmuc::all();
        return view('admin.themchuyenmuc',$data);
    }
     public function postAddChuyenmuc(Request $request){
        
        $tcm=new chuyenmuc;
        $tcm->TenChuyenMuc=$request->txtTen;
        $tcm->save();
        return redirect('chuyenmuc');
    }
    public function getSuaCM($id){
        $chuyenmuc=chuyenmuc::find($id);
        return view('admin.suacm',['chuyenmuc'=>$chuyenmuc]);
    }
    public function postSuaCM(Request $request,$id){
        $chuyenmuc=chuyenmuc::find($id);
        $chuyenmuc->TenChuyenMuc=$request->txtTen;
        
        $chuyenmuc->save();
        return redirect('chuyenmuc');
    }
     public function destroy($id){
        $deleteData = DB::table('chuyenmuc')->where('id', '=', $id)->delete();
        return back();
    }

    public function getTintuc(){
        /*$data['ttlist']=DB::table('tintuc')->join('chuyenmuc','tintuc.id','=','chuyenmuc.Id_ChuyenMuc')->get();
        return view('admin.tintuc',$data);*/
        $tintuc=tintuc::all();
        return view('admin.tintuc',['tintuc'=>$tintuc]);
    }
    public function getAddTin(){
        $data['typelist']=chuyenmuc::all();
        return view('admin.themtin',$data);
    }
     public function postAddTin(Request $request){
        $filename=$request->image->getClientOriginalName();
        $tin=new tintuc;
        $tin->idChuyenMuc=$request->cate;
        $tin->TieuDeTin=$request->name;
        $tin->Anh=$filename;
        $tin->TomTat=$request->tomtat;
        $tin->NoiDung=$request->noidung;
        $request->image->storeAs('source/image',$filename);
        $tin->save();
        return redirect('tintuc');
    }
    public function delete($id){
        $deleteData = DB::table('tintuc')->where('id', '=', $id)->delete();
        return back();
    }
     public function getEditTin($id){
        $data['tintuc']=tintuc::find($id);
        $data['listcate']=chuyenmuc::all();
        return view('admin.suatin',$data);
    }
     
    public function postEditTin(Request $request,$id){
        $tintuc=new tintuc;
        $arr['idChuyenMuc']=$request->cate;
        $arr['TieuDeTin']=$request->name;
        $arr['TomTat']=$request->tomtat;
        $art['NoiDung']=$request->noidung;
        if($request->hasFile('img')){
            $img=$request->img->getClientOriginalName();
            $arr['Anh']=$img;
            $request->img->storeAs('source/image',$img);
        }
        $tintuc::where('id',$id)->update($arr);
        return redirect('tintuc');
    }
   
   
}


        