@extends('layouts.timeline-app')
@section('css')
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="container" class="container">
        <div class="page-header">
            <h1 id="timeline">Dev-life</h1>
        </div>
        <ul class="timeline">
            <li v-for="project in projects">
                <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">{{ project.name }}</h4>
                    </div>
                    <div class="timeline-body">
                        <p>{{ project.tech }}</p>
                        <hr>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script type="application/javascript">
        var app4 = new Vue({
            el: '#container',
            data: {
                projects: [
                    {
                        year: 2016,
                        company: 'Minda',
                        name: 'Renewal',
                        tech: ['PHP', 'Mysql', 'Javascript'],
                    },
                    {
                        year: 2016,
                        company: 'Minda',
                        name: 'Spot, Plan',
                        tech: ['PHP', 'Mysql', 'Javascript'],
                    },{
                        year: 2016,
                        company: 'Minda',
                        name: 'Calendar',
                        tech: ['PHP', 'Mysql', 'Javascript'],
                    },{
                        year: 2016,
                        company: 'Minda',
                        name: 'Cancel Rule',
                        tech: ['PHP', 'Mysql', 'Javascript'],
                    },{
                        year: 2016,
                        company: 'Minda',
                        name: 'Trip',
                        tech: ['PHP', 'Mysql', 'Javascript'],
                    },{
                        year: 2016,
                        company: 'Minda',
                        name: 'Domestic',
                        tech: ['PHP', 'Mysql', 'Javascript'],
                    },
                ]
            }
        })
    </script>
@endsection
