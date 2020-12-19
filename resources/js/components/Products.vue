<template>
    <div class="container-v">
        <div class="row row-flex pt-4">
                <div class="col-lg-4 mb-4" v-for="product in products">
                    <div class="card">
                        <img class="card-img-top" :src="/image/ + product.img_url" alt="product.name">
                        <div class="card-body">
                            <h4 class="card-title">{{product.name}}</h4>
                            <p class="card-price ">
                                 {{product.price}} р.
                            </p>
                            <p class="card-text">
                                {{product.description}}
                            </p>
                            <a class="btn btn-primary" :class="{disabled: isButtonDisabled}" @click="addToCard(product)">Добавить в корзину</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        data() {
            return {
                products: [],
                card: [],
                isButtonDisabled: false,
            }
        },
        created() {
            window.axios
                .get('api/products')
                .then(response => {
                    this.products = response.data;
                });
        },

        methods: {
             addToCard(product) {
                 this.card.push(product);
                 this.isButtonDisabled = true;
                 this.save();
                 this.card = [];
             },

             save() {
                 let cardLocal = JSON.parse(localStorage.getItem('card'));
                 let addCard = this.card;

                 if(cardLocal) {
                    addCard.push.apply(addCard, cardLocal);
                 }

                 localStorage.setItem('card', JSON.stringify(addCard));
             },
        },
    }
</script>
