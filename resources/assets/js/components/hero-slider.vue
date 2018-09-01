<template>
    <div class="hero-header">
        <div id="hero-slider" class="hero-slider">

            <div class="item-slider" style="background-image: url('img/slide/1.jpg')">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="info-slider">
                                <h1>Season 2018/2019</h1>
                                <p>The autumn meeting of the activists of the International Ski Federation in Zurich brought decisions related to the initial appearance of the calendars of individual cycles for the next season 2018/2019.</p>
                                <a href="/news/2" class="btn-iw outline">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slider" style="background-image: url('img/slide/stoch.jpg')">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="info-slider">
                                <h1>Grandmaster Stoch</h1>
                                <p>In Planica, the season of one hero ended. The leader of the Polish team has the best months in his career. And he still counts that this is not the end!</p>
                                <a href="/news/1" class="btn-iw outline">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "hero-slider",
        data() {
            return {
                records: Object,
                bgImage0: '',
                bgImage1: '',
            };
        },
        props: {
            api_link: {
                type: String,
            },
        },
        mounted() {
            const self = this;
            axios.get('http://' + this.api_link).then(function (Response) {
                self.records = Response.data.data;
                const imagePathBegin = 'url("img/slide/"';
                const imagePathEnd =  ')';
                self.bgImage1 = imagePathBegin + self.records[0].news_image + imagePathEnd;
                self.bgImage2 = imagePathBegin + self.records[1].news_image + imagePathEnd;
            });
        }
    }
</script>

<style scoped>

</style>