<template>
    <section class="content-info" style="padding-bottom: 50px;">

        <div v-if="this.loading === false" class="container paddings-mini">
            <div class="row">
                <div class="col-lg-8 mg-center">
                    <table class="table-striped table-responsive table-hover result-point">
                        <thead class="point-table-head">
                        <tr>
                            <th class="text-left">No</th>
                            <th class="text-left">Country</th>
                            <th class="text-center">Score</th>
                            <th class="text-center">Ski Jumpers</th>
                        </tr>
                        </thead>

                        <tbody class="text-center">
                            <tr v-for="(record,index) in records">
                                <td>{{index + 1}}</td>
                                <td class="text-left">
                                    <img :src="'img/flags/' + record.country_image" :alt="record.country"><span>{{record.country}}</span>
                                </td>
                                <td>{{record.score}}</td>
                                <td>{{record.players}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div v-if="this.loading === true" class="lds-dual-ring"></div>
    </section>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "all_countries",
        props: {
            api_link: {
                type: String
            }
        },
        data() {
            return {
                records: [],
                loading:true
            }
        },
        mounted() {
            const self = this;
            axios.get('http://' + this.api_link).then(function(Response) {
                self.records = Response.data.data;
                self.loading = false;
            });
        }
    }
</script>

<style scoped>
    .mg-center {
        margin-left: auto;
        margin-right: auto;
    }

    .lds-dual-ring {
        display: inline-block;
        width: 90px;
        height: 90px;
        position: relative;
        left: 50%;
        padding-top: 150px;
        transform: translateX(-25%);
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