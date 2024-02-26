<x-layout>

  <section id="showcase-inner" class="py-5 text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h1 class="display-4">Browse Our Properties</h1>
          <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, pariatur!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Breadcrumb -->
  <section id="bc" class="mt-3">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/">
              <i class="fas fa-home"></i> Home</a>
          </li>
          <li class="breadcrumb-item active"> Browse Listings</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- Listings -->
  <section id="listings" class="py-4">
    <div class="container">
      <div class="row">

        <!-- Listing 1 -->
        @foreach ($listings as $listing)
        @if($listing->is_published == 1)
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card listing-preview">
            <img class="card-img-top" src="{{$listing->photo_main ? asset('storage/' . $listing->photo_main) : asset('/images/house.jpg')}}" alt="">
            <div class="card-img-overlay">
              <h2>
                <span class="badge badge-secondary text-white">${{$listing->price}}</span>
              </h2>
            </div>
            <div class="card-body">
              <div class="listing-heading text-center">
                <h4 class="text-primary">{{$listing->title}}</h4>
                <p>
                  <i class="fas fa-map-marker text-secondary"></i> {{$listing->city}} {{$listing->state}}, {{$listing->zipcode}}</p>
              </div>
              <hr>
              <div class="row py-2 text-secondary">
                <div class="col-6">
                  <i class="fas fa-th-large"></i> Sqft: {{$listing->sqft}}</div>
                <div class="col-6">
                  <i class="fas fa-car"></i> Garage: {{$listing->garage}}</div>
              </div>
              <div class="row py-2 text-secondary">
                <div class="col-6">
                  <i class="fas fa-bed"></i> Bedrooms: {{$listing->bedrooms}}</div>
                <div class="col-6">
                  <i class="fas fa-bath"></i> Bathrooms: {{$listing->bathrooms}}</div>
              </div>
              <hr>
              <div class="row py-2 text-secondary">
                <div class="col-6">
                  <i class="fas fa-user"></i> {{$listing->realtor->name}}</div>
              </div>
              <div class="row text-secondary pb-2">
                <div class="col-6">
                  <i class="fas fa-clock"></i> 5 days ago</div>
              </div>
              <hr>
              <a href="/listings/{{$listing->id}}" class="btn btn-primary btn-block">More Info</a>
            </div>
          </div>
        </div>
        @endif
        @endforeach

        

      </div>

      {{-- <div class="row">
        <div class="col-md-12">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#">&laquo;</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">&raquo;</a>
            </li>
          </ul>
        </div>
      </div> --}}
      {{$listings->links()}}
    </div>
  </section>

</x-layout>