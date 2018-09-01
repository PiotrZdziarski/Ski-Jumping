<template>
    <div>
        <transition-group name="slide">
            <div v-if="this.row === 'title' && this.ready" :key="1">
                {{this.record.title}}
            </div>

            <div class="pre-line" v-if="this.row === 'description' && this.ready"  :key="2">
                {{this.record.description}}
            </div>

            <div v-if="this.row === 'player' && this.ready" :key="3">
                {{this.record.player}}
            </div>

            <div v-if="this.row === 'age' && this.ready" :key="4">
                {{this.record.age}}
            </div>

            <div v-if="this.row === 'country' && this.ready" :key="6">
                {{this.record.country}}
            </div>

            <div v-if="this.row === 'weight' && this.ready" :key="7">
                {{this.record.weight}} kg
            </div>

            <div v-if="this.row === 'height' && this.ready" :key="8">
                {{this.record.height}} cm
            </div>

            <div v-if="this.row === 'born' && this.ready" :key="9">
                {{this.record.born}}
            </div>

            <div v-if="this.row === 'foundation' && this.ready" :key="10">
                {{this.record.foundation}}
            </div>

            <div v-if="this.row === 'coach' && this.ready" :key="11">
                {{this.record.coach}}
            </div>

            <div v-if="this.row === 'score' && this.ready" :key="12">
                {{this.record.score}}
            </div>

            <div v-if="this.row === 'wins' && this.ready" :key="13">
                {{this.record.wins}}
            </div>

            <div v-if="this.row === 'concern' && this.ready" :key="14">
                {{this.record.concern}}
            </div>

            <div v-if="this.row === 'flight' && this.ready" :key="15">
                {{this.record.flight}} m
            </div>

            <div v-if="this.row === 'players' && this.ready" :key="16">
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