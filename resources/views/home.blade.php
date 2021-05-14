@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col col-4">
                <contact-list-component></contact-list-component>
            </div>
            <div class="col col-8">
                <active-conversation-component></active-conversation-component>
            </div>
        </div>
    </div>
@endsection
