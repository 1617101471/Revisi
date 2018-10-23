@extends('layouts.guest')
@section('content')
<div scroll-spy="true" id="our-products" class="chipsofic-content-block section-gray">
        <div class="container">
          <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Kripcok Cemilan khas garut</h1>
                        <div class="chipsofic-subtitle">Pilihlah rasa yang sesuai dengan selera anda</div>
                   </div>
               </div>
            </div>
            
           <div class="choose-our-chips-content-area text-center wow fadeInUp">
                <div class="row">
                  @foreach($produks as $data)
                    <div class="col-sm-6 col-md-3 single-chips-item">                 
                      <div class="junika">
                      <img src="{{asset('assets/img/gambar/' .$data->gambar)}}" alt="">
                      </div>
                       <h3>{{$data->nama_produk}}</h3>
                       <div class="pricing"><span>Harga:</span>Rp. {{$data->harga}}</div>
                        <p>{!! $data->content !!}</p>
                        <h3>Order Now in : </h3>
                        <!-- <a class="btn chipsofic-small-btn" data-scroll href="{{route('produk')}}">Order Now</a> -->
                    <div class="perbesar">
                    <a href="{{$data->linkshopee }}" target="_blank">
                      <img src="/assets/img/logoShopee1.png" style="max-width: 65px;">
                    </a> <P>Order In Shopee</P>
                  </div>
                  <div class="bl">
                    <a href="{{ $data->linkbukalapak }}" target="_blank">
                      <img src="/assets/img/logoBL1.png" style="max-width: 56px;">
                    </a><P>Order In Bukalapak</P>
                  </div>
                    </div>
                    @endforeach
                </div>
            </div>  
        </div>
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
@endsection