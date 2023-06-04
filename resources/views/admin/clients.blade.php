<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class=" mx-auto mt-20 mb-20">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5">
                            <table class="table table-success table-bordered table-sm table-striped table-hover" style="margin-bottom: -0px">
                                <thead class="table-dark">
                                    <th>Name</th>
                                    <th>Tele</th>
                                    <th>contry</th>
                                    <th>city</th>
                                    <th>email</th>
                                </thead>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->contry}}</td>
                                        <td>{{$user->city}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><a style="color: rgb(63, 66, 255)" href="{{route('user_commands', $user->id)}}">Commands</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
