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
                }).then(function (response) {
                    const TABLE = response.data.data;
                    const element = document.getElementById('comments');

                    element.innerHTML =
                        '<li id="'+ TABLE.id  +'">' +
                        '    <blockquote>' +
                        '        <p class="comment">' + TABLE.description + '<a class="date_comment">' + TABLE.date +'</a></p>' +
                        '    </blockquote>' +
                        '</li>' + element.innerHTML;

                    const added_comment = document.getElementById(TABLE.id.toString());
                    added_comment.scrollIntoView({
                        behavior: 'smooth'
                    });
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

<style>
    .btn {
        font-family: "Maven Pro", sans-serif;
    }

    .comment {
        font-size: 16px;
        font-family: "Maven Pro", sans-serif;
        white-space: pre-line;
    }

    .date_comment {
        display: block;
        text-decoration: none;
        font-style: normal;
        margin-top: 15px;
        font-size: 12px;
        white-space: nowrap !important;
    }
</style>