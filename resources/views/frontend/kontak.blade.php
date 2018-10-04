@extends('layouts.guest')
@section('content')
<div scroll-spy="true" id="contact-us" class="chipsofic-content-block">
        <div class="container">
          <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Contact Kripcok</h1>
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
                        <img src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="" style="max-width: 380px;">
                    </div>
               @endforeach
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