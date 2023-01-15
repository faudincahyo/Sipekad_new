@extends('layouts.partials.userpartials.requirenav');

@section('content')
<div class="container">
    <a href="{{ route('cetakpdf') }}"><button class="btn btn-success mb-3">Cetak Pdf</button></a>
    @foreach ($data as $item)
    
    <img src="pdf/{{$item->pengantar_doc}}" alt="">   
    @endforeach
</div>
@endsection