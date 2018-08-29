<template>
    <form method="post" @submit="submit" class="form-theme">
        <div class="row">
            <div class="col-md-12" style="margin-top: -20px;">
                <label>Comment</label>
                <textarea v-model="description" maxlength="5000" rows="10" class="form-control" name="comment"
                          id="comment" style="height: 138px;" required="required"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" value="Post Comment" class="btn btn-primary">
            </div>
        </div>
    </form>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "form-comment",
        props: {
            news_id: {
                type: String
            },
            api_link: {
                type: String
            }
        },
        methods: {
            submit() {
                axios.post('http://' + this.api_link, {
                    description: this.description,
                    news_id: this.news_id
                });
            }
        },
        data() {
            return {
                description: ''
            }
        }
    }
</script>

<style scoped>
    .btn{font-family: "Maven Pro", sans-serif;}
</style>