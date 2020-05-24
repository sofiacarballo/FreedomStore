<template>

    <div>
        <h2> Categories</h2>

        <button class="btn btn-info mb-2" @click="getCategories()"> Update </button>

        <ul class="list-group">
            <li class="list-group-item" v-for="category in categories">
                {{category.name}}
                <br>
                {{category.description}}
                <br>
                <button class="btn btn-danger mb-2" @click="destroy(category)"> Delete </button>
            </li>
        </ul>
    </div>

</template>

<script>
    export default {
        name: 'CategoryList',
        data(){
            return {
                categories: []
            }
        },

        methods: {
            //llamas a esta ruta (/api/category) y luego lo que te devuelva lo tienes como response
            // y con => indicamos que hace con esa respuesta
            getCategories() {
                axios.get('/api/category').then(response =>{
                    this.categories = response.data; //acá dice que le devuelva esta categoria y la data de esa response, axios devuelve la respuesta dentro de data
                });
            },
            destroy(category){
                if(confirm('Are you sure you want to delete')) {
                        axios.delete('/api/category/'+ category.id).then(response => {
                    this.getCategories();
                });
                    }
                }
        },

        mounted() {
            this.getCategories();
        }
    }
</script>

<style scoped>

</style>
