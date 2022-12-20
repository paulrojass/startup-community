<template>
<div class="card card-border-none card-information">
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-2 d-flex align-items-center">
                <img :src="startup.logo" class="rounded-circle single-card-logo-inf" alt="...">
            </div>
            <div class="col-md-8">
                <h4 class="dark-text">{{startup.name}}</h4>
                <h6 class="dark-text" >{{startup.type}}</h6>
            </div>
            <div class="col-md-2">
                <img src="img/single-logo-startup.png" class="single-type-logo">
            </div>
        </div>

        <p class="card-text">{{startup.description}}</p>
    </div>
</div>
</template>

<script>
    export default {
        props: [
            'startup'
        ],
    }
</script>
