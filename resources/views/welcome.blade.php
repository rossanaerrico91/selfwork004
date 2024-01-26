<x-layout>
    <h1 class="text-center mb-4">Benvenuto nel mio Portfolio</h1>
    <!-- Anteprima Portfolio -->
    <section id="portfolio" class="bg-light">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/img/{{ $project['img'] }}" class="card-img-top" alt="{{ $project['img'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project['name'] }}</h5>
                                <p class="card-text">{{ $project['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
   
</x-layout>