@extends('template')

@section('title', 'Create Leader')

@section('body')

<form action="/store-leader" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Full Name</label>
        <input type="text" class="form-control @error('leaderName') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="leaderName">
            @error('leaderName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control @error('leaderEmail') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="leaderEmail">
            @error('leaderEmail')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">WA Number</label>
        <input type="text" class="form-control @error('leaderWA') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="leaderWA">
            @error('leaderWA')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ID Line</label>
        <input type="text" class="form-control @error('leaderLine') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="leaderLine">
            @error('leaderLine')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Github / Gitlab </label>
        <input type="url" class="form-control @error('leaderGithub') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="leaderGithub">
            @error('leaderGithub')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Birth Place</label>
        <input type="text" class="form-control @error('birthPlace') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="birthPlace">
            @error('birthPlace')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Birth Date</label>
        <input type="date" class="form-control @error('birtDate') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="birtDate">
            @error('birtDate')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Flazz [Binusian] or KTP [Non Binusian]</label>
        <input type="file" class="form-control @error('leaderFlazz') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="leaderFlazz">
            @error('leaderFlazz')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">CV</label>
        <input type="file" class="form-control @error('leaderCV') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="leaderCV">
            @error('leaderCV')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
