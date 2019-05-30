<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <agregar @new="addpensamiento"></agregar>
            <!-- v-for="pensamiento is pen" -> Esta directiva ofrece la misma funcionalidad que un foreach -->

            <!-- :key="pensamiento.id" -> Espesificamos el id de cada item. -->

            <!-- :pensamiento="pensamiento" -> Tenemos que espesificarle a vue a donde enviara la informacion sease este componente general hasta un componente espesifico. -->
            <listar 
            v-for="(pensamiento, index) in pensamiento" 
            :key="pensamiento.id"
            :pensamiento="pensamiento"
            @actualizar="actualizarpensamiento(index, ...arguments)"
            @eliminar="eliminarpensamiento(index)">
            </listar> 
            <!-- @actualizar="actualizarpensamiento(index, ...arguments)" -> Le enviamos no solo el indice si no tambien los argumentos propios que vienen definidos al momento de emitir.  -->
        </div>
    </div>
</div>
</template>

<script>
    export default {
        //Data hace referencia a los datos que usara el componente.
        data() {
            return {
                pensamiento:[{
                    'id': 1,
                    'description': 'ABC',
                    'create_at': '28/05/2019' 
                }]
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            addpensamiento(pensamiento){
                this.pensamiento.push(pensamiento);
            },

            //Esta funcion recive index que hace referencia a su indice dentro del arreglo.
            eliminarpensamiento(index){
                this.pensamiento.splice(index, 1);
            },

            actualizarpensamiento(index, pensamiento){
                this.pensamiento[index] = pensamiento;
            }
        }
    }
</script>
