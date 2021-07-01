@extends('masterpage')
@section('title','Thêm mới video');
@section('main')

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm tin video</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-body">

						<form method="post" enctype="multipart/form-data" action="{{asset('video/add')}}">
							<fieldset>
							
							<input type="hidden" name="_token" value="{!! csrf_token()!!}">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group">
										<label>Chuyên mục</label>
										<select required="" name="cate" class="form-control">
											@foreach($typelist as $type)
											<option value="{{$type->id}}">{{$type->tenchuyenmuc}}</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Tiêu đề </label>
										<input required type="text" name="name" class="form-control">
									</div>
									<div class="form-group" >
											
                                    <label>Link </label>
										<input required type="text" name="link" class="form-control">
									</div>
									<div class="form-group" >
										<label>Tóm tắt</label>
										<textarea class="ckeditor" required name="tomtat"></textarea>
										<script type="text/javascript">
											var editor=CKEDITOR.replace('tomtat',{
												language:'vi',
												filebrowserImageBrowseUrl: 'backend/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl:'backend/ckfinder/ckfinder.html?=Type=Flash',
												filebrowserImageUploadUrl:'backend/ckfinder/core/connector/php/.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl:'backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

											});
										</script>
									</div>
									<div class="form-group" >
										<label>Nội dung</label>
										<textarea class="ckeditor" required name="noidung"></textarea>
										<script type="text/javascript">
											var editor1=CKEDITOR.replace('noidung',{
												language:'vi',
												filebrowserImageBrowseUrl: 'backend/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl:'backend/ckfinder/ckfinder.html?=Type=Flash',
												filebrowserImageUploadUrl:'backend/ckfinder/core/connector/php/.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl:'backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

											});
										</script>
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('video')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							</fieldset>
						{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	<script type="text/javascript">
		function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);

                }
                reader.readAsDataURL(input.files[0]);
            }
        }
       
  </script>
  <script type="text/javascript" src="{{asset('../public/backend/ckfinder/ckfinder.js')}}"></script>

@stop