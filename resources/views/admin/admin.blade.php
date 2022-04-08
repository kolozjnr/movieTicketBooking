<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrator Control Panel') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <div class="row">
                    <div class="card admin-card text-white bg-primary m-2" style="max-width: 22rem;">
                    <a href="{{route('admin.create')}}">
                      <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-cloud-arrow-up-fill ico"></i></h5>
                        <h2 class="card-text">UPLOAD a MOVIE</h2>
                      </div>
                      <div class="card-header">Upload Movie</div></a>
                    </div>
                    <div class="card admin-card text-white bg-secondary m-2" style="max-width: 22rem;">
                    <a href="admin/show">
                      <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-pencil-square ico"></i></h5>
                        <h2 class="card-text">Edit Movies</h2>
                      </div>
                      <div class="card-header">Edit Movies</div></a>
                    </div>
                    <div class="card admin-card text-white bg-success m-2" style="max-width: 22rem;">
                    <a href="#">
                      <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-binoculars-fill ico"></i></h5>
                        <h2 class="card-text">View Movies</h2>
                      </div>
                      <div class="card-header">View Tickets</div></a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="card text-white bg-danger m-3" style="max-width: 18rem;">
                    <a href="#">
                      <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-people-fill"></i></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <div class="card-header">Add Admin</div></a>
                    </div>
                    <div class="card text-dark bg-warning m-3" style="max-width: 18rem;">
                      <div class="card-header">Add Admin</div>
                      <div class="card-body">
                        <h5 class="card-title">Warning card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                    <div class="card text-dark bg-info mb-3" style="max-width: 18rem;">
                      <div class="card-header">Header</div>
                      <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="card text-dark bg-light m-3" style="max-width: 18rem;">
                      <div class="card-header">Header</div>
                      <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                    <div class="card text-white bg-dark m-3" style="max-width: 18rem;">
                      <div class="card-header">Header</div>
                      <div class="card-body">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>