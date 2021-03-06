@extends('master.main')
@section('content')
    <div class="table">
        <h1>Brands</h1>
        <form action="{{url('brands/truncate')}}" method="GET">
            <button type="submit" class="btn btn-danger">Delete All</button>
        </form>
        <br>
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands as $brand)
                <tr>
                    <td> {{$brand->id}}</td>
                    <td> {{$brand->name}}</td>
                    <td><a href="{{url('brands/' . $brand->id)}}"><button type="button" class="btn btn-light">Show</button></a>
                        @auth
                            <a href="{{url('brands/' . $brand->id . '/edit')}}" type="button"class="btn btn-light">Edit</a>
                        <form action="{{url('brands/' . $brand->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light">Delete</button>
                        </form>
                        @endauth
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$brands->links()}}
    </div>
@endsection
