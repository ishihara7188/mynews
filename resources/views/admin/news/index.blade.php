@extends('layouts.admin')
@section('title', 'Index News')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="mb-5">Index News</h2>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a href="{{ action('Admin\NewsController@add') }}" role="button" class="btn btn-primary">Create News</a>
          </div>
          <div class="col-md-8">
            <form action="{{ action('Admin\NewsController@index') }}" method="get">
              <div class="form-group row">
                <label class="col-md-2">Title</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                </div>
                <div class="col-md-2">
                  {{ csrf_field() }}
                  <input type="submit" class="btn btn-primary" value="Search">
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="list-news col-md-12 mx-auto">
            <div class="row">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th width="10%">ID</th>
                    <th width="20%">Title</th>
                    <th width="50%">Text</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($posts as $news)
                    <tr>
                      <th>{{ $news->id }}</th>
                      <td>{{ str_limit($news->title, 100) }}</td>
                      <td>{{ str_limit($news->body, 250) }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection
