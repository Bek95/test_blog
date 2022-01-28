@extends('layouts.app')
@section('content')
<section id="blog" class="blog-area pt-125">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-25">
                    <h3 class="title mb-15">From The Blog</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                </div> 
            </div>
        </div> 
        <div class="row justify-content-center">
            @if (!empty($posts))
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30">
                    <div class="blog-content">
                        <div class="content">
                            <h4 class="title"><a href="#">{{ $post->title }}</a></h4>
                            <span>25 JULY, 2022</span>
                        </div>
                        <div class="meta d-flex justify-content-between align-items-center">
                            <div class="meta-admin d-flex align-items-center">
                                <div class="image">
                                    <a href="#"><img src="assets/images/blog/admin.jpg" alt="Admin"></a>
                                </div>
                                <div class="admin-title">
                                    <h6 class="title"><a href="#">J. PARKER</a></h6>
                                </div>
                            </div> 
                            <div class="meta-icon">
                                <ul>
                                    <li><a href="#"><i class="lni-share"></i></a></li>
                                    <li><a href="#"><i class="lni-heart"></i></a></li>
                                </ul>
                            </div> 
                        </div> 
                    </div>
                </div> 
            </div>
            @endforeach
            @endif
        </div> 
        <div class="container col-lg-6 d-flex justify-content-center mt-3 mb-3">
            {{ $posts->onEachSide(4)->links() }}
        </div>
        
    </div> 
</section>
@endsection