<template>
<div>
    <div class="card card-overlay card-border-none card-radius-none">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <img :src="startup.logo" class="rounded-circle single-card-logo">
                </div>
                <div class="col-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-10">
                                <h4 class="dark-text">{{startup.name}}</h4>
                            </div>
                            <div class="col-2">
                                <img src="img/single-logo-startup.png" class="single-type-logo">
                                <img src="img/single-logo-startup-white.png" class="single-type-logo-white">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- <div class="card single-card card-overlay card-border-none">
        <div class="row">
            <div class="col-md-4 align-items-center justify-content-center">
                <img :src="startup.logo" class="rounded-circle single-card-logo" alt="...">
            </div>
            <div class="col-md-8 pl-0 ">
                <div class="card-body p-2">
                    <div class="single-card-header">
                        <div class="row">
                            <div class="col-md-8 pr-0">
                                <h5 class="card-title">{{startup.name}}</h5>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end pl-0">
                                <img src="img/single-logo-startup.png" class="single-type-logo">
                            </div>
                        </div>
                    </div>
                    <p class="card-text">{{startup.description}}</p>
                </div>
            </div>
        </div>
    </div> -->
    <hr class="sidebar-divider">
</div>
</template>

<script>
    import moment from 'moment';
    export default {
        props: [
            'startup'
        ],
        computed: {
            formattedDate() {
                return moment(this.startup.created_at).format('MMM YYYY')
            }
        }
    }
</script>
