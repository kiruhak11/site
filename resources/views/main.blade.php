@extends('app.master')

@section('content')
    <div class="ads-search-container">
        <div class="container">
            @if(isset($count) && $count->get('all') > 0)
                <x-search :showSaveSearch="true" :count="$count->get('all')" :isPostDetails="true"></x-search>
            @else
                <x-search :showSaveSearch="true" :isPostDetails="true"></x-search>
            @endif
        </div>
    </div>
@endsection
