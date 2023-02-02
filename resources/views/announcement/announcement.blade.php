<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('announcement') }}
            
            <a class="nav-link" href="{{url ('/dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
        
        </h2>
        
    </x-slot>

    <div class="py-12">
        @if ( session('status') )
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> {{ session('status') }} 
                </div>
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h2 class="float-left">
                        {{ $header }}
                    </h2> 

                    <a href="{{ route('announcement.add.view') }}">
                        <button class="float-right rounded-full bg-green-500 p-1 hover:bg-green-700">
                            Add Announcement
                        </button>
                    </a>
                    
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Header</th>
                                <th>Sub_Header</th>
                                <th>Image</th>
                                <th>Description</th>
                                 <th>User_id</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($announcement as $announcement)
                                <tr>
                                    <td class="text-center"> {{ $announcement->id }} </td>
                                    <td class="text-center"> {{ $announcement->header }}</td>
                                    <td class="text-center"> {{ $announcement->sub_header}} </td>
                                    <td class="text-center"> {{ $announcement->image }}</td>
                                    <td class="text-center"> {{ $announcement->description }} </td>
                                    <td class="text-center"> {{ $announcement->user_id }}</td>
                                    <td class="text-center">

                                        {{-- <form action="{{ route('announcement.destroy',[ 'id'=>$announcement->id]) }}" method="post">
                                        <a href="{{route('announcement.update.view', ['id' =>$announcement->id]) }}"
                                        class="rounded-full bg-purple-300 py-1 px-3 hover:bg-purple-500">Update</a>
                                        @csrf
                                        <button type="submit" class="rounded-full bg-red-500 py-1 px-3 hover:bg-red-300">Delete</button>

                                        </form> --}}
                                        <a href="{{ url('/announcement/update/' . $announcement->id) }}">
                                            <button type="submit" class="rounded-full bg-blue-500 p-1 hover:bg-blue-700"title="delete user">Update</button>
                                        </a>
                                        <a href="{{ url('/announcement/delete/' . $announcement->id) }}">
                                            <button type="submit" class="rounded-full bg-red-500 p-1 hover:bg-red-700"title="delete user">Delete</button>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>