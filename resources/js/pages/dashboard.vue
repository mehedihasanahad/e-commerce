<template>
    <div id="dashboard">
        <h1 class="font-bold text-2xl">Dashboard</h1>
        <div class="sm:grid grid-cols-3 gap-x-6 mt-6 child:mb-3">
            <Card/>
            <Card/>
            <Card/>
        </div>
    </div>
</template>


<script>
import Card from '../components/dashboard/card.vue';
export default {
    components: {
        Card
    }
}
</script>
