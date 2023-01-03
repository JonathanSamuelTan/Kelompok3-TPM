@extends('template')

@section('title', 'welcome')

@section('body')
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="register">Register Group</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login">Login Group</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="create-leader">Ceate Leader</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Leader Detail</h1>
            <table class="table table-bordered">
                <tr>
                    <th>Leader Name</th>
                    <td>{{ $leader->leaderName }}</td>
                </tr>
                <tr>
                    <th>Leader Email</th>
                    <td>{{ $leader->leaderEmail }}</td>
                </tr>
                <tr>
                    <th>WA Number</th>
                    <td>{{ $leader->leaderWA }}</td>
                </tr>
                <tr>
                    <th>Line</th>
                    <td>{{ $leader->leaderLine }}</td>
                </tr>
                <tr>
                    <th>Github / Gitlab</th>
                    <td>{{ $leader->leaderGithub }}</td>
                </tr>
                <tr>
                  <th>Birth Place</th>
                  <td>{{ $leader->birthPlace }}</td>
                </tr>
                <tr>
                  <th>Birth Date</th>
                  <td>{{ $leader->birthDate }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
