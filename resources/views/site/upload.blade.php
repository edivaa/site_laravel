@extends('layouts.site')

<header>
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
</header>

@section('content')
<form action="arquivo/upload">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file">
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