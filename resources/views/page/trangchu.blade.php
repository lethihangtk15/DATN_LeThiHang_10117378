@extends('master')
@section('title','Trang chủ')
@section('content')

<div class="slider">
   <div id="lightSlider" class="slides owl-carousel owl-theme owl-loaded" role="listbox" tabindex="0" data-owl-access-keyup="1" data-owl-carousel-focusable="1">
      <div class="owl-stage-outer">
         <div class="owl-stage" style="transform: translate3d(-5396px, 0px, 0px); transition: all 0s ease 0s; width: 9443px;">
            <div class="owl-item cloned" aria-hidden="true" style="width: 1349px;">
               <div>
                  <a href="review-thanh-kinh-duong-da-quyen-sach-cua-nhung-tin-do-lam-dep/index.html" tabindex="-1" data-owl-temp-tabindex="0"><img width="1200" height="507" src="source/assets/wp-content/uploads/2020/03/hinh-dai-dien-review-sach-thanh-kinh-duong-da-1200x507.jpg" class="attachment-kalon-slider size-kalon-slider wp-post-image" alt="hinh dai dien review sach thanh kinh duong da" loading="lazy" itemprop="image"></a>
                 
               </div>
            </div>
            <div class="owl-item cloned" aria-hidden="true" style="width: 1349px;">
               <div>
                  <a href="tong-hop-cac-sach-hay-ve-lam-dep-nen-doc/index.html" tabindex="-1" data-owl-temp-tabindex="0"><img width="1200" height="507" src="source/assets/wp-content/uploads/2020/03/Tong-hop-sach-hay-ve-lam-dep-nen-doc-cap-nhap-lien-tuc-1200x507.jpg" class="attachment-kalon-slider size-kalon-slider wp-post-image" alt="" loading="lazy" itemprop="image"></a>
                  <div class="banner-text">
                     
                  </div>
               </div>
            </div>
            <div class="owl-item" aria-hidden="true" style="width: 1349px;">
               <div>
                  <a href="vien-uong-san-chac-vong-mot-dao-thi-co-tot-khong/index.html" tabindex="-1" data-owl-temp-tabindex="0"><img width="1200" height="507" src="source/assets/wp-content/uploads/2020/04/hinh-dai-dien-dao-thi-co-tot-khong-1-1200x507.jpg" class="attachment-kalon-slider size-kalon-slider wp-post-image" alt="hinh dai dien dao thi co tot khong" loading="lazy" itemprop="image"></a>
                  <div class="banner-text">
                     <div class="container">
                        <div class="text">
                           <span class="category"><a href="danh-muc/review/index.html" rel="category tag" tabindex="-1" data-owl-temp-tabindex="0">Review</a></span>                                    
                           <h2>Viên Uống Săn Chắc Vòng Một Đào Thi Có Tốt Không?</h2>
                           <a class="read-more" href="vien-uong-san-chac-vong-mot-dao-thi-co-tot-khong/index.html" tabindex="-1" data-owl-temp-tabindex="0">Tiếp tục đọc</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="owl-item" aria-hidden="true" style="width: 1349px;">
               <div>
                  <a href="review-thanh-kinh-duong-da-quyen-sach-cua-nhung-tin-do-lam-dep/index.html" tabindex="-1" data-owl-temp-tabindex="0"><img width="1200" height="507" src="source/assets/wp-content/uploads/2020/03/hinh-dai-dien-review-sach-thanh-kinh-duong-da-1200x507.jpg" class="attachment-kalon-slider size-kalon-slider wp-post-image" alt="hinh dai dien review sach thanh kinh duong da" loading="lazy" itemprop="image"></a>
                  <div class="banner-text">
                     <div class="container">
                        <div class="text">
                           <span class="category"><a href="danh-muc/review/index.html" rel="category tag" tabindex="-1" data-owl-temp-tabindex="0">Review</a></span>                                    
                           <h2>[Review] Thánh Kinh Dưỡng Da – Quyển Sách Của Những Tín Đồ Làm Đẹp</h2>
                           <a class="read-more" href="review-thanh-kinh-duong-da-quyen-sach-cua-nhung-tin-do-lam-dep/index.html" tabindex="-1" data-owl-temp-tabindex="0">Tiếp tục đọc</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="owl-item active" aria-hidden="false" style="width: 1349px;">
               <div>
                  <a href="tong-hop-cac-sach-hay-ve-lam-dep-nen-doc/index.html" tabindex="0" data-owl-temp-tabindex="0"><img width="1200" height="507" src="source/assets/wp-content/uploads/2020/03/Tong-hop-sach-hay-ve-lam-dep-nen-doc-cap-nhap-lien-tuc-1200x507.jpg" class="attachment-kalon-slider size-kalon-slider wp-post-image" alt="" loading="lazy" itemprop="image"></a>
                  <div class="banner-text">
                     <div class="container">
                        <div class="text">
                                                             
                           <h2>Tổng Hợp Sách Hay Về Làm Đẹp Nên Đọc [CẬP NHẬP LIÊN TỤC]</h2>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
      <div class="owl-dots">
         <div class="owl-dot"><span></span></div>
         <div class="owl-dot"><span></span></div>
         <div class="owl-dot active"><span></span></div>
      </div>
   </div>
</div>
<div id="content" class="site-content">
   <div class="container">
      <div class="row">
         <div id="primary" class="content-area">
   <main id="main" class="site-main masonry-layout" role="main" style="position: relative; height: 4347.28px;">

      @foreach($tintuc as $t)
               <article id="post-2599" class="post-2599 post type-post status-publish format-standard has-post-thumbnail hentry category-skin-care category-khong-phan-loai tag-cham-soc-da tag-kem-duong-da">
                  <a href="{{asset('chitiettintuc/'.$t->id)}}" class="post-thumbnail"><img width="848" height="461" src="source/image/{{$t->Anh}}" class="attachment-kalon-with-sidebar size-kalon-with-sidebar wp-post-image" sizes="(max-width: 848px) 100vw, 848px"></a>    
                  <div class="text-holder">
                     <span class="category"><a href="loaitin/{{$t->id}}" rel="category tag">{{$t->chuyenmuc->tenchuyenmuc}}</a> </span>    
                     <header class="entry-header">
                        <h2 class="entry-title"><a href="{{asset('chitiettintuc/'.$t->id)}}" rel="bookmark">{{$t->TieuDeTin}}</a></h2>
                        <div class="entry-meta">
                        
                        <!-- .entry-meta -->
                     </header>
                     <!-- .entry-header -->
                     <div class="entry-content">
                        <p>{{$t->TomTat}}… </p>
                     </div>
                     <!-- .entry-content -->
                     <a href="{{asset('chitiettintuc/'.$t->id)}}" class="read-more">Continue Reading</a>
                     
                     <!-- .entry-footer -->
                  </div>
               </article>
               <!-- #post-## -->
      @endforeach
   </main>
   <!-- #main -->
  
</div>
         <!-- #primary -->
         <aside id="secondary" class="widget-area" role="complementary" itemscope="" itemtype="http://schema.org/WPSideBar">
            <section id="search-2" class="widget widget_search">
               <form role="search" action="{{asset('search/')}}" method="get" class="search-form">
                  <label>
                  <span class="screen-reader-text">Tìm kiếm cho:</span>
                  <input type="search" class="search-field" placeholder="Tìm kiếm …" value="" name="key">
                  </label>
                  <input type="submit" class="search-submit" value="Tìm kiếm">
               </form>
            </section>
            <section id="categories-2" class="widget widget_categories">
               <h2 class="widget-title"><span>Danh Mục</span></h2>
               <ul>
                @foreach($danhmuc as $dm)
                  <li class="cat-item cat-item-6"><a href="danh-muc/body/index.html">{{$dm->tenchuyenmuc}}</a></li>
                  @endforeach
               </ul>
            </section>
          
            <section id="kalon_recent_post-1" class="widget widget_kalon_recent_post">
               <h2 class="widget-title"><span>Bài viết nổi bật</span></h2>
               @foreach($noibat as $nb)
               <article class="post">
                  <div class="post-thumbnail">
                     <a href="san-pham-skincare/index.html" class="post-thumbnail">
                     <img width="150" height="150" src="source/image/{{$nb->Anh}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="top sản phẩm skincare" loading="lazy" itemprop="image">     </a>
                  </div>
                  <header class="entry-header">
                     <h3 class="entry-title"><a href="san-pham-skincare/index.html">{{$nb->TieuDeTin}}</a></h3>
                     
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
          