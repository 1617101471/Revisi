@extends('layouts.guest')
@section('content')
<div class="container">
        <div class="row">
            <div class="section-title text-center">
                        <h1>Blog Kami</h1>
                        <div class="chipsofic-subtitle">Baca berita terbaru tentang produk kami</div>
                   </div>
        	<div class="col-lg-8 post-list blog-post-list">
                <div class="single-post">
                    <img class="img-fluid" src="{{ asset('assets/img/gambar/'.$artikel->gambar) }}" alt="" style="max-width: 75%; height: auto; margin-top: 50px;">
                        <h1>
                            {{ $artikel->judul }}
                        </h1>
                    <div class="content-wrap">
                        <p>
                            {!! $artikel->content !!}
                        </p>

                    </div>
                    <!-- Start nav Area -->
                <section class="nav-area pt-50 pb-100">
                    <div class="container">
                        <div class="row justify-content-between">
                            @if(isset($previous))
                            <div class="col-sm-6 nav-left justify-content-start d-flex">
                                <!-- <div class="thumb">
                                    <img src="{{ asset('assets/img/gambar/'.$artikel->gambar) }}" style="width: 20px;" alt="">
                                </div> -->
                                <div class="post-details">
                                    <p><b>{{ $previous->judul }}</b></p>
                                    <h4 class="text-uppercase"><a href="{{ URL::to( '/artikel/single/' . $previous->slug) }}"><<<-Previous</a></h4>
                                </div>
                            </div>
                            @endif
                            @if(isset($next))
                            <div class="col-sm-6 nav-right justify-content-end d-flex">
                                <!-- <div class="thumb">
                                    <img src="{{ asset('assets/img/gambar/'.$artikel->gambar) }}" style="width: 20px;" alt="">
                                </div>   --> 
                                <div class="post-details">
                                    <p><b>{{ $next->judul }}</b></p>
                                    <h4 class="text-uppercase"><a href="{{ URL::to( '/artikel/single/' . $next->slug) }}">Next->>></a></h4>
                                </div>                      
                            </div>
                            @endif
                        </div>
                    </div>    
                </section>
                <!-- End nav Area -->
                </div>
            </div>
            {{--  view composer  --}}
            @include('frontend.side')
            {{--  end view composer  --}}
        </div>
        <br>
        <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://kripcokcoment.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
</div>
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
@endsection
