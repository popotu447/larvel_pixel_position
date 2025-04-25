@props(['job'])

<div class="p-4 bg-white/10 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 group transition-colors duration-300">
    <div>
        <div class="self-start text-sm text-left">{{ $job->employer->name }}</div>

        <div class="py-8">
            <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">{{ $job->title }}</h3>
            <p class="text-sm mt-4">{{ $job->schedule }} - From {{ $job->salary }} </p>
        </div>

        <div class="flex justify-between items-center mt-auto">
            <div class="flex gap-2">
                @foreach ($job->tags as $tag)
                    <x-tag>{{ $tag['name'] }}</x-tag>
                @endforeach

            </div>
            <x-employer-logo width="42"></x-employer-logo>
        </div>

    </div>
</div>
