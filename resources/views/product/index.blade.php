@extends('welcome')
@section('content')
    <a href="{{ route('product.create') }}" class="btn btn-primary m-3">Add Product</a>
    <table class="table table-striped ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Batch ID</th>
            <th scope="col">Quantity</th>
            <th scope="col">Created at</th>
            <th scope="col">Status</th>
            <th scope="col">Remarks</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tshirts as $tshirt)
            <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$tshirt->batch}}</td>
                <td>{{$tshirt->quantity}}</td>
                <td>{{$tshirt->created_at}}</td>
                <td>{{$tshirt->status}}</td>
                <td>{{$tshirt->remark}}</td>
                <td>
                    <a href="{{route('product.edit',$tshirt->id)}}" class="btn btn-primary mb-1">Edit</a>
                    <form action="{{route('product.destroy',$tshirt->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
@endsection
