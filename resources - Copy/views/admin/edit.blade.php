<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Movie') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach($movies as $movie)
                        <tr>
                            <td><img src="/image/{{ $movie->movie_img }}" width="100px"></td>
                            <td>{{ $movie->movie_title }}</td>
                            <td>
                                <form action="{{route('admin.destroy',$movie->id) }}" method="POST">
                    
                                    <a class="btn btn-info" href="{{route('admin.show',$movie->id) }}">Show</a>
                    
                                    <a class="btn btn-primary" href="{{route('admin.edit',$movie->id) }}">Edit</a>
                    
                                    @csrf
                                    @method('DELETE')
                        
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>