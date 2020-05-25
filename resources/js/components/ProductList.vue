<template>

    <div>
        <h2> Products </h2>

        <button class="btn btn-info mb-2" @click="getProducts()"> Update </button>

        <ul class="list-group">
            <li class="list-group-item" v-for="product in products">
                Name: {{product.name}}
                <br>
                Price: {{product.price}}
                <br>
                Category: {{product.category.name}}
                <br>
                Product created at: {{product.created}}
                <button class="btn btn-danger mb-2" @click="destroy(product)"> Delete </button>
            </li>
        </ul>
    </div>

</template>

<script>
    export default {
        name: 'ProductList',
        data(){
            return {
                products: []
            }
        },

        methods: {
            //llamas a esta ruta (/api/category) y luego lo que te devuelva lo tienes como response
            // y con => indicamos que hace con esa respuesta
            getProducts() {
                axios.get('/api/product').then(response =>{
                    this.products = response.data.data; //acá dice que le devuelva esta categoria y la data de esa response, axios devuelve la respuesta dentro de data
                });
            },
            destroy(product){
                if(confirm('Are you sure you want to delete')) {
                        axios.delete('/api/product/'+ product.id).then(response => {
                    this.getProducts();
                });
                    }
                }
        },

        mounted() {
            this.getProducts();
        }
    }
</script>

<style scoped>

</style>
