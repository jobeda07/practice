
@extends('backendsecond.main')
@section('content')




<h1>All user Information</h1>
<div class="container">
    <div class="mx-auto">
   <form class="form" action="{{route('usercreate')}}" method="post">
        @csrf
        <!-- Name input -->
<div class="form-outline mb-4">
<label class="form-label" for="form7Example1">Name</label>
  <input type="text" name="user_name" id="form7Example1" class="form-control" />
  @error('user_name')<div class=" alert alert-danger">{{$message}} </div> @enderror
  </div>

<!-- Email input -->
<div class="form-outline mb-4">
<label class="form-label" for="form7Example2">Email </label>
  <input type="email" name="user_email" id="form7Example2" class="form-control" />
  </div>
<div class="form-outline mb-4">
<label class="form-label" for="form7Example2">Mobile Number </label>
  <input type="text" name="user_mobile" id="form7Example2" class="form-control" />
  </div>

<div class="form-outline mb-4">
<label class="form-label" for="form7Example2"> address</label>
  <input type="text" name="user_address" id="form7Example2" class="form-control" />
  </div>
  <div class="my-2">
                <button type="submit" class="btn btn-info">submit</button>
            </div>
        </form>
    </div>
</div>


@endsection