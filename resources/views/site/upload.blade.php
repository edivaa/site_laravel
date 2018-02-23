@extends('layouts.site')

@section('content')
<form enctype="multipart/form-data"  action="upload" method="post"  >
    {{ csrf_field() }}

    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name='file' id='file'>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
        
  </form>
  @endsection