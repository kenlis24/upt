<template>
    <div class="container">
        <div class="row">
            <div class="col text-center">
               <h1>Datos Personales </h1>
            </div>
            <div class="col-12 mb-2">
                <!-- llamamos al componente para Crear   -->
                <router-link :to='{name:"crearDatper"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
            </div>
            <div class="col-12">             
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nacionalidad </th>
                                        <th>Cedula</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="datper in datpers" :key="datper.id">
                                        <td>{{ datper.id }}</td>
                                        <td>{{ datper.nac }}</td>
                                        <td>{{ datper.cedula }}</td>
                                        <td>{{ datper.nombre1 }}</td>
                                        <td>{{ datper.apellido1 }}</td>
                                        <td>
                                            <!-- llamamos al componente para Editar     -->
                                            <router-link :to='{name:"editarDatper",params:{id:datper.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                            <a type="button" @click="borrarDatper(datper.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>                          
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"datpers",
    data(){
        return {
            datpers:[]
        }
    },
    mounted(){
        this.mostrarDatpers()
    },
    methods:{
        async mostrarDatpers(){
            await this.axios.get('./api/datper').then(response=>{
                this.datpers = response.data
            }).catch(error=>{
                console.log(error)
                this.datpers = []
            })
        },
        borrarDatper(id){
            if(confirm("¿Confirma eliminar el registro?")){
                this.axios.delete(`./api/datper/${id}`).then(response=>{
                    this.mostrarDatpers()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>