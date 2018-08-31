<template>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" v-for="record in this.records">
            <div class="item-player">
                <div class="head-player">
                    <img :src="'../img/players/' + record.player_image" :alt="record.player">
                </div>
                <div class="info-player">
                    <span class="number-player">
                        {{record.id}}
                    </span>
                    <h4>
                        {{record.player}}
                    </h4>
                    <ul>
                        <li class="min-height"><strong>BORN:</strong> <span class="padding-left">{{record.born}}</span>
                        </li>
                        <li><strong>Wins:</strong> <span>{{record.wins}}</span></li>
                    </ul>
                </div>
                <a v-if="record.id <= 8" :href="'/player/' + record.id" class="btn">View Player <i
                        class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "player_cards",
        props: {
            api_link: {
                type: String,
            },
        },
        data() {
            return {
                records: '',
            };
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
    .padding-left {
        padding-left: 10px;
    }

    .min-height {
        min-height: 50px;
        display: flex !important;
        align-items: center;
        max-height: 60px !important;
    }
</style>