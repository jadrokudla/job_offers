<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="text-xl text-center">Find a job </h1>

            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Web developer..." ></x-forms.input>
            </x-forms.form>
        </section>

        <img src="{{ Vite::asset('resources/images/v123.png') }}" alt="" class="mx-auto pt-[-5]" style="transform: scale(0.7)">

        <section class="pt-10">
            <x-section-heading >Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-1">
                @foreach($featuredJobs as $job)
                <x-job-card :$job />
                @endforeach
            </div>
        </section>



        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 spaxce-x-1 ">
                @foreach($tags as $tag)

                <x-tag :$tag />

                @endforeach

            </div>
        </section>

        <section>

            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 spaxce-y-6">
                @foreach($jobs as $job)
                <x-job-card-wide :$job />
                @endforeach
            </div>


        </section>
    </div>
</x-layout>
