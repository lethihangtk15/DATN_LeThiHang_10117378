@extends('master')
@section('title','Video hướng dẫn');
@section('content')
<style>
.post-thumbnail iframe{
    height: 450px;
    width: 787px;
}
</style>
<div id="content" class="site-content">
   <div class="container">
      <div class="category">
         <h4 class="category-title"><span>Video hướng dẫn</span></h4>
      </div>
      <!-- .category -->
      <div class="row">
         <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
               @foreach($video as $t)
               <article id="post-2599" class="post-2599 post type-post status-publish format-standard has-post-thumbnail hentry category-skin-care category-khong-phan-loai tag-cham-soc-da tag-kem-duong-da">
               <div class="post-thumbnail">{!!$t->Link!!}</div>
                  <div class="text-holder">
                     <span class="category"><a href="loaitin/{{$t->id}}" rel="category tag">{{$t->chuyenmuc->tenchuyenmuc}}</a> </span>    
                     <header class="entry-header">
                        <h2 class="entry-title"><a href="{{asset('chitietvideo/'.$t->id)}}" rel="bookmark">{{$t->TieuDe}}</a></h2>
                        <div class="entry-meta">
                        
                        <!-- .entry-meta -->
                     </header>
                     <!-- .entry-header -->
                     <div class="entry-content">
                        <p> {!!$t->TomTat!!}… </p>
                     </div>
                     <!-- .entry-content -->
                     <a href="{{asset('chitietvideo/'.$t->id)}}" class="read-more">Continue Reading</a>
                     
                     <!-- .entry-footer -->
                  </div>
               </article>
               <!-- #post-## -->
              @endforeach
               <!-- #post-## -->
               <nav class="navigation pagination" role="navigation" aria-label="Bài viết">
                  <h2 class="screen-reader-text">Điều hướng bài viết</h2>
                  <div class="nav-links"><span aria-current="page" class="page-numbers current"><span class="meta-nav screen-reader-text">Trang </span>1</span>
                     <a class="page-numbers" href="https://vivitabeauty.vn/danh-muc/skin-care/page/2/"><span class="meta-nav screen-reader-text">Trang </span>2</a>
                     <span class="page-numbers dots">…</span>
                     <a class="page-numbers" href="https://vivitabeauty.vn/danh-muc/skin-care/page/7/"><span class="meta-nav screen-reader-text">Trang </span>7</a>
                     <a class="next page-numbers" href="https://vivitabeauty.vn/danh-muc/skin-care/page/2/">Kế tiếp</a>
                  </div>
               </nav>
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
                  @foreach($cm as $cm1)
                  <li class="cat-item cat-item-6"><a href="https://vivitabeauty.vn/danh-muc/body/">{{$cm1->tenchuyenmuc}}</a></li>
                  @endforeach
               </ul>
            </section>
            <section id="kalon_recent_post-1" class="widget widget_kalon_recent_post">
               <h2 class="widget-title"><span>Bài viết nổi bật</span></h2>
               @foreach($noibat as $nb)
               <article class="post">
                  <div class="post-thumbnail">
                     <a href="{{asset('chitiettintuc/'.$nb->id)}}" class="post-thumbnail">
                     <img width="150" height="150" src="source/image/{{$nb->Anh}}" class="attachment-thumbnail size-thumbnail wp-post-image"  loading="lazy" itemprop="image">                             </a>
                  </div>
                  <header class="entry-header">
                     <h3 class="entry-title"><a href="{{asset('chitiettintuc/'.$nb->id)}}">{{$nb->TieuDeTin}}</a></h3>
                    
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