<template>
    <div>
        <ul v-if="this.database === 'countries' && this.type_name !== 'card'">
            <li v-for="(record, index) in records">
              <span class="position">
                  {{index + 1}}
              </span>
                <a href="single-team.html">
                    <img :src="'img/flags' +'/' + record.country_image" :alt="record.country">
                    {{record.country}}
                </a>
                <span class="points">
                    {{record.score}}
                </span>
            </li>
        </ul>

        <ul v-if="this.database === 'players' && this.type_name !=='card'">
            <li v-for="(record, index) in records">
              <span class="position">
                  {{index + 1}}
              </span>
                <a href="single-team.html">
                    <img :src="'img/players' +'/' + record.player_image" :alt="record.player">
                    {{record.player}}
                </a>
                <span class="points">
                    {{record.score}}
                </span>
            </li>
        </ul>


        <div class="row" v-if="this.database === 'players' && this.type_name === 'card'">
            <div v-for="(record,index) in records" class="col-xs-6 col-sm-3 col-md-4 col-lg-4">
                <div class="box-info">
                    <a class="flexbox" href="single-player.html">
                        <img :src="'img/players/' + record.player_image" :alt="record.player" class="img-responsive">
                    </a>
                    <h6 class="entry-title"><a href="single-player.html">{{record.player}}</a></h6>
                </div>
            </div>
        </div>


        <ul v-if="this.database === 'events'">
            <li>
                <span class="head">
                    Portugal Vs Spain <span
                        class="date">27 Jun 2017</span>
                </span>

                <div class="goals-result">
                    <a href="single-team.html">
                        <img src="img/flags/por.png" alt="">
                        Portugal
                    </a>

                    <span class="goals">
                        <b>2</b> - <b>3</b>
                    </span>

                    <a href="single-team.html">
                        <img src="img/flags/esp.png" alt="">
                        Spain
                    </a>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "List",
        props: {
            api_link: {
                type: String,
            },
            database: {
                type: String
            },
            type_name: {
                type: String
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
                /*self.records.sort(function (a, b) {
                    var keyA = a.score;
                    var keyB = b.score;

                    if (keyA < keyB) return 1;
                    if (keyA > keyB) return -1;
                    return 0;
                });*/
            });
        }
    }
</script>
<style scoped>
</style>

