<template>
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="create" @reset="onReset" v-if="show">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" :v-model="name" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="description" name="description" :v-model="description" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input class="form-control" type="file" id="logo" name="logo" :v-model="logo" required>
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Ubicación</label>
                            <select class="form-select" aria-label="Default select example" name="contry" id="country" :v-model="country" required>
                                <option selected>-- Seleccione --</option>
                                <option value="España">España</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <p v-if="show_msg">Guardado con exito</p>
                        </div>
                        <button type="submit" class="btn btn-primary me-5">Guardar</button>
                        <button type="reset" class="btn btn-primary me-5">Borrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        name: 'StartupCreateComponent',
        data() {
            return {
                form: {
                    name: '',
                    description: '',
                    logo: '',
                    country: '',
                },
                show: true,
                show_msg: false
            }
        },
        methods: {
            async create(){
                await this.axios.post('/api/startups',this.form).then(response=>{
                    this.show_msg = true;
                }).catch(error=>{
                    console.log(error)
                })
            },
            onReset(evt) {
                evt.preventDefault()
                // Reset our form values
                this.form.name = ''
                this.form.description = ''
                this.form.logo = ''
                this.form.country = ''
                // Trick to reset/clear native browser form validation state
                this.show = false
                this.$nextTick(() => {
                    this.show = true
                })
            }
        }
    }
</script>
