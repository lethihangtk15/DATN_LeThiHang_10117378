@extends('masterpage')
@section('title','Quản lý bình luận')
@section('main')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
    </div>
    <div class="breadcrumb-line breadcrumb-line-component">
        <ul class="breadcrumb">
            <li><a href="{{asset('home')}}"><i class="icon-home2 position-left"></i> Trang chủ</a></li>
            <li>Quản lý bình luận</li>
        </ul>
    </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">

    <!-- Basic datatable -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title" style="font-size: 30px;font-weight: bold">Danh sách bình luận</h5>
            
        </div>

        <table class="table datatable-basic" id="bsp" style="font-size: 15px">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Người bình luận</th>
                    <th>Bài viết</th>
                    <th>Nội dung</th>
                    <th style="padding-left: 49px">Trạng thái</th>
                    <th>Xoá</th>
                </tr>
            </thead>

            <tbody>
                 <?php $stt=0; ?>
        
        @foreach($lstComment as $key => $item)
        <?php $stt++ ?>
                
                <tr id="tr1">
                    <td>{{$stt}}</td>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->tintuc->TieuDeTin}}</td>
                    <td>{{$item->noidung}}</td>
                    <td style="padding-left: 49px">
                     
                        <?php
                        if($item->trangthai==1){
                            ?>
                            <a href="{{URL::to('/comment/unactive/'.$item->id)}}">Đã duyệt</span></a>
                            <?php
                            }else{
                            ?>  
                            <a href="{{URL::to('/comment/active/'.$item->id)}}">Chờ duyệt</span></a>
                            <?php
                        }
                        ?>
                    </td>
                    <td><a href="{{asset('comment/delete/'.$item->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><img src="source/image/icon.png" style="width:20px;height:20px" /></a></td>
                </tr>
                @endforeach
            </tbody>


        </table>
    </div>
    <!-- /basic datatable -->
    
    </div>
</div>
<!-- /main content -->

@stop