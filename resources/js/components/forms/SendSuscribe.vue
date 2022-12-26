<template>
    <div class="modal" id="modal-investor" tabindex="-1" aria-labelledby="modal-investor-Label" aria-hidden="true"
    ref="modal-susbcribe"
    :show="hide" @hide="handleHide" @close="hide = false"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="post" class="php-email-form">
                        <div class="mb-3">
                            <h4 class="dark-text">Conecta con Startup Community</h4>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label text-black">Nombres y apellidos</label>
                            <input type="name" class="form-control" id="name" name="name" v-model="form.name" v-on:input="verifyFields">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-black">Email</label>
                            <input type="email" class="form-control" id="email" name="email" v-model="form.email" v-on:input="verifyFields">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label text-black">Mensaje</label>
                            <textarea class="form-control" name="message" id="message" v-model="form.message" rows="6" required v-on:input="verifyFields"></textarea>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="button" class="btn btn-primary btn-lg btn-block" @click="submit()">ENVIAR</button>
                        </div>
                        <div class="text-center" v-if="show_msg_fields">
                            <p class="dark-text">Debe llenar todos los campos</p>
                        </div>
                        <div class="text-center" v-if="show_msg">
                            <p class="dark-text">¡Suscripción recibida! por favor revise su buzón de correos</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import axios from 'axios';
export default {
    name : 'SendSuscribe',
    data() {
        return {
            form : {
                name : '',
                email: '',
                message: ''
            },
            show_msg: false,
            show_msg_fields: false,
            hide:false
        }
    },
    methods: {
        async submit(){
            if(this.form.name == '' || this.form.email == '' || this.form.message == '') {
                this.show_msg_fields = true
            } else {
                await axios.post('api/subscribe',this.form).then(response=>{
                    this.show_msg = true;
                }).catch(error=>{
                    console.log(error)
                })
            }
        },
        clear() {
            this.form.name = ''
            this.form.email = ''
            this.form.message = ''
            this.show_msg = false
            this.show_msg_fields = false
        },
        verifyFields() {
            this.show_msg_fields = false
        },
        doSomethingOnHidden(){
            console.log('hello')
            this.clear()
        },
        handleHide() {
            alert('hide!');
        }
    },
    // mounted(){
    //     $(this.$refs.modal-susbcribe).on("hidden.bs.modal", this.doSomethingOnHidden)
    // }
}
</script>

<style>

</style>