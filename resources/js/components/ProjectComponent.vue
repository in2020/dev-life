<template>
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
</template>
<script>
    export default {
        data() {
            return {
                projects: [
                    {
                        id: 1,
                        year: 2016,
                        company: 'Minda',
                        name: 'Renewal',
                        tech: ['PHP', 'Mysql', 'Javascript', 'Jquery'],
                    },
                    {
                        id: 2,
                        year: 2016,
                        company: 'Minda',
                        name: 'Spot, Plan',
                        tech: ['PHP', 'Mysql', 'Javascript'],
                    },{
                        id: 3,
                        year: 2016,
                        company: 'Minda',
                        name: 'Calendar',
                        tech: ['PHP', 'Mysql', 'Javascript'],
                    },{
                        id: 4,
                        year: 2016,
                        company: 'Minda',
                        name: 'Cancel Rule',
                        tech: ['PHP', 'Mysql', 'Javascript'],
                    },{
                        id: 5,
                        year: 2016,
                        company: 'Minda',
                        name: 'Trip',
                        tech: ['PHP', 'Mysql', 'Javascript'],
                    },{
                        id: 6,
                        year: 2016,
                        company: 'Minda',
                        name: 'Domestic',
                        tech: ['PHP', 'Mysql', 'Javascript'],
                    },
                ]
            }
        }
    }
</script>