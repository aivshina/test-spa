<template>
    <div class="container-v">
        <div v-for="product in products">
            <div class="card mb-4">
                <div class="card-body">
                    {{product.name}}

                <p class="card-text">
                    {{product.price}} р.
                </p>
                <a class="btn btn-primary" @click="removeProduct(product)">Удалить</a>
                </div>
            </div>

        </div>
        <div v-if="products.length">
            <h3>Ваши данные</h3>
            <form @submit.prevent="sendOrder" class="col-md-8">
                <input v-model="name" type="text" placeholder="ФИО" class="form-control mb-2" required>
                <input v-model="tel" type="tel" placeholder="Телефон" class="form-control mb-2" required>
                <input v-model="address" type="text" placeholder="Адрес" class="form-control mb-2" required>
                <button class="btn btn-primary">Отправить</button>
            </form>
        </div>

    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                name: null,
                tel: null,
                address: null,
                products: localStorage.getItem('card') ? JSON.parse(localStorage.card) : 0,
            }
        },
        methods: {
            removeProduct(product) {
                this.products.splice(product, 1);
                this.save();
            },
            save() {
                localStorage.setItem('card', JSON.stringify(this.products));
            },
            sendOrder() {
                let array = {};
                let vm = this;

                array.name = this.name;
                array.tel = this.tel;
                array.address = this.address;
                array.data = this.products;

                window.axios
                    .post('api/sendOrder', array)
                    .then(function (response) {
                        vm.$alert('Ваш заказ отправлен');
                        localStorage.removeItem('card');
                        vm.$router.push({name: 'products'})
                    })
                    .catch(error => console.log(error))
            }
        },
    }
</script>
