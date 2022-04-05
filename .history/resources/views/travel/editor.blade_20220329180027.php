@extends('layouts.main')

@section('tampilan')

<div class="main-content" style="min-height: 524px;">
  <section class="section">
      <div class="section-header">
          <div class="section-header-back">
              <a href="/post" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
          </div>
          <h1>Create New Article</h1>
          <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Posts</a></div>
              <div class="breadcrumb-item">Create New Post</div>
          </div>
      </div>
      <div class="section-body">
          <h2 class="section-title">Create New Post</h2>
          <p class="section-lead">
              On this page you can create a new post and fill in all fields.
          </p>

          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h4>Write Your Post</h4>
                      </div>
                      <form>
                          <div class="d-flex justify-content-center">
                              <img src="{{ asset(isset($post)?'images/banners/'.$post->banner:'assets/admin/img/news/img01.jpg') }}" style="max-height: 150px" id="preview-img" alt="" class="img-thumbnail">
                          </div>
                          @csrf

                          <div class="card-body">
                              <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banner</label>
                                  <div class="col-sm-12 col-md-7">
                                      <input type="file" name="banner" id="banner" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                  <div class="col-sm-12 col-md-7">
                                      <input type="text" name="title" class="form-control" value="{{ old('title',$post->title??'') }}">
                                  </div>
                              </div>
                              <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
                                  <div class="col-sm-12 col-md-7">
                                      <input type="text" name="slug" class="form-control" value="{{ old('slug',$post->slug??'') }}">
                                  </div>
                              </div>
                              <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                               
                              </div>
                              <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Excerpt</label>
                                  <div class="col-sm-12 col-md-7">
                                      <input type="text" name="excerpt" class="form-control" value="{{ old('excerpt', $post->excerpt??'') }}">
                                  </div>
                              </div>
                              <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Body</label>
                                  <div class="col-sm-12 col-md-7">
                                      <textarea class="summernote" name="body">{{ old('body', $post->body??'') }}</textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group row mb-4">
                              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                              <div class="col-sm-12 col-md-7">
                                  <button class="btn btn-primary">Create Post</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </form>
</div>
</section>
</div>

@endsection
