<template>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
            <form action="startups" method="GET">
            <div class="search-bar">
                <div class="input-group">
                <span class="input-group-text icon-input">
                    <i class="bi bi-sliders"></i>
                </span>
                <input type="text" class="form-control shadow-none search-input" name="search" placeholder="Filtrar por: Colocar tu búsqueda de Startup aquí">
                <button class="btn btn-primary search-button" type="submit">
                    <i class="bi bi-search"></i> BUSCAR
                </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>