@extends('master')
@section('title','VIVITA BEAUTY BLOG');
@section('content')
<div id="content" class="site-content">
   <div class="container">
      <div class="row">
         <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
               <article id="post-2599" class="post-2599 post type-post status-publish format-standard has-post-thumbnail hentry category-skin-care category-khong-phan-loai tag-cham-soc-da tag-kem-duong-da">
                  <div class="post-thumbnail"><img width="848" height="461" src="source/image/{{$tintuc->Anh}}" class="attachment-kalon-with-sidebar size-kalon-with-sidebar wp-post-image" alt="kem dưỡng da" loading="lazy" itemprop="image" srcset="https://vivitabeauty.vn/wp-content/uploads/2021/05/kem-duong-da-848x461.jpg 848w, https://vivitabeauty.vn/wp-content/uploads/2021/05/kem-duong-da-300x163.jpg 300w, https://vivitabeauty.vn/wp-content/uploads/2021/05/kem-duong-da-1024x555.jpg 1024w, https://vivitabeauty.vn/wp-content/uploads/2021/05/kem-duong-da-111x60.jpg 111w" sizes="(max-width: 848px) 100vw, 848px"></div>
                  <div class="text-holder">
                     <span class="category"><a href="loaitin/{{$tintuc->id}}" rel="category tag">{{$tintuc->chuyenmuc->tenchuyenmuc}}</a></span>    
                     <header class="entry-header">
                        <h1 class="entry-title">{{$tintuc->TieuDeTin}}</h1>
                        
                        <!-- .entry-meta -->
                     </header>
                     <!-- .entry-header -->
                     <div class="entry-content">
                        {!!$tintuc->NoiDung!!}
                     <!-- .entry-footer -->
                  </div>
               </article>
               <!-- #post-## -->
              
               <div id="comments" class="comments-area">
                  <div id="respond" class="comment-respond">
                  <h3 id="reply-title" class="comment-reply-title">Bình luận <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Hủy</a></small></h3>
                  @foreach($comment as $item)
                     <p class="comment-notes"><span id="email-notes">{{$item->user->name}} : </span>{{$item->noidung}}<span class="required"></span></p>
                   @endforeach
                     <h3 id="reply-title" class="comment-reply-title">Trả lời <small><a rel="nofollow" id="cancel-comment-reply-link" href="/kem-duong-da/#respond" style="display:none;">Hủy</a></small></h3>
                     <form action="{{route('home.comment')}}" method="post" id="commentform" class="comment-form" novalidate="">
                        {{csrf_field()}}
                        <p class="comment-notes"><span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span> Các trường bắt buộc được đánh dấu <span class="required">*</span></p>
                        <p class="comment-form-comment"><label class="screen-reader-text" for="comment">Bình luận</label><textarea id="comment" name="noidung" cols="40" rows="8" required="required" placeholder="Bình luận"></textarea></p>
                        @if(Route::has('login'))
									@auth
                              <input type="hidden" value="{{Auth::user()->id}}" name="idUser" id="idUser">
                           @endif
								@endif
                        <input type="hidden" value="{{$tintuc->id}}" name="idTinTuc" id="idTinTuc">
                        <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Phản hồi"> <input type="hidden" name="comment_post_ID" value="2599" id="comment_post_ID">
                           
                           </p>
                     </form>
                  </div>
                  <!-- #respond -->
               </div>
               <!-- #comments -->
            </main>
            <!-- #main -->
         </div>
         <!-- #primary -->
         <aside id="secondary" class="widget-area" role="complementary" itemscope="" itemtype="http://schema.org/WPSideBar">
            <section id="search-2" class="widget widget_search">
               <form role="search" method="get" class="search-form" action="https://vivitabeauty.vn/">
                  <label>
                  <span class="screen-reader-text">Tìm kiếm cho:</span>
                  <input type="search" class="search-field" placeholder="Tìm kiếm …" value="" name="s">
                  </label>
                  <input type="submit" class="search-submit" value="Tìm kiếm">
               </form>
            </section>
            <section id="categories-2" class="widget widget_categories">
               <h2 class="widget-title"><span>Danh Mục</span></h2>
               <ul>
                 @foreach($cm as $cm1)
                  <li class="cat-item cat-item-6"><a href="loaitin/{{$cm1->id}}">{{$cm1->tenchuyenmuc}}</a></li>
                  @endforeach
               </ul>
            </section>
            
            <section id="kalon_recent_post-1" class="widget widget_kalon_recent_post">
               <h2 class="widget-title"><span>Bài viết liên quan</span></h2>
               @foreach($lienquan as $lq)
               <article class="post">
                  <div class="post-thumbnail">
                     <a href="{{asset('chitiettintuc/'.$lq->id)}}" class="post-thumbnail">
                     <img width="150" height="150" src="source/image/{{$lq->Anh}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="kem dưỡng da" loading="lazy" itemprop="image">                                </a>
                  </div>
                  <header class="entry-header">
                     <h3 class="entry-title"><a href="{{asset('chitiettintuc/'.$lq->id)}}">{{$lq->TieuDeTin}}</a></h3>
                    
                  </header>
               </article>
               @endforeach
            </section>
            
         </aside>
         <!-- #secondary -->
      </div>
      <!-- .row -->
   </div>
   <!-- .container -->
</div>
@endsection