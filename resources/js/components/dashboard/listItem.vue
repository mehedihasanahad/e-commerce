<template>
    <div class="list">
        <div id="navOne" class="mb-2">
            <div :id="title" @click="toggleList()" class="text-white cursor-pointer flex justify-between items-center h-8 px-3 bg-slate-500 hover:bg-slate-400">
                header 1
                <div class="duration-200">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
            <div :id="desId" class="duration-200 px-3 h-0 overflow-hidden">
                <slot></slot>
            </div>
        </div>
    </div>
</template>


<script>
export default {
    props: {
        title: String,
        desId: String,
        desHeight: String
    },
    methods: {
        toggleList() {
            const btn = document.getElementById(this.title);
            const area = document.getElementById(this.desId);
            btn.classList.toggle('!bg-slate-400');
            btn.childNodes[1].classList.toggle('rotate-90');
            area.classList.toggle(`!h-[${this.desHeight}px]`);
        }
    }
}
</script>
