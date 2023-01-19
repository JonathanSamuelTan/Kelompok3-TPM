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
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Group Name: {{$user->name}}</li>
          <li class="list-group-item">Payment Status: {{$user->verified}}</li>
          @if ($user->binusian == 1)
            <li class="list-group-item">Group Status: Binusian</li>
              
          @elseif($user->binusian == 0)
            <li class="list-group-item">Group Status: Non - Binusian</li>
          @endif

        </ul>
    </div>

    <div class="card " style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Leader Name: {{$leader->leaderName}}</li>
            <li class="list-group-item">Leader Email: {{$leader->leaderEmail}}</li>
            <li class="list-group-item">Leader WA: {{$leader->leaderWA}}</li>
            <li class="list-group-item">Leader Line: {{$leader->leaderLine}}</li>
            <li class="list-group-item">Leader Github: {{$leader->leaderGithub}}</li>
            <li class="list-group-item">Leader Birth Place: {{$leader->birthPlace}}</li>
            <li class="list-group-item">Leader Birth Date: {{$leader->birthDate}}</li>
        </ul>
      </div>
     <br><br>
     <?php $i = 1; ?>
      @foreach($member as $m)
      <div class="card " style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">member {{$i}} Name: {{$m->memberFullName}}</li>
            <li class="list-group-item">member {{$i}} Email: {{$m->memberEmail}}</li>
            <li class="list-group-item">member {{$i}} WA: {{$m->memberWA}}</li>
            <li class="list-group-item">member {{$i}} Line: {{$m->memberLine}}</li>
            <li class="list-group-item">member {{$i}} Github: {{$m->memberGithub}}</li>
            <li class="list-group-item">member {{$i}} Birth Place: {{$m->birthPlace}}</li>
            <li class="list-group-item">member {{$i}} Birth Date: {{$m->birthDate}}</li>
        </ul>
        {{-- increment variable i --}}
        <?php $i++; ?>
      </div>
      <br><br>
      @endforeach

</x-app-layout>
