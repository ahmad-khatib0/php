@extends('layouts.app')

@section('content')

 <div class="container">


  @if (session()->has('error')) {
   <div class="alert alert-danger">{{ session()->get('error') }}</div>
   }

  @endif
  <form action="{{ route('avatar.store') }}" method="post" enctype="multipart/form-data">
   @csrf
   <div class="input-group mb-3">
    <div class="input-group-prepend">
     <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
    </div>
    <div class="custom-file">
     <input type="file" name="avatar" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">
     <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    </div>
    <input type="submit" value="Upload" class="btn btn-success ml-4">
   </div>

  </form>


  <div class="card-columns">
   @foreach ($avatars as $avatar)
    <div class="card">
     <img src="{{ $avatar->getUrl('card') }}" class="card-img-top" alt="...">
     <div class="card-body">
      <div class="float-left">
       <a href="#" onclick="event.preventDefault(); document.
           getElementById('selectForm{{ $avatar->id }}').submit()">
        <i class="text-success fas fa-check fa-2x"></i> </a>
       <form action="{{ route('avatar.update', auth()->id) }}" id="selectForm{{ $avatar->id }}" style="display: none"
        method="post">
        @csrf
        @method('put')
        <input type="hidden" type="submit" name="selectedAvatar" value="{{ $avatar->id }}">
       </form>
       <a href="#"> <i class="text-info far fa-minus-square fa-2x"></i> </a>
      </div>
      <div class="float-right">
       <a href="#"> <i class="text-danger far fa-eye fa-2x"></i> </a>
       <a href="#"> <i class="text-warning fas fa-cloud-download-alt fa-2x"></i> </a>
      </div>
     </div>
    </div>
   @endforeach
  </div>
 </div>

@endsection
