<template>
    <v-container grid-list-xs>

        <v-layout justify-center>
            <v-flex class="content">

                <div v-if="courses" color="white">
                    <h1>1<span class="eur"> EUR </span>: {{courses}} <span class="rub">RUB</span> </h1>
                </div>


            </v-flex>

        </v-layout>

    </v-container>
</template>

<script>
    import route from '../route'

    export default {
        name: "Home",

        data(){
            return {
                courses: null,
            }
        }, //end data

        mounted() {

            this.getCourse();


            setInterval(() => {
                this.getCourse();
            }, 10000);




        },//end mounted

        methods:{

            getCourse(){

                fetch(route('api.course'))
                    .then(response => response.json())
                    .then(data => this.courses = data.course);

            }, //end get course

        },//end methods

    }// end export
</script>

<style scoped>

    .eur{
        color: yellow;
    }

    .rub{
        color: #2176bd;
    }
    .content{
        text-align: center;
    }

</style>