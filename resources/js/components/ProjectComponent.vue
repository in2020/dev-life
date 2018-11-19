<template>
    <ul class="timeline">
        <li v-for="project in projects">
            <div v-if="project.company === 'Minda'" v-bind:title="project.company" class="timeline-badge minda-color" >M</div>
            <div v-else-if="project.company === 'Pantech'" v-bind:title="project.company" class="timeline-badge pantech-color">P</div>
            <div v-else-if="project.company === 'LG'" v-bind:title="project.company" class="timeline-badge lg-color">L</div>
            <div v-else class="timeline-badge"></div>
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
    import { LgProject } from '../classes/LgProject.js';
    import { PantechProject } from '../classes/PantechProject';
    import { MindaProject } from '../classes/MindaProject';
    export default {
        data() {
            return {
                projects: [
                    new LgProject(
                        'Smart Home',
                        '2010',
                    ).toStdObject(),
                    new PantechProject(
                        'SB1',
                        '2012',
                    ).toStdObject(),
                    new PantechProject(
                        'PLM',
                        '2013',
                    ).toStdObject(),
                    new MindaProject(
                        'Renewal',
                        '2016',
                        ['PHP', 'Mysql', 'Javascript', 'Jquery'],
                    ).toStdObject(),
                    // {
                    //     id: 0,
                    //     year: 2012,
                    //     company: 'Pantech',
                    //     name: 'PLM',
                    //     tech: ['JSP', 'Oracle', 'Javascript', 'Jquery','PLM'],
                    // },
                    // {
                    //     id: 1,
                    //     year: 2016,
                    //     company: 'Minda',
                    //     name: 'Renewal',
                    //     tech: ['PHP', 'Mysql', 'Javascript', 'Jquery'],
                    // },
                    // {
                    //     id: 2,
                    //     year: 2016,
                    //     company: 'Minda',
                    //     name: 'Spot, Plan',
                    //     tech: ['PHP', 'Mysql', 'Javascript'],
                    // },{
                    //     id: 3,
                    //     year: 2016,
                    //     company: 'Minda',
                    //     name: 'Calendar',
                    //     tech: ['PHP', 'Mysql', 'Javascript'],
                    // },{
                    //     id: 4,
                    //     year: 2016,
                    //     company: 'Minda',
                    //     name: 'Cancel Rule',
                    //     tech: ['PHP', 'Mysql', 'Javascript'],
                    // },{
                    //     id: 5,
                    //     year: 2016,
                    //     company: 'Minda',
                    //     name: 'Trip',
                    //     tech: ['PHP', 'Mysql', 'Javascript'],
                    // },{
                    //     id: 6,
                    //     year: 2016,
                    //     company: 'Minda',
                    //     name: 'Domestic',
                    //     tech: ['PHP', 'Mysql', 'Javascript'],
                    // },
                ]
            }
        }
    }
</script>
<style>
    .pantech-color{
        background-color: darkcyan !important; ;
    }
    .minda-color{
        background-color: orange !important; ;
    }
    .lg-color{
        background-color: darkred !important; ;
    }
</style>