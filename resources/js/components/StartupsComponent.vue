<template>
    <div class="container">
        <div class="row mt-5 justify-content-center  mh-25">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>

        <Pagination :data="startups" @pagination-change-page="getResults" class="mt-4"></Pagination>


        <div class="row my-5 justify-content-center  mh-100 overflow-auto">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <single-component 
                                    v-for="(startup, indx) in startups" :key="indx" :index="indx"
                                    :startup="startup"
                                    @click="setStartup(startup)"
                                    >
                                </single-component>
                            </div>
                            <div class="col-md-6">
                                <information-component
                                v-if="this.startup"
                                :startup="this.startup"
                                ></information-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'StartupsComponent',
        data() {
            return {
                startups : [],
                startup: null
            }
        },
        mounted() {
            this.getResults();
        },
        methods: {
            getResults(page =  1){
                axios.get('api/startups?page=' + page)
                    .then(response => {
                        this.startups = response.data.data
                        this.startup=this.startups[0]
                    })
            },
            setStartup(startup) {
                this.startup = startup
            }
        }
    }
</script>
