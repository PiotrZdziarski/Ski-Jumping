<template>
    <section class="content-info">
        <!-- End Nav Filters -->
        <div class="portfolioFilter">
            <div class="container" style="padding-top: 30px;">
                <h5><i class="fa fa-filter" aria-hidden="true"></i>Filter By:</h5>
                <a href="#score" @click="orderBySCore" data-filter="*" class="current">Score</a>
                <a href="#country" @click="orderByCountry" data-filter=".forward">Country</a>
            </div>
        </div>
        <div class="container padding-top">
            <div class="row" style="display:flex; align-items:center;">

                <!-- Item Player -->
                <div v-for="record in this.records" class="col-xl-3 col-lg-4 col-md-6">
                    <div class="item-player">
                        <div class="head-player">
                            <a v-if="record.id < 9" :href="'/player/' + record.id">
                                <img class="img" :src="'img/players/' + record.player_image" :alt="record.player">
                            </a>
                            <img class="img" v-if="record.id >= 9" :src="'img/players/' + record.player_image"
                                 :alt="record.player">
                        </div>
                        <div class="info-player">
                    <span class="number-player">
                        {{record.id}}
                    </span>
                            <h4>
                                {{record.player}}
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> {{record.country}} </span
                                </li>
                                <li><strong>SCORE:</strong> <span>{{record.score}}</span></li>
                                <li style="display: flex; align-items:center;"><strong
                                        style="padding-right: 10px; display:block">BORN:</strong>
                                    <span>{{record.born}}</span></li>
                            </ul>
                        </div>
                        <a v-if="record.id < 9" :href="'/player/' + record.id" class="btn">View Player <i class="fa fa-angle-right"
                                                                                aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

            </div>
        </div>
        <div v-if="loading === true" class="lds-dual-ring"></div>
    </section>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "all_players",
        props: {
            api_link: {
                type: String,
            },
        },
        data() {
            return {
                records: '',
                loading: false
            };
        },
        methods: {
            orderByCountry() {
                this.records = [];
                this.loading = true;
                const SELF = this;
                axios.get('http://' + this.api_link + '/country_id').then(function (Response) {
                    SELF.records = Response.data.data;
                    this.loading = false;
                });
            },

            orderBySCore() {
                this.records = [];
                this.loading = true;
                const SELF = this;
                axios.get('http://' + this.api_link).then(function (Response) {
                    SELF.records = Response.data.data;
                    this.loading = false;
                });
            }
        },
        mounted() {
            const SELF = this;
            axios.get('http://' + this.api_link).then(function (Response) {
                SELF.records = Response.data.data;
            });
        }
    }
</script>

<style scoped>
    .lds-dual-ring {
        display: inline-block;
        width: 90px;
        height: 90px;
        position: relative;
        left: 50%;
        padding-bottom: 175px;
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