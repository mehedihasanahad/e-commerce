<template>
    <div class="bg-[url('/admin_resource/bg-body.png')] 
    bg-no-repeat bg-contain 
    min-h-screen bg-gray-200 flex justify-center items-center">
        <div class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
            <div class="text-center px-6 bg-slate-900 rounded-t py-8">
                <a href="#"><img src="/admin_resource/shopping-bag.svg" alt="" class="w-14 h-14 mx-auto mb-2"></a>
                <h3 class="font-semibold text-white text-xl mb-1">Let's Get Started E-BD</h3>
                <p class="text-xs text-slate-400">Sign in to continue to E-BD.</p>
            </div>

            <form class="p-6 mb-4">
                <div>
                    <label for="email" class="text-sm font-semibold text-gray-500">Email</label>
                    <input type="email" id="email" class="block mt-1 p-2 text-sm w-full rounded border outline-none
                     border-slate-300 focus:border-orange-400 invalid:border-red-600" placeholder="Your Email"
                     pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autofocus required 
                     >
                </div>
                <div class="mt-4">
                    <label for="password" class="text-sm font-semibold text-gray-500">Your password</label>
                    <input type="password" id="password" class="block mt-1 p-2 text-sm w-full rounded border outline-none
                     border-slate-300 focus:border-orange-400 invalid:border-red-600" placeholder="Your Password"
                     title="Password must be at least 6 characters long"  
                     pattern=".{6,}" required>
                </div>
                <!-- <a href="#" class="text-xs text-gray-600 hover:underline">Forget Password?</a> -->
                <div class="block mt-3">
                    <label for="remember" class="text-sm font-semibold text-gray-500 cursor-pointer">
                        <input type="checkbox" name="" id="remember" class="accent-orange-500">
                        Remember me
                    </label>
                </div>                    
                <div class="mt-6">
                    <router-link to="/dashboard">
                        <button class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Login
                        </button>
                    </router-link>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            
        }
    }
</script>
