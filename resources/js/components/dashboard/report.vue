<template>
    <div id="dashboard-card"
    class="p-5 bg-white shadow">
        <div class="flex justify-between">
            <div class="text-sm font-bold">{{title}}</div>
            <div class="py-0.5 px-2.5 rounded cursor-pointer 
            hover:bg-slate-100 text-gray-400 active:outline outline-1">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </div>
        </div>
        <div>
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    props: ['title'],
    data() {
        return {

        }
    }
}
</script>
