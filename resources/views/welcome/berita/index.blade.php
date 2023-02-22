<?php $page="blog-details";?>
@extends('layout.mainlayout')

@push('styles')
<style>
	.collapsible {
		background-color: #777;
		color: white;
		cursor: pointer;
		padding: 18px;
		width: 100%;
		border: none;
		text-align: left;
		outline: none;
		font-size: 15px;
	}

	.active-archive,
	.collapsible:hover {
		background-color: #555;
	}

	.content-archive {
		padding: 0 18px;
		display: none;
		overflow: hidden;
		background-color: #f1f1f1;
	}
</style>
@endpush

@section('content')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Berita</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Berita</h2>
            </div>
        </div>
    </div>
</div>
<!-- content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row blog-grid-row">
                    @foreach($posts as $value)
                    <div class="col-md-6 col-sm-12">
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="/"><img class="img-fluid" src="/storage/{{ str_replace('.jpg','-medium.jpg', $value->image) }}" style="width:593px; height:369px;" alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <span>{{ $value->Author->name }}</span>
                                        </div>
                                    </li>
                                    <li><i class="far fa-clock"></i> {{ $value->created_at->diffForHumans() }}</li>
                                </ul>
                                <h3 class="blog-title">
									<a href="{{ route('berita.show', $value->slug) }}">{{ $value->title }}</a>
                                </h3>
                                <p class="mb-0">{{ Str::limit($value->excerpt, 130) }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-pagination">
                            <nav>
								paginate
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


            </div>
        </div>
    </div>
</div>
<!-- end content -->
@endsection
