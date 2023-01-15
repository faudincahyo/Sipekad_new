@extends('layouts.partials.userpartials.requirenav');

@section('content')
<div class="container">
    <a href="{{ route('cetakdomisili') }}"><button class="btn btn-success mb-3">Cetak Pdf</button></a>
    @foreach ($data as $item)
    
    <img src="pdf/{{$item->domisili_doc}}" alt="">   
    @endforeach
</div>
@endsection