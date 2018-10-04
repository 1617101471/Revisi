@extends('layouts.guest')
@section('content')
<!-- Welcome Area Start -->
    <div scroll-spy="true" id="about-us" class="chipsofic-content-block">
        <div class="container">
            <div class="row">
               <div class="about-us-section">
                @php
                $artikels = App\Artikel::paginate(1)
                @endphp
                @foreach($artikels as $data)
                    <div class="col-md-6">
                        <h1><span>We are</span> Kripcok</h1>
                        <h2>{{$data->judul}}</h2>
                        <p>{!! $data->content !!}</p>
                        <div class="row">
                            <div class="col-sm-6">
                               <h3><i class="fa fa-ban" aria-hidden="true"></i><span>No</span> Preservatives</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem doloremque ea eum eveniet quas.</p>
                            </div>
                            <div class="col-sm-6">
                               <h3><i class="fa fa-heartbeat" aria-hidden="true"></i><span>Health</span> Friendly</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem doloremque ea eum eveniet quas.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                               <h3><i class="fa fa-money" aria-hidden="true"></i><span>Low</span> Cost</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem doloremque ea eum eveniet quas.</p>
                            </div>
                            <div class="col-sm-6">
                               <h3><i class="fa fa-commenting" aria-hidden="true"></i><span>24/7</span> Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem doloremque ea eum eveniet quas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight">
                        <img src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="" style="margin-top: 80px; max-width: 380px;">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome Area End -->
    
    <!-- Choose Our Chips Area Start -->
    @php
    $produks = App\Produk::paginate(4)
    @endphp
    <div scroll-spy="true" id="our-products" class="chipsofic-content-block section-gray">
        <div class="container">
          <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Choose Your Flavor</h1>
                        <div class="chipsofic-subtitle">Choose any of our chips which better suits your needs</div>
                   </div>
               </div>
            </div>
            
           <div class="choose-our-chips-content-area text-center wow fadeInUp">
                <div class="row">
                  @foreach($produks as $data)
                    <div class="col-sm-6 col-md-3 single-chips-item">
                      <img src="{{ asset('assets/img/gambar/' .$data->gambar)}}" alt="">
                       <h3>{{$data->nama_produk}}</h3>
                       <div class="pricing"><span>Harga:</span>Rp. {{$data->harga}}</div>
                        <p>{!! $data->content !!}</p>
                        <a class="btn chipsofic-small-btn" data-scroll href="{{route('produk')}}">Order Now</a>
                    </div>
                    @endforeach
                </div>
            </div>  
        </div>
    </div>
    <!-- Choose Our Chips Area End -->
    
    <!-- Our Process Area Start -->
    <video width="100%" height="500" controls="">
        <source src="/assets/kripcok.mp4" type="video/mp4">
    </video>
    <!-- Our Process Area End -->
        
    <!-- Gallery Area Start -->
    @php
    $galeris = App\Galeri::paginate(8)
    @endphp
    <div scroll-spy="true" id="pic-gallery" class="chipsofic-content-block gallery-block">
        <div class="container">
              <div class="row">
                 <div class="col-md-12">
                       <div class="section-title text-center">
                            <h1>Picture Gallery</h1>
                            <div class="chipsofic-subtitle">Check our aweomse product images</div>
                       </div>
                   </div>
                </div>
        </div>
        <div class="gallery-area">
            <div class="container-fluid">
                <div class="row wow fadeInUp">
                    @foreach($galeris as $data)
                    <div class="col-sm-6 col-md-3">
                        <a title="Lorem Ipsum 01" class="gallery-lightbox" href="{{ asset('assets/img/gambar/' .$data->gambar)}}"><i class="fa fa-plus"></i> <img src="{{ asset('assets/img/gambar/' .$data->gambar)}}" alt=""></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    
    <!-- Our Progress Area Start -->
    <div scroll-spy="true" class="chipsofic-content-block counter-block">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Our Progress</h1>
                        <div class="chipsofic-subtitle">Check our progress over the years</div>
                   </div>
               </div>
            </div>
            
           <div class="chipsofic-counter-area text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                       <h2><span class="counter">37,020</span></h2>
                        <p>Yearly Customer</p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                       <h2><span class="counter">5,01,212</span></h2>
                        <p>Sell Per Year</p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                       <h2><span class="counter">9,210</span></h2>
                        <p>Staff</p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                       <h2><span class="counter">5,001</span></h2>
                        <p>Showroom</p>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <!-- Our Progress Area End -->
    
    <!-- Meet Our Team Area Start -->
    <div scroll-spy="true" id="our-team" class="chipsofic-content-block">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Meet the Team</h1>
                        <div class="chipsofic-subtitle">Check the People who are working behind this awesome product</div>
                   </div>
               </div>
            </div>      
            <div class="row wow fadeInUp">
                <div class="col-sm-3 text-center">
                    <div class="single-team-item">
                            <img src="assets/img/team-bg-1.png" alt="">
                            <h3>John Abul</h3>
                            <p>Diam nonummy nibh, consectetuer adipiscing elit</p>
                            <ul>
                                <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="http://linkedin.com/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                   <div class="single-team-item">
                            <img src="assets/img/team-bg-2.png" alt="">
                            <h3>Maria Uradhura</h3>
                            <p>Diam nonummy nibh, consectetuer adipiscing elit</p>
                            <ul>
                                <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="http://linkedin.com/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="single-team-item">
                            <img src="assets/img/team-bg-3.png" alt="">
                            <h3>Gilbart Hudai</h3>
                            <p>Diam nonummy nibh, consectetuer adipiscing elit</p>
                            <ul>
                                <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="http://linkedin.com/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="single-team-item">
                            <img src="assets/img/team-bg-4.png" alt="">
                            <h3>Khichuri Khabo</h3>
                            <p>Diam nonummy nibh, consectetuer adipiscing elit</p>
                            <ul>
                                <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="http://linkedin.com/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Meet Our Team Area End --> 
    
    <!-- Testimonials Area Start -->
    @php
    $testimonis = App\Testimoni::all();
    @endphp
    <div scroll-spy="true" id="customer-feedback" class="testimonial-slider-wrapper testimonial-bg-1">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Our Happy Customers</h1>
                        <div class="chipsofic-subtitle">Discover what our Customers have to say</div>
                   </div>
               </div>
            </div>
            <div class="testimonial-slides owl-carousel">
                @foreach($testimonis as $data)
                <div class="testimonial-slide-item-table">
                    <div class="testimonial-slide-item-tablecell"> 
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="{{ asset('assets/img/gambar/' .$data->gambar)}}" alt="">
                                <p>{!! $data->content !!}</p>
                                    <ul class="review-stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                <h4>{{$data->nama}}<span>{{$data->alamat}}</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
          @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonials Area End -->
    
    <!-- Blog Preview Area Start -->
    @php
    $artikels = App\Artikel::paginate(3)
    @endphp
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
        </div>
    </div>
      <!-- Blog 1 Content End-->
      
      <!-- Blog Single Area Start -->

    <!-- Newsletter Area Start -->
    <div scroll-spy="true" class="chipsofic-content-block newsletter-block">
        <div class="container">
           <div class="row">
                <div class="col-md-6">
                   <div class="section-title">
                        <h2>Makanlah Kripcok</h2>
                        <h3><p style="font-family: Typewriter; color: #fff;">Karena Keripik ini bisa bikin kamu sehat dan rasanya juga manis,Kaya Kamuu... iya kamuu...</p></h3>
                    </div>
                </div>
           </div>
        </div>
    </div>
    <!-- Newsletter Area End -->
    
    <!-- Contact Area Start -->
    @php
    $kontaks = App\Kontak::paginate(1)
    @endphp
      <div scroll-spy="true" id="contact-us" class="chipsofic-content-block">
        <div class="container">
          <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Contact Chipsofic</h1>
                        <div class="chipsofic-subtitle">Contact us for further query and application</div>
                   </div>
               </div>
            </div>
           <div class="row">
              @foreach($kontaks as $data)
                <div class="col-md-6">
                   <div class="contact-info-block">  
                        <p>{!! $data->content !!}</p>
                        <ul>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:text@example.com">{{ $data->email }}</a></li>
                            <li><i class="fa fa-phone"></i> <a href="tel:123-456-789"> 0{{ $data->nohp }}</a></li>
                            <li><i class="fa fa-map-marker"></i> {{ $data->alamat }} </li>
                            <li><i class="fa fa-linkedin-square"></i><a href="http://linkedin.com/">{{ $data->instagram }}</a></li>
                            <li><i class="fa fa-facebook-square"></i><a href="http://facebook.com/">{{ $data->facebook }}</a></li>
                        </ul>
                    </div>
               </div>
               <div class="col-md-6 wow fadeInRight">
                        <img src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="" style="max-width: 380px; margin-top: 50px;">
                    </div>
               @endforeach
            </div>
        </div> 
    </div>
    <!-- Contact Area End -->
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
@endsection