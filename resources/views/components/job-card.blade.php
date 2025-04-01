@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="">{{ $job->employer->name }}</div>

    <div class="py-12">
        <h3 class="group-hover:text-blue-600">
            <a href="{{ $job->url }}" target="">
            {{ $job->title }}
            </a>
        </h3>
         {{-- job tag fak som si vymslel --}}
        <p>{{ $job->salary}}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag size="small" />
        @endforeach

        <x-tag size="small">backend</x-tag>


    </div>
    <x-employer-logo :employer="$job->employer" :width="90" />
    </div>

</x-panel>
