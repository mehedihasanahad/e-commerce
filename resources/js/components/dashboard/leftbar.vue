<template>
    <div>
        <h1 class="text-gray-300 text-xs uppercase mt-2 mb-1 px-3">Application</h1>
        <div class="mb-2 text-white cursor-pointer flex items-center h-8 px-3 bg-slate-500 hover:bg-slate-400">
            <div>
                <i class="fa-solid fa-gauge-high"></i>
                Dashboard
            </div>
        </div>
        
        <ListItem class="mb-2" titleId='titleOne' desId='desOne' desHeight='150'>
            <div slot="title">
                <i class="fa-solid fa-layer-group"></i>
                Catalog
            </div>
            <div slot="list">
                <ul class="list-inside mt-2 child:px-3 
                child-hover:hover:bg-slate-400 child:mb-2 text-white child:cursor-pointer">
                    <li>Products List</li>
                    <li>Product</li>
                    <li>Categories List</li>
                    <li>Category</li>
                </ul>
            </div>
        </ListItem>

        <ListItem class="mb-2" titleId='titleTwo' desId='desTwo' desHeight='50'>
            <div slot="title">
                <i class="fa-brands fa-opencart"></i>
                Orders
            </div>
            <div slot="list">
                <ul class="list-inside mt-2 child:px-3 
                child-hover:hover:bg-slate-400 child:mb-2 text-white child:cursor-pointer">
                    <li>Orders List</li>
                </ul>
            </div>
        </ListItem>
        <ListItem class="mb-2" titleId='titleThree' desId='desThree' desHeight='50'>
            <div slot="title">
                <i class="fa-solid fa-user-large"></i>
                Customers
            </div>
            <div slot="list">
                <ul class="list-inside mt-2 child:px-3 
                child-hover:hover:bg-slate-400 child:mb-2 text-white child:cursor-pointer">
                    <li>Customers List</li>
                </ul>
            </div>
        </ListItem>
        <ListItem class="mb-2" titleId='titleFour' desId='desFour' desHeight='50'>
            <div slot="title">
                <i class="fa-solid fa-bullhorn"></i>
                Marketing
            </div>
            <div slot="list">
                <ul class="list-inside mt-2 child:px-3 
                child-hover:hover:bg-slate-400 child:mb-2 text-white child:cursor-pointer">
                    <li>Coupons List</li>
                </ul>
            </div>
        </ListItem>
    </div>
</template>

<script>
import ListItem from './listItem.vue'
export default {
    components: {
        ListItem
    },
    methods: {
    }
}
</script>

<style scoped>

</style>
