@extends('layouts.guest')
@section('content')
<div scroll-spy="true" id="our-blog" class="chipsofic-content-block section-gray">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Our Blog</h1>
                        <div class="chipsofic-subtitle">Read the latest news about our product</div>
                   </div>
               </div>
            </div>
            
            <div class="row wow fadeInLeft">
              @foreach($artikels as $data)
                <div class="col-sm-4">
                    <a data-toggle="modal" data-target="#blog-content{{$data->id}}" class="single-blog-item">
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
                @include('frontend.modalartikel')
                @endforeach

            </div>
            <br>
            <div id="disqus_thread"></div>
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
    </div>
      
@endsection