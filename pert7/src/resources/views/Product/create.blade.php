@extends('layouts.main')

@section('content')
<form action="{{ route('Product.store') }}" method="POST">
    {{-- csrf --}}
    {{csrf_field() }}
    @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">nama</label>
      <input type="text" class="form-control" name="name" id="name_product">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>

  @endsection