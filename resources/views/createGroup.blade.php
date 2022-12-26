@extends('template')

@section('title', 'Create Book')

@section('body')

<form action="/store-group" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Group Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="groupName">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="mb-3 form-check">
        <input type="radio" class="form-check-input" id="exampleCheck1" name="binusian" value="0">
        <label class="form-check-label" for="exampleCheck1">Binusian</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
