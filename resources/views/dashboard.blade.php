{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="card " style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Group Name : {{Auth::user()->name}}</li>
            <li class="list-group-item">Leader Name: {{$leader->leaderName}}</li>
            <li class="list-group-item">Leader Email: {{$leader->leaderEmail}}</li>
            <li class="list-group-item">Leader WA: {{$leader->leaderWA}}</li>
            <li class="list-group-item">Leader Line: {{$leader->leaderLine}}</li>
            <li class="list-group-item">Leader Github: {{$leader->leaderGithub}}</li>
            <li class="list-group-item">Leader Birth Place: {{$leader->birthPlace}}</li>
            <li class="list-group-item">Leader Birth Date: {{$leader->birthDate}}</li>
            <a href="create-member" class="btn btn-success"> Add Group Member (Max:3 Person)</a>
        </ul>
      </div>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Technoscape 2023</title>
    <link rel="stylesheet" href="{{asset('css/userDashboard.css')}}">
</head>
<body>
   <section id="hero-section">
        <section id="dashboard">
            <div id="dashboard-extend" style="color: white">
                <h1>Dashboard</h1>
                <div>
                    <a href="{{route('home')}}" style="text-decoration: none;">Home</a>
                </div>
                <div>
                    <a href="#" style="text-decoration: none;">Payment</a>
                </div>
                <div>
                    <a href="#" style="text-decoration: none;">Time Line</a>
                </div>
                <div>
                   {{-- logout --}}
                     <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a style="text-decoration: none" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                         this.closest('form').submit();">
                            {{ __('Log Out') }}
                      </a>
                </div>
            </div>
        </section>
        <section id="hero-content">
            <nav id="navbar">
                <div class="text-awal">
                    <h2>Welcome, {{Auth::user()->name}}</h2>
                </div>
                <div class="text-akhir">
                    <a href="create-member" class="text-akhir" style="text-decoration: none;">
                        Add Member
                    </a>
                </div>
            </nav>
            <section id="content-content">
                <div class="divider">
                    <div class="display-leader">
                        <div class="display-leader-content">
                            <h1>Leader</h1>
                            <div class="input-group">
                                <h1>Name</h1>
                                <div class="box">
                                    <h2>{{$leader->leaderName}}</h2>
                                </div>
                            </div>
                            <div class="input-group">
                                <h1>Email</h1>
                                <div class="box">
                                    <h2>{{$leader->leaderEmail}}</h2>
                                </div>
                            </div>
                            <div class="input-group">
                                <h1>Whatsapp</h1>
                                <div class="box">
                                    <h2>{{$leader->leaderWA}}</h2>
                                </div>
                            </div>
                            <div class="input-group">
                                <h1>Line ID</h1>
                                <div class="box">
                                    <h2>{{$leader->leaderLine}}</h2>
                                </div>
                            </div>
                            <div class="logo-github">
                                <iconify-icon icon="uiw:github" class="iconify-icon"></iconify-icon>
                                <h2>{{$leader->leaderGithub}}</h2>
                            </div>
                        </div>
                    </div>
        
                    <?php $i = 1; ?>
                    @foreach($member as $m)
                        <div class="display-leader">
                            <div class="display-leader-content">
                                <h1>Member - {{$i}}</h1>
                                <div class="input-group">
                                    <h1>Name</h1>
                                    <div class="box">
                                        <h2>{{$m->memberFullName}}</h2>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <h1>Email</h1>
                                    <div class="box">
                                        <h2>{{$m->memberEmail}}</h2>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <h1>Whatsapp</h1>
                                    <div class="box">
                                        <h2>{{$m->memberWA}}</h2>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <h1>Line ID</h1>
                                    <div class="box">
                                        <h2>{{$m->memberLine}}</h2>
                                    </div>
                                </div>
                                <div class="logo-github">
                                    <iconify-icon icon="uiw:github" class="iconify-icon"></iconify-icon>
                                    <h2>{{$m->memberGithub}}</h2>
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                    @endforeach
                </div>
                <div class="divider">
                    <div class="box2">
                        <iconify-icon icon="radix-icons:cross-circled" style="color: red;" width="33.59" height="33.59"></iconify-icon>

                        <p>Your payment is not confirmed</p>
                    </div>
                </div>
                </section>
        </section>
   </section>
   <script src="{{asset('js/userDashboard.js')}}"></script>
   <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>
