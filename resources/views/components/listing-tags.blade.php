@props(['tagsCsv'])

@php

$tags = explode(',', $tagsCsv)

@endphp

<ul class="flex items-center">
    @foreach($tags as $tag)
    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs capitalize">
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>