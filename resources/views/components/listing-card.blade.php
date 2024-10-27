@props(['listing'])

<x-card class="p-10">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
        src="{{$listing->logo ? asset('storage/' . $listing->logo)  : asset('/images/no-image.png')}}" alt="">
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
            {{-- listing tags import --}}
            <x-listing-tags :tagsCsv="$listing->tags" /> 

            <div class="text-sm mt-2">
                <i class="fa-solid fa-location-dot mr-1"></i>{{$listing->location}}
            </div>
        </div>
    </div>

</x-card>