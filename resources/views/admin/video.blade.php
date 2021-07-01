@extends('masterpage')
@section('title','Quản lý video')
@section('main')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
    </div>
    <div class="breadcrumb-line breadcrumb-line-component">
        <ul class="breadcrumb">
            <li><a href="{{asset('home')}}"><i class="icon-home2 position-left"></i> Trang chủ</a></li>
            <li>Quản lý video</li>
        </ul>
    </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">

    <!-- Basic datatable -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title" style="font-size: 30px;font-weight: bold">Danh sách video</h5>
            <h5></h5>
            <div class="heading-elements">
                <!-- <button class="btn btn-success dropdown-toggle" data-toggle="modal" data-target="#myModal" data-hover="dropdown" class="add-row"><i class="icon-pencil3"></i>Thêm mới<span class="caret"></span></button> -->
                <a href="{{asset('video/add')}}" class="btn btn-primary" ><i class="icon-pencil3"></i>Thêm video</a>
                <!-- <a href="{{asset('sanpham/xuat')}}" class="btn btn-success">Export</a>
                <a href="{{asset('sanpham/import')}}" class="btn btn-success" data-toggle="modal" data-target="#myModal">Import</a> -->
               

            </div>
        </div>

        <table class="table datatable-basic" id="bsp" style="font-size: 15px">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Chuyên mục</th>
                   <th>Tiêu đề tin</th>
                    <th>Link</th>
                    <th>Tóm tắt</th>
                    <!-- <th>Nội dung</th> -->
                    <th style="padding-left: 49px">Sửa</th>
                    <th>Xoá</th>
                </tr>
            </thead>

            <tbody>
                 <?php $stt=0; ?>
        
        @foreach($video as $key => $tt)
        <?php $stt++ ?>
                
                <tr id="tr1">
                    <td>{{$stt}}</td>
                    <td>{{$tt->chuyenmuc->tenchuyenmuc}}</td>
                    <td>{{$tt->TieuDe}}</td>
                    <td>{{$tt->Link}}</td>
                    <td>{!!$tt->TomTat!!}</td>
                    <!-- <td>{{$tt->NoiDung}}</td> -->
                    <td ><a href="{{asset('video/edit/'.$tt->id)}}" style="padding-left: 42px" ><img src="source/image/sua.png" alt="" id="sua"></a></td>
                    <td><a href="{{asset('video/delete/'.$tt->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><img src="source/image/icon.png" style="width:20px;height:20px" /></a></td>
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