@extends('welcome')
@section('content')

<form action="{{route('product.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">Batch No.</label>
      <input type="text" name="batch" class="form-control" >
    </div>
    @error('batch')
        <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
      <label class="form-label">Quantity</label>
      <input type="text" name="quantity" class="form-control" >
    </div>
    @error('quantity')
        <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
      <label class="form-label">Status</label>
      <select class="form-select" name="status">
        <option selected>--- Select a status ---</option>
        <option value="good">good</option>
        <option value="average">average</option>
        <option value="bad">bad</option>
      </select>
    </div>
    @error('status')
        <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
      <label class="form-label">Remarks</label>
      <textarea name="remark" class="form-control" rows="5"></textarea>
    </div>
    @error('remark')
        <p class="text-danger">{{$message}}</p>
    @enderror
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection