@extends('master')
@section('title','VIVITA BEAUTY BLOG');
@section('content')
<style>
.post-thumbnail iframe{
    height: 450px;
    width: 787px;
}
</style>
<div id="content" class="site-content">
   <div class="container">
      <div class="row">
         <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
               <article id="post-2599" class="post-2599 post type-post status-publish format-standard has-post-thumbnail hentry category-skin-care category-khong-phan-loai tag-cham-soc-da tag-kem-duong-da">
                  <div class="post-thumbnail">{!!$video->Link!!}</div>
                  <div class="text-holder">
                     <span class="category"><a href="loaitin/{{$video->id}}" rel="category tag">{{$video->chuyenmuc->tenchuyenmuc}}</a></span>    
                     <header class="entry-header">
                        <h1 class="entry-title">{{$video->TieuDe}}</h1>
                        
                        <!-- .entry-meta -->
                     </header>
                     <!-- .entry-header -->
                     <div class="entry-content">
                        {!!$video->NoiDung!!}
                     <!-- .entry-footer -->
                  </div>
               </article>
               <!-- #post-## -->
              
              
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