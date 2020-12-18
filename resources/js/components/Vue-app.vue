<template>
    <div class="container-v">
        <div class="header">
            <div class="container">
                <div class="col-3 pt-4 pb-4 float-right text-right">
                    Корзина
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="container">
            <div class="row row-flex pt-4">
                <div class="col-lg-4 mb-4" v-for="product in products">
                    <div class="card">
                        <img class="card-img-top" :src="/image/ + product.img_url" alt="product.name">
                        <div class="card-body">
                            <h4 class="card-title">{{product.name}}</h4>
                            <p class="card-text">
                                {{product.description}}
                            </p>
                            <a href="#!" class="btn btn-primary">Добавить в корзину</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props: ['products'],
        mounted() {

        },
        methods: {

        }

    }
</script>
