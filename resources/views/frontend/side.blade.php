<div class="col-lg-4 sidebar" style="margin-top: 35px;">
    <div class="single-widget recent-posts-widget">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><h4 class="title">Recent Posts</h4></th>
                    </tr>
                </thead>
                <tbody>
        <div class="blog-list ">
            @foreach($recent as $data)
            <div class="single-recent-post d-flex flex-row">
                <tr>
                <div class="recent-thumb">
                    <td><img class="img-fluid" src="{{ asset('assets/img/gambar/'.$data->gambar) }}" style="max-height: 125px; max-width: 125px; margin-top: 7px;" alt="">
                    </td>
                </div>
                <div class="recent-details">
                    <td><a href="/artikel/single/{{ $data->slug }}">
                        <h4>{{ $data->judul }}</h4>
                    </a>{{ $data->created_at->diffForHumans() }}</td>
                    <!-- <td><p>{{ $data->created_at }}</p></td> -->
                </div>
            </tr>
            </div>  
            @endforeach                                                                 
        </div>
    </tbody>
        </table>
        </div>                              
    </div>
</div>