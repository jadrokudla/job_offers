@props(['tag' => null, 'size' => 'base'])

@php

$classes = "px-2 py-2 hover:bg-white/25 rounded-xl text-xs";
    if ($size === 'base') {
        $classes = "px-3 py-2 text-lg";
    }

    if ($size === 'small') {
        $classes = "px-2 py-2 text-s";
    }
@endphp

@if($tag)
    <a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
@endif
