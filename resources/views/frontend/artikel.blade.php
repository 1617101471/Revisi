@extends('layouts.guest')
@section('content')
<div scroll-spy="true" id="our-blog" class="chipsofic-content-block section-gray">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Blog Kami</h1>
                        <div class="chipsofic-subtitle">Baca berita terbaru tentang produk kami</div>
                   </div>
               </div>
            </div>
            
            <div class="row wow fadeInLeft">
              @foreach($artikels as $data)
                <div class="col-sm-4">
                    <a href="/artikel/single/{{$data->slug}}" class="single-blog-item">
                        <div class="blog-preview blog-bg-1" style="background-image: url(assets/img/gambar/{{$data->gambar}})"></div>
                        <h3>{{$data->judul}}</h3>
                        <div class="post-meta">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i>{{ $data->created_at}}</li>
                                <li><i class="fa fa-thumb-tack"></i>{{$data->user->name}}</li>
                            </ul>
                        </div>
                        <p>{!! str_limit($data->content,100) !!}</p>
                    </a>
                </div>
                @endforeach
            </div>
            {{ $artikels->links() }}
            <br>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ba88a4fc666d426648b09cc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        </div>
    </div>
      
@endsection