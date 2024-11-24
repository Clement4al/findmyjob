@props(['job', 'employer', 'width' => 120])

<img src="{{ asset('storage/' . $employer['logo']) }}" alt="logo" width="{{ $width }}">

