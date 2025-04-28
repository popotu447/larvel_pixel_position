<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl">Lets find your next job</h1>

{{--            <form action="" class="mt-6">--}}
{{--                <input type="text" placeholder="web developer" class="w-full rounded-xl px-4 py-4 border border-gray-700 bg-gray-900 max-w-xl"/>--}}
{{--            </form>--}}
            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Web Developer..."></x-forms.input>
            </x-forms.form>
        </section>

        <section>
            <x-section-heading>Featured jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach

            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag>{{ $tag['name'] }}</x-tag>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job"></x-job-card-wide>
                @endforeach
            </div>
        </section>
    </div>


</x-layout>
