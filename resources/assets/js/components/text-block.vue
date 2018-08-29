<template>
    <div>
        <div v-if="this.row === 'title'">
            {{this.record.title}}
        </div>

        <div class="pre-line" v-if="this.row === 'description'">
            {{this.record.description}}
        </div>
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
                record: ''
            }
        },
        mounted() {
            const self = this;
            axios.get('http://' + this.api_link).then(function (Response) {
                self.record = Response.data.data[0];
            });
        }
    }
</script>

<style scoped>
    .pre-line{white-space: pre-line}
</style>