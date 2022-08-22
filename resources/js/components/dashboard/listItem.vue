<template>
    <div class="list">
        <div id="navOne">
            <div :id="titleId" @click="toggleList()" class="text-white cursor-pointer flex justify-between items-center h-8 px-3 bg-slate-500 hover:bg-slate-400">
                <slot name="title"></slot>
                <div class="duration-200">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
            <div :id="desId" class="duration-200 h-0 overflow-hidden">
                <slot name="list"></slot>
            </div>
        </div>
    </div>
</template>


<script>
export default {
    props: {
        titleId: String,
        desId: String,
        desHeight: String
    },
    data() {
        return {
            styleFlag: true,
        }
    },
    methods: {
        toggleList() {
            const btn = document.getElementById(this.titleId);
            const area = document.getElementById(this.desId);
            btn.classList.toggle('!bg-slate-400');
            btn.childNodes[2].classList.toggle('rotate-90');
            // handle dropdown animated list
            if (this.styleFlag) {
                area.style.height = this.desHeight+'px';
            } else {
                area.style.height = '0px';
            }
            this.styleFlag = !this.styleFlag;
        }
    }
}
</script>
