<template>

<div>

<div class="card my-3 card-single card-overlay">
    <div class="row g-0">
        <div class="col-md-4 d-flex align-items-center justify-content-center">
            <img :src="startup.logo" class="rounded-circle single-card-logo" alt="...">
        </div>
        <div class="col-md-8 pl-0">
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
                <h6>Sept 2022</h6>
            </div>
        </div>
    </div>
</div>
<hr class="sidebar-divider">
</div>
</template>

<script>
    export default {
        data() {
            return {
                startup : this.startup
            }
        },
        props: [
            'startup'
        ]
    }
</script>
