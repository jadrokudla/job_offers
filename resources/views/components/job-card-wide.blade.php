@props(['job'])

<x-panel>
    <div>
        <x-employer-logo :employer="$job->employer"/>
     </div>

    <div class="flex-1 flex flex-col ">
    <a href="#" class="self-start">{{ $job->employer->name }}</a>

        <h3 class="mt-1 group-hover:text-blue-600">
            <a href="{{ $job->url }}" target="_blank">
            {{ $job->title }}
            </a>
        </h3>
        <p class="mt-auto">{{ $job->salary }}</p>
    </div>


    <div>
        @foreach($job->tags as $tag)
            <x-tag :tag/>
        @endforeach

    </div>

</div>
</x-panel>
