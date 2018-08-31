<template>
    <div class="panel-box">

        <div class="titles">
            <h4>Recent News</h4>
        </div>
        <transition-group name="fade">
            <div class="post-item" v-for="record in records" v-bind:key="record">
                <div class="row">
                    <div class="col-md-4">
                        <a :href="'news/' + record.id">
                            <img :src="'img/slide/' + record.news_image" :alt="record.title" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <h5><a :href="'news/' + record.id">{{record.title}}</a></h5>
                        <span class="data-info">
                            {{record.date}}
                            / <i class="fa fa-comments"></i>
                            <a :href="'news/' + record.id">{{record.comments}}</a>
                        </span>
                        <p>{{record.short_description}}<a :href="'news/' + record.id">Read More [+]</a></p>
                    </div>
                </div>
            </div>
        </transition-group>

    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "recent-news",
        props: {
            api_link: {
                type: String,
            }
        },
        data() {
            return {
                records: '',
            };
        },
        mounted() {
            const self = this;
            axios.get('http://' + this.api_link).then(function (Response) {
                self.records = Response.data.data;
            });
        }
    }
</script>

<style scoped>

</style>