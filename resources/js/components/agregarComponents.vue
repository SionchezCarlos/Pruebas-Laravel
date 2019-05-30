<template>
    <div class="card">
        <div class="card-header">Pruebas SC - Vue.js</div>

            <div class="card-body">
                <!-- v-on:submit.prevent="newpensamiento()" -> Detectamos el evento submit ademas le añadimos .prevent para evitar el recargo de pagina que los formularios tienen ´por defecto. -->
                <form action="" v-on:submit.prevent="newpensamiento()">
                    <div class="form-group">
                        <label for="pensamiento">¿En que estas pensando ahora?</label>
                        <input type="text" class="form-control" name="pensamiento" v-model="description">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Enviar Pensamiento
                    </button>
                </form>
            </div>

        </div>
</template>

<style>
    .card{
        margin: 20px;
    }
</style>

<script>
    export default {
        data() {
            return {
                description: ''
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            newpensamiento() {
                // this nos permite el acceso a las variables que tengamos definidas en data.
                let pensamiento = {
                    id: 2,
                    description: this.description,
                    create_at: '11/22/3333'
                }

                //this.$emit('new', pensamiento); -> Emitimos el evento.
                this.$emit('new', pensamiento);
                // alert(this.description);
                
                //Limpiamos el textBox una vez enviada la informacion.
                this.description ='';
            }
        }
    }
</script>
