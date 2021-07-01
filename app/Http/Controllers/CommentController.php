<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use DB;

class CommentController extends Controller
{
      //
      public function getDanhSach()
      {
        $lstComment = comment::orderBy('created_at','DESC')->get();
       // dd($lstComment);
        return view('admin.comment',compact('lstComment'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
      }

      public function delete($id){
        $deleteData = DB::table('comment')->where('id', '=', $id)->delete();
        return back();
    }

    public function active($id){
        DB::table('comment')->where('id',$id)->update(['trangthai'=>1]);
        return redirect('comment');

    }

    public function unactive($id){
        DB::table('comment')->where('id',$id)->update(['trangthai'=>0]);
        return redirect('comment');
    }
}
