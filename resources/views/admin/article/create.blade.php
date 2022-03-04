@extends('layouts.admin.app')

@section('content')
   <div class="content">
        <div class="row">
          <div class="col-md-11">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">{{ $title }}</h5>
              </div>
              <div class="card-body">
                <form action="/list-article" method="POST">
                    @csrf
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="title" value="">
                      </div>
                    </div>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>description</label>
                        <input type="text" name="description" class="form-control" placeholder="description" value="">
                      </div>
                    </div>
                    <div class="col-md-5 pr-1">
                        <div class="form-group">
                          <label>slug</label>
                          <input type="text" name="slug" class="form-control" placeholder="slug" value="">
                        </div>
                      </div>
                      <div class="col-md-5 pr-1">
                        <div class="form-group">
                          <label>body</label>
                          <input type="text" name="body" class="form-control" placeholder="body" value="">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="update ml-3">
                      <button type="submit" class="btn btn-primary btn-round">Create</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
