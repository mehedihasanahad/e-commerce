<template>
    <div id="layout">
        <div id="wrapper" class="relative flex min-h-screen">
            <div ref="leftbarBg" class="absolute inset-0 bg-slate-300/50 hidden md:hidden" @click="classToggle"></div>
            <div ref="leftBar" id="left-bar" class="absolute -left-[290px] z-10 min-h-screen md:static w-[290px] bg-green-500 ease-linear duration-200">
asdfaLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
            </div>
            <div id="right-section" class="bg-yellow-500 w-full">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
<button class="bg-black text-white" @click="classToggle">click</button>
            </div>
        </div>
        <!-- <section>
            <router-view></router-view>
        </section> -->
    </div>
</template>


<script>
export default {
    data() {
        return {
            leftbar: true,
        }
    },
    mounted() {
        window.onresize = () =>{
            // console.log(window.innerWidth);
            // if (window.innerWidth <= 760) {
            //     console.log(this.$refs.leftBar);
            // }
        }
    },
    methods: {
        classToggle() {
            this.$refs.leftBar.classList.toggle('md:-ml-[290px]');
            if (this.$refs.leftBar.classList.contains("-left-[290px]")) {
                // show leftbar
                this.$refs.leftBar.classList.remove('-left-[290px]');
                this.$refs.leftBar.classList.add('left-0');
                // show close bg
                this.$refs.leftbarBg.classList.remove('hidden');
                this.$refs.leftbarBg.classList.add('block');
            } else {
                // hide leftbar
                this.$refs.leftBar.classList.remove('left-0');
                this.$refs.leftBar.classList.add('-left-[290px]');
                // hide left bg
                this.$refs.leftbarBg.classList.remove('block');
                this.$refs.leftbarBg.classList.add('hidden');
            }
        }
    }
}
</script>
