@extends('layouts.app')

@section('content')
    <messenger-component :userId="{{Auth::user()->id}}"></messenger-component>
@endsection
