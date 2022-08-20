<template>
    <div id="layout">
        <div id="wrapper" class="relative flex">
            <!-- left bar bg -->
            <div ref="leftbarBg" class="absolute inset-0 bg-slate-300/50 hidden md:hidden" @click="classToggle"></div>
            <!-- left bar -->
            <div ref="leftBar" id="leftbar" class="absolute -left-[290px] z-10 md:static w-[290px] ease-linear duration-200">
                <div id="leftbar-header" class="h-12 bg-yellow-600">
                    asdfasdf
                </div>
                <div id="leftbar-list" class="left-scrollbar leftbar-height overflow-auto bg-gray-700">
                    <LeftSideBar/>
                </div>
            </div>
            <!-- right section -->
            <div class="bg-slate-300 w-full max-h-screen overflow-auto">
                <!-- right section header -->
                <header class="bg-white h-12  shadow-md px-4 py-1 flex items-center sticky top-0">
                    <button class="hover:bg-slate-300/50 text-lg rounded-sm px-2 py-2 duration-200" 
                    @click="classToggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M1,11V9h18v2H1z M1,3h18v2H1V3z M15,17H1v-2h14V17z"></path></svg>
                    </button>
                </header>
                <!-- right section body -->
                <section class="width-auto-mobile sm:width-auto my-4">
                    <router-view></router-view>
                </section>
            </div>
        </div>
    </div>
</template>


<script>
import LeftSideBar from '../components/dashboard/leftbar.vue';
export default {
    components: {
        LeftSideBar
    },
    data() {
        return {
            leftbar: true,
        }
    },
    mounted() {},
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
