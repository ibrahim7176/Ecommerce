@extends('layouts.navbar')
@section('content')
   <a href="{{ route('shop.index') }}">products</a>
   @if ("admin"==1)
       <a href="{{ route('shop.admin')}}"> admin dashboard </a>
   @endif
@endsection
