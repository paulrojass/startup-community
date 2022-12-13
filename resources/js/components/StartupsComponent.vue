<template>
    <div class="container search-bar">
        <div class="row mt-5 justify-content-center  mh-25">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="row">
                            <div class="col-md-2 my-auto">
                                <a class="search-link" href="/"><i class="bi bi-arrow-left px-2"></i>Volver al home</a>
                            </div>
                            <div class="col-md-6">
                                <div class="wrapper d-flex justify-content-center">
                                    <div class="searchBox search-input d-block w-75 d-flex justify-content-between" >
                                        <div class="search-label">
                                            <i class="bi bi-sliders pe-3" aria-hidden="true"></i>Filtrar por:
                                        </div>
                                        <div class="searchField w-50">
                                            <input type="text" name="search" id="search" class="input" style="color:#444444" placeholder="" v-model="inputSearch" v-on:keyup.enter="getResults(1)">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-circle" @click="getResults(1)">
                                            <i class="bi bi-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2  d-flex align-middle justify-content-end">
                                <!-- <button href="/login" class="btn btn-primary">Iniciar sesión</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5 justify-content-center h-75">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-md-6 overflow-auto" style="max-height:500px">
                                <div v-if="startup" >
                                    <single-component
                                        v-for="startup in laravelData.data" :key="startup.id"
                                        :startup="startup"
                                        @click="setStartup(startup)"
                                        >
                                    </single-component>
                                </div>
                                <div v-else>
                                    <h4>No hay resultados en la busqueda</h4>
                                </div>
                            </div>
                            <div class="col-md-6 overflow-auto" v-if="startup" style="max-height:500px">
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
        <pagination
        :data="laravelData"
        @pagination-change-page="getResults"
        />
    </div>
    <!-- v-for="startup in startups.data" :key="startup.id" -->
    <!-- v-for="(startup, indx) in startups.data" :key="indx" :index="indx" -->
</template>
<script>
    export default {
        name: 'StartupsComponent',
        data() {
            return {
                laravelData : {},
                startups : [],
                startup: null,
                inputSearch: '',
            }
        },
        mounted() {
            this.setQueryStringDefaults();
            this.getResults(1);
        },
        methods: {
            getResults(page){
                if (typeof page === 'undefined') {
                    page = 1;
                }
                axios.get('api/startups?page=' + page + '&search=' + this.inputSearch)
                    .then(response => {
                        this.laravelData = response.data
                        //console.log(this.startup)
                        this.startup=this.laravelData.data[0]
                    })
            },
            setStartup(startup) {
                this.startup = startup
            },
            setQueryStringDefaults(){
                let queryString = window.location.search
                let urlParams = new URLSearchParams(queryString)

                if( urlParams.has('search') ){
                    this.inputSearch = urlParams.get('search')
                    console.log(this.inputSearch);
                }
            }
        }
    }
</script>
