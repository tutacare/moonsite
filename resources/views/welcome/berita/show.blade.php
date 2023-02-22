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
<!-- Breadcrumb -->
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
                <h2 class="breadcrumb-title">Berita Detail</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-view">
                    <div class="blog blog-single-post">
                        <div class="blog-image">
                            <a href="javascript:void(0);"><img alt="" src="/storage/{{ str_replace('.jpg','.jpg', $berita->image) }}" class="img-fluid"></a>
                        </div>
                        <h3 class="blog-title">{{$berita->judul}}</h3>
                        <div class="blog-info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li>
                                        <i class="far fa-user"></i> {{$berita->Author->name }}
                                    </li>
                                    <li><i class="far fa-calendar"></i>{{$berita->created_at->format('d-m-Y')}}</li>
                                    {{-- <li><i class="fas fa-eye"></i> Dibaca: {{ TutaComp::countReadBerita($berita->uuid) }} Kali</li> --}}
                                    <!-- <li><i class="far fa-comments"></i>12 Comments</li> -->
                                    <!-- <li><i class="fa fa-tags"></i>HTML</li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="blog-content">
                            <p>{!! $berita->body !!}</p>
                        </div>
                    </div>

                    {{-- <div class="card blog-share clearfix">
                        <div class="card-header">
                            <h4 class="card-title">Share the post</h4>
                        </div>
                        <div class="card-body">
                            <ul class="social-share">
                                <li><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" title="Google Plus"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- Blog Sidebar -->
            <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">
                <!-- Search -->
                <div class="card search-widget">
                    <div class="card-body">
                        <form class="search-form" action="#" method="GET">
                            <div class="input-group">
                                <input type="text" id="search" name="search" placeholder="Search..." class="form-control" value="{{ old('search') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Content -->
@endsection

@push('scripts')
<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) {
		coll[i].addEventListener("click", function () {
			this.classList.toggle("active-archive");
			var content = this.nextElementSibling;
			if (content.style.display === "block") {
				content.style.display = "none";
			} else {
				content.style.display = "block";
			}
		});
	}
</script>
@endpush