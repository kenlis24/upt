<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Datos Personales</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                         <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Nacionalidad</label>
                                    <input type="text" class="form-control" v-model="datper.nac">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Cedula</label>
                                    <input type="text" class="form-control" v-model="datper.cedula">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Primer Nombre</label>
                                    <input type="text" class="form-control" v-model="datper.nombre1">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Segundo Nombre</label>
                                    <input type="text" class="form-control" v-model="datper.nombre2">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Primer Apellido</label>
                                    <input type="text" class="form-control" v-model="datper.apellido1">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Segundo Apellido</label>
                                    <input type="text" class="form-control" v-model="datper.apellido2">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" v-model="datper.fechnac">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="form-select" id="floatingSelect" v-model="datper.sexo">                                        
                                        <option value="F">Femenino</option>
                                        <option value="M">Masculino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Estatura</label>
                                    <input type="text" class="form-control" v-model="datper.estatura">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Peso</label>
                                    <input type="text" class="form-control" v-model="datper.peso">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Estado Civil</label>
                                    <select class="form-select" id="floatingSelect" v-model="datper.edocivil">
                                        <option value="S">Soltero</option>
                                        <option value="C">Casado</option>
                                        <option value="D">Divorciado</option>
                                        <option value="V">Viudo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input type="email" class="form-control" v-model="datper.email">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Celular</label>
                                    <input type="text" class="form-control" v-model="datper.celular">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Tel&eacute;fono de Casa</label>
                                    <input type="text" class="form-control" v-model="datper.telfcasa">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Direcci&oacute;n</label>
                                    <input type="text" class="form-control" v-model="datper.direc">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>                          
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"editar-datper",
    data(){
        return {
            datper:{
                nac:'',
                cedula:'',
                nombre1:'',
                nombre2:'',
                apellido1:'',
                apellido2:'',
                fechnac:'',
                sexo:'',
                estatura:'',
                peso:'',                
                edocivil:'',
                email:'',
                celular:'',
                telfcasa:'',
                direc:''
            }
        }
    },
    mounted(){
        this.mostrarDatper()
    },
    methods:{
        async mostrarDatper(){

            await axios.get(`./api/datper/${this.$route.params.id}`).then(response=>{
                
                this.datper.nac = response.data.nac
                this.datper.cedula = response.data.cedula
                this.datper.nombre1 = response.data.nombre1
                this.datper.nombre2 = response.data.nombre2
                this.datper.apellido1 = response.data.apellido1
                this.datper.apellido2 = response.data.apellido2
                this.datper.fechnac = response.data.fechnac
                this.datper.sexo = response.data.sexo
                this.datper.estatura = response.data.estatura
                this.datper.peso = response.data.peso
                this.datper.edocivil = response.data.edocivil
                this.datper.email = response.data.email
                this.datper.celular = response.data.celular
                this.datper.telfcasa = response.data.telfcasa
                this.datper.direc = response.data.direc
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`./api/datper/${this.$route.params.id}`,this.datper).then(response=>{
                this.$router.push({name:"mostrarDatper"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>