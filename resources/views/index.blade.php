@extends('layouts.timeline-app')
@section('css')
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="container" class="container">
        <div class="page-header">
            <h1 id="timeline">Dev-life</h1>
        </div>

            <project-component></project-component>
        </ul>
    </div>
@endsection

@section('script')
    {{--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>--}}
@endsection
