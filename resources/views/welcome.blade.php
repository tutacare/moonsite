@extends('layout.mainlayout')
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
                                    <a href="blog-details"><img class="img-fluid" src="/assets/img/blog/blog-01.jpg" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="blog-details"><span>Tyrone Roberts</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 4 Dec 2019</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog-details">{{ $post->title }}</a></h3>
                                    <p class="mb-0">{{ $post->excerpt }}</p>
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
