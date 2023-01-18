<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    <div class="card " style="width: 18rem;">
        <ul class="list-group list-group-flush">
            {{-- get user name --}}
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
</x-app-layout>
