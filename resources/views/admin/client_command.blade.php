<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cmd') }}
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
                                    <th>Date command</th>
                                    <th>products commanded</th>
                                </thead>
                                @foreach($cmds as $cmd)
                                    <tr>
                                        <td>{{$client_name}}</td>
                                        <td>{{$cmd->created_at}}</td>
                                        <td><a style="color: rgb(63, 66, 255)" href="{{route('product_commands', $cmd->id)}}">products</a></td>
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
