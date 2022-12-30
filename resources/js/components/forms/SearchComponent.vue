<template>
    <div class="row d-flex justify-content-center px-5">
        <div class="col-lg-8">
            <form action="directory" method="GET">
            <div class="search-bar">
                <div class="input-group">
                <span class="input-group-text icon-input">
                    <i class="bi bi-ui-checks"></i>
                </span>

                <div class="rail-select">
                <select class="form-select shadow-none search-input" name="category" aria-label="Default select example">
                    <option value="" selected disabled hidden>Categorías</option>
                    <option value="startup">Startup</option>
                    <!-- <option value="professional">Profesional</option>
                    <option value="investor">Inversor</option> -->
                </select>
                </div>

                <input type="text" class="form-control shadow-none search-input" name="search" placeholder="Colocar tu búsqueda de Startup aquí">
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