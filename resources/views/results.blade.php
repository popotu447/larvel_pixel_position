<x-layout>
    <x-page-heading>Search Results</x-page-heading>

    <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :job="$job"></x-job-card-wide>
        @endforeach
    </div>
</x-layout>
