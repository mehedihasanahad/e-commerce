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
            <div class="bg-slate-100 w-full max-h-screen overflow-auto">
                <!-- right section header -->
                <header class="bg-white h-12 shadow-md pl-4 py-1 flex items-center justify-between sticky top-0 z-10">
                    <div>
                        <button class="hover:bg-slate-300/50 text-lg rounded-sm px-2 py-2 duration-200"
                                @click="classToggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M1,11V9h18v2H1z M1,3h18v2H1V3z M15,17H1v-2h14V17z"></path></svg>
                        </button>
                    </div>
                    <div class="flex">
                        <div @click="closeDropDown" ref="profile" class="relative user- flex gap-x-1 hover:hover:bg-gray-400/20 py-1.5 px-4 duration-200 cursor-pointer">
                            <img v-if="userInfo && userInfo.image" :src="userInfo.image" alt="profile image">
                            <img v-else class="w-8 h-8 object-contain" src="https://stroyka-admin.html.themeforest.scompiler.ru/variants/ltr/images/customers/customer-4-64x64.jpg" alt="pp"/>
                            <div class="text-sm hidden md:block">
                            <p class="font-[self-font-medium] select-none" v-if="userInfo">{{userInfo.first_name + ' ' + userInfo.last_name}}</p>
                            <p class="text-xs select-none" v-if="userInfo">{{userInfo.username}}</p>
                            </div>
                            <div
                            v-click-outside="closeDropDown"
                            v-if="pDropShow" id="p-dropdown"
                            class="absolute right-0 top-12 w-[120px] md:w-full bg-white shadow-md">
                                <ul class="flex flex-col child-hover:bg-gray-300 child:duration-200 child:py-1">
                                    <li class="px-4">Profile</li>
                                    <li class="px-4">Settings</li>
                                    <li @click="logout()" class="px-4">Sign Out</li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
            pDropShow: false,
            userInfo: null,
        }
    },
    mounted() {
        const token = sessionStorage.getItem('Authorization');
        const rememberToken = this.$cookies.get('rememberToken');
        // validateToken return a Promise
        commonFunction.validateToken(token, rememberToken).then(resp => {
            if (rememberToken) this.userInfo = this.$cookies.get('userInfo');
            else if (token) this.userInfo = JSON.parse(sessionStorage.getItem('userInfo'));
            console.log(this.userInfo);
            if (resp?.data?.status != 200) this.$router.push('/login');
        });
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
        },
        logout() {
            const rememberToken = this.$cookies.get('rememberToken');
            if (rememberToken) {
                this.$cookies.remove('rememberToken');
                this.$cookies.remove('userInfo');
                this.$router.push('login');
                return;
            }
            sessionStorage.removeItem('Authorization');
            sessionStorage.removeItem('userInfo');
            this.$router.push('login');
        },
        closeDropDown() {
            this.$refs.profile.classList.toggle('bg-gray-400/20');
            this.pDropShow = !this.pDropShow
        }
    }
}
</script>
