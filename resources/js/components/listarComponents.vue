<template>
    <div class="card">
       <div class="card-header">Publicado en {{pensamiento.create_at}}</div>
           
           <div class="card-body">
                    <div class="panel-body">
                        <!-- class="form-control" v-model="pensamiento.descriprion" -> Vinculamos el input con la descripcion para que se muestre. -->
                        <input v-if="modoedicion" type="text" class="form-control" v-model="pensamiento.description">

                        <p v-else>
                            {{pensamiento.description}}
                        </p>
                    </div>

                    <div class="panel-footer">
                        <button v-if="modoedicion" type="submit" class="btn btn-success" v-on:click="onClickActualizar">
                            Guardar Cambios
                        </button>  
                        <button v-else type="submit" class="btn btn-primary" v-on:click="onClickEditar">
                            Editar
                        </button>                            
                        <button type="submit" class="btn btn-danger" v-on:click="onClickEliminar">
                            Eliminar
                        </button>
                    </div>
                </div>

            </div>
</template>

<style>
    .card{
        margin: 20px;
    }
    
    .panel-footer{
        margin-top: 15px;
    }
</style>

<script>
    export default {
        //Añadimos props con el fin de enlazar el componente padre con el hijo.
        props:['pensamiento'],

        //Data hace referencia a los datos que usara el componente.
        data() {
            return{
                // pensamiento:[{
                //     'id': ' ',
                //     'description': ' ',
                //     'create_at': ' ' 
                // }]
                
                modoedicion: false
            };
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            onClickEliminar() {
                this.$emit('eliminar');
            },

            onClickEditar() {
                this.modoedicion= true;
                this.$emit('editar');
            },

            onClickActualizar() {
               this.modoedicion= false;
               this.$emit('actualizar',this.pensamiento);
            },
        }
}
</script>
