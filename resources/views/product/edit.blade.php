@extends('welcome')
@section('content')

<form action="{{route('product.update',$tshirt->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">Batch No.</label>
      <input type="text" name="batch" class="form-control" value="{{$tshirt->batch}}">
    </div>
    @error('batch')
        <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
      <label class="form-label">Quantity</label>
      <input type="text" name="quantity" class="form-control" value="{{$tshirt->quantity}}">
    </div>
    @error('quantity')
        <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
      <label class="form-label">Status</label>
      <select class="form-select" name="status">
        <option value="good" {{$tshirt->status== 'good'?'selected':''}}>good</option>
        <option value="average" {{$tshirt->status== 'average'?'selected':''}}>average</option>
        <option value="bad" {{$tshirt->status== 'bad'?'selected':''}}>bad</option>
      </select>
    </div>
    @error('status')
        <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
      <label class="form-label">Remarks</label>
      <textarea name="remark" class="form-control" rows="5">{{$tshirt->remark}}</textarea>
    </div>
    @error('remark')
        <p class="text-danger">{{$message}}</p>
    @enderror
    
    <button type="submit" class="btn btn-success">Update</button>
  </form>
@endsection