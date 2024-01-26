<x-layout>
    <h1 class="text-center mb-4">{{ $title }}</h1>
    <!-- Anteprima Portfolio -->
    <section id="portfolio" class="bg-light">
        <div class="container">


            <div class="card">



                <div class="card-body">

                    {{ $slot }}

                </div>
            </div>

        </div>
    </section>
</x-layout>
