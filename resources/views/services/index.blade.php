<x-layout>
    <h1 class="text-center mb-4">Servizi Offerti</h1>
    <!-- Anteprima Portfolio -->
    <section id="portfolio" class="bg-light">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <img src="/img/{{ $service }}.jpeg" class="card-img-top" alt="{{ $service }}">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a class="link-info"
                                        href="{{ route('servizi.show', strtolower($service)) }}">{{ $service }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
