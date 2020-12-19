<template>
    <div class="container-v">
        <div class="header">
            <div class="container">
                <div class="col-3 pt-4 pb-4 float-right text-right">
                    <router-link to="/">Главная</router-link> |
                    <router-link to="/card">Корзина</router-link>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="container">
            <router-view></router-view>
        </div>

    </div>
</template>

<script>
    export default {

    }
</script>
