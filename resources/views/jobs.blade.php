<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-grey-200 rounded-lg mb-4">
                <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}</strong>: Pays {{ '$' . number_format((float) $job['salary'], 2) }} per year.
                </div>
            </a>
        @endforeach
    </div>

</x-layout>
