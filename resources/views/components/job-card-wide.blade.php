@props(['job'])
<div class="p-4 bg-white/10 rounded-xl flex gap-x-6  border border-transparent hover:border-blue-800 group transition-colors duration-300">
    <div>
        <x-employer-logo/>
    </div>


    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-grey-700">{{ $job->employer->name }}</a>

        <h3 class="group-hover:text-blue-600 font-bold text-lg  transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag>{{ $tag->name }}</x-tag>
        @endforeach
    </div>

</div>
