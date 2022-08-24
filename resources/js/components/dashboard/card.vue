<template>
    <div id="dashboard-card"
    class="p-5 bg-white shadow">
        <div class="flex justify-between">
            <div class="text-sm text-gray-400">Total sells</div>
            <div class="py-0.5 px-2.5 rounded cursor-pointer 
            hover:bg-slate-100 text-gray-400 active:outline outline-1">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </div>
        </div>
        <p class="my-4 text-2xl lg:text-4xl text-center">$3799.00</p>
        <div class="flex items-center justify-center gap-3">
            <div class="text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="currentColor"><path d="M9,0L8,6.1L2.8,1L9,0z"></path><circle cx="1" cy="8" r="1"></circle><rect x="0" y="4.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.864 4.0858)" width="7.1" height="2"></rect></svg>
            </div>
            <div class="text-green-600">
                34.7%
            </div>
        </div>
        <p class="text-center text-sm text-gray-400">Compared to April 2022</p>
    </div>
</template>

<script>
export default {}
</script>
