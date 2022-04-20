<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Movie Upload') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="added_by" value="Auth::user->email">
                        <div class="row form-group">
                            <div class="mb-3 col-6">
                                <label for="exampleFormControlInput" name="" class="visually-hidden">Movie Title</label>
                                <input  type="text" name="movie_title" class="form-control" id="exampleFormControlInput1" placeholder="Movie Title">
                            </div>
                            <div class="mb-3 col-6 form-group">
                                <label for="exampleFormControlInput" name="" class="visually-hidden form-label">Movie Titl</label>
                                <select class="form-select" name="movie_catr" aria-label="Default select example">
                                <option selected disabled>Choose Movie Category</option>
                                <option value="Nollywood">Nollywood</option>
                                <option value="Hollywood">Hollywood</option>
                                <option value="Bollywood">Bollywood</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="mb-3 col-6">
                                <label for="exampleFormControlInput" name="" class="visually-hidden form-label">Movie Title</label>
                                <select class="form-select" name="movie_type" aria-label="Default select example">
                                <option selected disabled>Choose Movie Type</option>
                                <option value="Latest">Latest Movie</option>
                                <option value="Trend">Trending Movies</option>
                                <option value="New">New Release</option>
                                </select>
                            </div>
                            <div class="mb-3 col-6 form-group">
                                <label for="exampleFormControlInput" name="" class="visually-hidden form-label">Movie Title</label>
                                <select class="form-select" name="movie_genre" aria-label="Default select example">
                                <option selected disabled>Choose Movie Genre</option>
                                <option value="Action">Action</option>
                                <option value="Romance">Romance</option>
                                <option value="scifi">Sci-Fi</option>
                                <option value="Thriller">Thriller</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Kung-fu">Kung Fu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="mb-3 col-6">
                                <label for="exampleFormControlInput" name="" class="visually-hidden form-label">Movie Title</label>
                                <input  type="text" name="movie_hr" class="form-control" id="exampleFormControlInput1" placeholder="Movie Hours">
                            </div>
                            <div class="mb-3 col-6 form-group">
                                <label for="exampleFormControlInput" name="" class="visually-hidden form-label">Movie Title</label>
                                <input type="text" name="movie_mins" class="form-control" id="exampleFormControlInput1" placeholder="Movie Minuites">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="mb-3 col-6">
                                <label for="exampleFormControlInput" class="visually-hidden form-label">Movie Language</label>
                                <select class="form-select" name="movie_lang" aria-label="Default select example">
                                <option selected disabled>Choose Movie Language</option>
                                <option value="English">English</option>
                                <option value="French">French</option>
                                <option value="Spanish">Spanish</option>
                                </select>
                            </div>
                            <div class="mb-3 col-6 form-group">
                                <label for="exampleFormControlInput" class="visually-hidden form-label">Movie Category</label>
                                <input type="text" class="form-control" name="movie_link" id="exampleFormControlInput1" placeholder="Trailer Link">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="mb-3 col-6">
                                <label for="exampleFormControlInput" name="" class="visually-hidden form-label">Movie Language</label>
                                <input type="file" name="movie_img" class="form-control" placeholder="image">
                            </div>
                            <div class="mb-3 col-6 form-group">
                                <label for="exampleFormControlInput" name="" class="visually-hidden form-label">Movie Category</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{Auth::user()->email}}" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="mb-3 col-6 form-group">
                                <label for="exampleFormControlInput" name="" class="visually-hidden form-label">Movie Title</label>
                                <textarea class="form-control" name="movie_descr" id="exampleFormControlTextarea1" placeholder="Description..." rows="3"></textarea>
                            </div>
                            <div class="mb-3 col-6">
                                <button class="col-6 btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>