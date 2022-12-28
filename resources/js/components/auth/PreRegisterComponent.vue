<template>
    <div class="bg-login pb-5">
        <div class=" d-flex align-items-center">
            <div class="container py-4">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12">
                        <a class="theme-link" href="/"><i class="bi bi-arrow-left px-2"></i>Ir atrás</a>
                    </div>            
                    <div class="col-lg-4 col-sm-12">
                        <div class="card-body pb-4">
                            <form method="POST" autocomplete="off">                            
                                <label> Nombre y Apellido </label>
                                <div class="form-group">
                                    <input type="text" id="name" class="form-control input-login" name="name" v-model="form.name" required autocomplete="name" autofocus>
                                </div>
                                <label> Email </label>
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control input-login" name="email" v-model="form.email" required autocomplete="email">
                                </div>   
                                <label> Mensaje</label>
                                <div class="form-group">
                                    <textarea name="message" class="form-control input-login" id="message" cols="30" rows="10" v-model="form.message" required ></textarea>
                                </div>
                            </form>                                  
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h2 class="">¿Qué tipo de tripulante eres?</h2>
                        <h3>
                            Debes elegir el Rol que tendrás dentro de la plataforma                       
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-lg-5">
            <div class="row" id="myDIV">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="astro-circle d-flex justify-content-center" style="width:100%">
                                <img src="img/general/startup.png" class="astro-img">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center pt-3 pb-5">
                            <button class="btn btn-outline-primary btn-role" style="width:200px"
                            @click="setRole('entrepreneur')">Startup</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  d-flex justify-content-center">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="astro-circle d-flex justify-content-center" style="width:100%">
                                <img src="img/general/professional.png" class="astro-img">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center pt-3 pb-5">
                            <button class="btn btn-outline-primary btn-role" style="width:200px"
                            @click="setRole('professional')">Profesional</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  d-flex justify-content-center">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="astro-circle d-flex justify-content-center" style="width:100%">
                                <img src="img/general/investor.png" class="astro-img">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center pt-3 pb-5">
                            <button class="btn btn-outline-primary btn-role" style="width:200px"
                            @click="setRole('investor')">Inversor</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <button type="button" class="btn btn-primary" style="width:200px"
                    @click="submit"
                    >¡UNIRME!</button>                            
                </div>
                <div class="col-12 text-center pt-4">
                    <p v-if="show_msg_fields">Debe llenar todos los campos</p>
                    <p v-if="show_msg_error">{{ msg }}</p>
                    <p v-if="show_msg_role">Debe seleccionar un rol</p>
                    <p v-if="show_msg_waiting">
                        <div class="spinner-grow text-secondary spinner-grow-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>    
                         Registrando...</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PreRegisterComponent',
    data() {
        return {
            form: {
                name: '',
                email: '',
                message: '',
                role: '',
            },
            btns: null,
            btnContainer: null,
            msg: '',
            show_msg_fields: false,
            show_msg_role: false,
            show_msg_error: false,
            show_msg_waiting: false,
            showModalSuccess: false,
        }
    },
    mounted() {
        this.setRole('');
    },
    methods: {
        setRole(role) {
            this.btnContainer = document.getElementById("myDIV");
            this.btns = this.btnContainer.getElementsByClassName("btn-role");
            for (var i = 0; i < this.btns.length; i++) {
            this.btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
                }
                this.className += " active";
            });
            } 
            this.form.role = role
        },
        async submit(){
            this.show_msg_fields = false
            this.show_msg_error = false
            this.show_msg_role = false
            if(this.form.name === '' || this.form.email === '' || this.form.message === '') {
                this.show_msg_fields = true
            } else if (this.form.role == ''){
                this.show_msg_role = true
            } else {
                this.show_msg_waiting = true
                await axios.post('api/subscribe',this.form).then(response=>{
                    this.show_msg_waiting = false
                }).catch(error=>{
                    this.show_msg_waiting = false
                    if(error.message) {
                        this.msg = 'Por favor ingrese un email válido'
                    }
                    this.show_msg_error =  true
                })
            }
        }
    },
}
</script>