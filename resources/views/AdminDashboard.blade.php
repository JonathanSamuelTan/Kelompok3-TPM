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
   @foreach($users as $user)
         <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg flex flex-col">
                    <div class="p-6 text-gray-900">
                        {{ $user->name }}
                    </div>
                    <div class="p-6 text-gray-900">
                        @if ($user->verified == 1)
                            Verified
                        @else
                            Unverified
                        @endif
                    </div>
                    <button><a href="group-detail/{{$user->id}}">Detail</a></button>
                    <form action="verify/{{$user->id}}" method="POST">
                        @csrf
                        @method('patch')
                        <button type="submit" name="Verify" value="verified">Verify</button>
                    </form>
                    <form action="delete-team/{{$user->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="border-4">Delete</button>
                    </form>
                </div>

          </div>
     </div>
   @endforeach
</x-app-layout>
