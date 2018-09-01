<template>
    <div>
        <transition-group name="slide">
            <div v-if="this.row === 'title' && this.ready">
                {{this.record.title}}
            </div>

            <div class="pre-line" v-if="this.row === 'description' && this.ready">
                {{this.record.description}}
            </div>

            <div v-if="this.row === 'player' && this.ready">
                {{this.record.player}}
            </div>

            <div v-if="this.row === 'age' && this.ready">
                {{this.record.age}}
            </div>

            <div v-if="this.row === 'wins' && this.ready">
                {{this.record.wins}}
            </div>

            <div v-if="this.row === 'country' && this.ready">
                {{this.record.country}}
            </div>

            <div v-if="this.row === 'weight' && this.ready">
                {{this.record.weight}} kg
            </div>

            <div v-if="this.row === 'height' && this.ready">
                {{this.record.height}} cm
            </div>

            <div v-if="this.row === 'born' && this.ready">
                {{this.record.born}}
            </div>

            <div v-if="this.row === 'foundation' && this.ready">
                {{this.record.foundation}}
            </div>

            <div v-if="this.row === 'coach' && this.ready">
                {{this.record.coach}}
            </div>

            <div v-if="this.row === 'score' && this.ready">
                {{this.record.score}}
            </div>

            <div v-if="this.row === 'wins' && this.ready">
                {{this.record.wins}}
            </div>

            <div v-if="this.row === 'concern' && this.ready">
                {{this.record.concern}}
            </div>

            <div v-if="this.row === 'flight' && this.ready">
                {{this.record.flight}} m
            </div>

            <div v-if="this.row === 'players' && this.ready">
                {{this.record.players}}
            </div>
        </transition-group>

    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "text-block",
        props: {
            api_link: {
                type: String
            },
            row: {
                type: String
            }
        },
        data() {
            return {
                record: '',
                ready: false
            }
        },
        mounted() {
            const SELF = this;
            axios.get('http://' + this.api_link).then(function (Response) {
                SELF.record = Response.data.data[0];
                SELF.ready = true;
            });
        }
    }
</script>

<style scoped>
    .pre-line{white-space: pre-line}
    .slide-enter-active {
        transition: all .3s ease;
    }
    .slide-leave-active {
        transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }
    .slide-enter, .slide-leave-to
        /* .slide-fade-leave-active below version 2.1.8 */ {
        transform: translateX(10px);
        opacity: 0;
    }
</style>