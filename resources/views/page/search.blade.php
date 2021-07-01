@extends('master')
@section('title','THỜI TRANG Archives - Ferosh Blog | Thời trang thiết kế');
@section('content')

<div id="content" class="site-content">
   <div class="container">
      <div class="search-section">
         <p class="page-title">Tìm kiếm kết quả cho da        
          <span>(Hiển thị {{count($tintuc)}} Các kết quả)</span>
         </p>
      </div>
      <!-- .search-section -->
      <div class="row">
         <section id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
               @foreach($tintuc as $tt)
               <article id="post-2599" class="post-2599 post type-post status-publish format-standard has-post-thumbnail hentry category-skin-care category-khong-phan-loai tag-cham-soc-da tag-kem-duong-da">
                  <header class="entry-header">
                     <h2 class="entry-title"><a href="{{asset('chitiettintuc/'.$tt->id)}}" rel="bookmark">{{$tt->TieuDeTin}}</a></h2>
                    
                     <!-- .entry-meta -->
                  </header>
                  <!-- .entry-header -->
                  <div class="entry-summary">
                     <p>{{$tt->TomTat}} … </p>
                  </div>
                  <!-- .entry-summary -->
               </article>
               <!-- #post-## -->
              @endforeach
               <!-- <nav class="navigation pagination" role="navigation" aria-label="Bài viết">
                  <h2 class="screen-reader-text">Điều hướng bài viết</h2>
                  <div class="nav-links"><span aria-current="page" class="page-numbers current"><span class="meta-nav screen-reader-text">Trang </span>1</span>
                     <a class="page-numbers" href="https://vivitabeauty.vn/page/2/?s=da"><span class="meta-nav screen-reader-text">Trang </span>2</a>
                     <span class="page-numbers dots">…</span>
                     <a class="page-numbers" href="https://vivitabeauty.vn/page/16/?s=da"><span class="meta-nav screen-reader-text">Trang </span>16</a>
                     <a class="next page-numbers" href="https://vivitabeauty.vn/page/2/?s=da">Kế tiếp</a>
                  </div>
               </nav> -->
            </main>
            <!-- #main -->
         </section>
         <!-- #primary -->
      </div>
      <!-- .row -->
   </div>
   <!-- .container -->
</div>
@endsection