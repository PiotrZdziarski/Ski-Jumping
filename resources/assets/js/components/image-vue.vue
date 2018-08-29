<template>
    <img id="image" class="w-100" :src="'../img/slide/' + record.news_image">
</template>

<script>
    import axios from 'axios';
    export default {
        name: "image-vue",
        props: {
            api_link: {
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
                console.log(self.record);
            });
        }
    }
</script>

<style scoped>

</style>