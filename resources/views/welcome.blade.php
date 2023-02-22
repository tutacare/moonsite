@extends('layout.mainlayout')

@push('styles')
<style type="text/css">
.responsive {
    width: 100%;
    height: auto;
}
</style>
@endpush

@section('content')            
            <!-- Blog Section -->
           <section class="section section-blogs">
                <div class="container">
                
                    <!-- Section Header -->
                    <div class="section-header text-center">
                        <span>Lorem ipsum dolor</span>
                        <h2>The Blogs & News</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <!-- /Section Header -->
                    
                    <div class="row blog-grid-row">
                    @foreach($posts as $post)
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="/berita/{{ $post->slug }}"><img class="img-fluid" src="/storage/{{ str_replace('.jpg','-small.jpg', $post->image) }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="blog-details"><span>{{ $post->Author->name }}</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> {{ $post->created_at->diffForHumans() }}</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="/berita/{{ $post->slug }}">{{ $post->title }}</a></h3>
                                    <p class="mb-0">{{ Str::limit($post->excerpt, 130) }}</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->
                        </div>
                        @endforeach
                    </div>
                    <div class="view-all text-center"> 
                        <a href="blog-list" class="btn btn-primary">View All</a>
                    </div>
                </div>
            </section>
            <!-- /Blog Section -->  
       @endsection
