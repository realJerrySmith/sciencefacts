@extends('layouts.app')

@section('content')
    <div class="lg:flex">
        <div class="lg:w-1/6">
            @include ('_sidebar-links')
        </div>
        <div class="lg:flex-1 lg:justify-between">
            <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                <a>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </a>
            </div>
        </div>
        <div class="lg:w-1/6">
            @include ('_article-list')
        </div>
    </div>
@endsection
