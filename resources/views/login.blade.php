@extends('layout')
@section('title', 'Login')
@section('content')
   <div class="container">
   <div class="mt-5">
      @if($errors->any())
         <div class="col-12">
          @foreach($errors->all() as $error)
            <div class="alert alert-danger">
              {{$error}}  
            </div>
          @endforeach
         </div>
      @endif

      @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
      @endif

      @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
      @endif
      <div style="text-align: center">
        <h3>Lai tiktu pie kļūdām japievienojas savam kontam</h3>
      </div>
    </div>
   <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px">
   @csrf
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
@endsection