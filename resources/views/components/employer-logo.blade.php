@props(['job', 'employer', 'width' => 120])

<img src="{{ asset('storage/' . $employer->logo) }}" alt="logo" width="{{ $width }}">


<!-- @props(['employer', 'width' => 90])
<img src="{{ asset('storage/logos/' . $employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}"> -->