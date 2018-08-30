<template>
    <div class="panel-box" :class="{height200: loading}">

        <div id="1" class="titles no-margin display_none">
            <h4>
                <TextBlock row="title" :api_link="api_link_component"></TextBlock>
            </h4>
        </div>
        <ImageVue class="display_none" id="2" :api_link="api_link_component"></ImageVue>
        <div id="3"  class="info-panel display_none">
            <TextBlock row="description" :api_link="api_link_component"></TextBlock>
        </div>

        <div v-if="loading === true" class="lds-dual-ring"></div>
    </div>
</template>

<script>
    import TextBlock from './text-block.vue';
    import ImageVue from './image-vue.vue';

    export default {
        name: "news",
        components: {
            TextBlock,
            ImageVue
        },
        props: {
            api_link_component: {
                type: String
            }
        },
        data() {
            return {
                loading: true
            }
        },
        mounted() {
            const SELF = this;
            setTimeout(function(){
                SELF.loading = false;
                 for(let i = 1; i <= 3; i++) {
                     document.getElementById(i.toString()).classList.remove('display_none');
                 }
            }, 1300)
        }
    }
</script>

<style scoped>
    .height200 {
        height: 200px;
    }
    .panel-box {
        position: relative;
    }
    .lds-dual-ring {
        display: inline-block;
        width: 90px;
        height: 90px;
        position: absolute;
        left: 50%;
        top: 35%;
        transform: translate(-50%);
    }

    .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 70px;
        height: 70px;
        margin: 1px;
        border-radius: 50%;
        border: 8px solid lightgray;
        border-color: lightgray transparent lightgray transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }

    @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

</style>