@props(['employer', 'width' => 200])
<img src="{{ asset('storage/'.$employer->logo) }}" alt="" class="rounded " width="{{ $width }}">
                                {{-- @php
                                    dd($employer->logo);
                                @endphp --}}
