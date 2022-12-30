@extends('template')

@section('title', 'Register Group')

@section('body')

<form action="/register-group" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Group Name</label>
        <input type="text" class="form-control @error('groupName') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="groupName">
            @error('groupName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
    </div>
    <div class="mb-3 form-check">
        <input type="radio" class="form-check-input" id="exampleCheck1" name="binusian" value="1">
        <label class="form-check-label" for="exampleCheck1">Binusian</label>
    </div>
    <div class="mb-3 form-check">
        <input type="radio" class="form-check-input" id="exampleCheck1" name="binusian" value="0">
        <label class="form-check-label" for="exampleCheck1">Not Binusian</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
