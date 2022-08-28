<template>
    <div>
        <div class="flex justify-between">
            <h1 class="font-bold text-2xl">Create Category</h1>
            <router-link to="/sdf" class="bg-yellow-400 text-sm font-bold py-1.5 px-2 active:shadow-lg hover:bg-yellow-300">Save</router-link>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-4">
            <div class=" lg:col-span-2">
                <!-- part-1 -->
                <div class="dashboard-container">
                    <div class="font-bold text-lg mb-4">Basic information</div>
                    <div class="child:mt-4">
                        <div>
                            <label for="name" class="block text-sm font-bold mb-1">Name</label>
                            <input type="text" id="name" class="focus:outline-yellow-500/30 py-1.5
                            px-2 w-full border border-gray-300 text-sm" v-model="category.name">
                        </div>

                        <div>
                            <label for="des" class="block text-sm font-bold mb-1">Description</label>
                            <VueEditor id="des" v-model="category.description"/>
                        </div>
                    </div>
                </div>
                <!-- part-2 -->
                <div class="mt-4 dashboard-container">
                    <div class="font-bold text-lg mb-4">Search engine optimization</div>
                    <p class="text-sm text-gray-500">
                        Provide information that will help improve the snippet and bring your category to the top of search engines.
                    </p>
                    <div class="child:mt-4">
                        <div>
                            <label for="title" class="block text-sm font-bold mb-1">Page title</label>
                            <input type="text" id="title" class="focus:outline-yellow-500/30 py-1.5
                            px-2 w-full border border-gray-300 text-sm" v-model="category.name">
                        </div>

                        <div>
                            <label for="m-des" class="block text-sm font-bold mb-1">Meta description</label>
                            
                            <textarea id="m-des" class="focus:outline-yellow-500/30 py-1.5
                            px-2 w-full border border-gray-300 text-sm" v-model="category.name"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="h-min">
                <div class="dashboard-container">
                    <div class="font-bold text-lg mb-4">Visibility</div>
                    <div class="flex items-center mb-4">
                        <input id="publish" type="radio" value="" name="publish-radio" 
                        class="w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300" checked>
                        <label for="publish" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Publish</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="hidden" type="radio" value="" name="publish-radio" 
                        class="w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300">
                        <label for="hidden" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hidden</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { VueEditor } from "vue2-editor/dist/vue2-editor.core.js";
export default {
    components: { VueEditor },
    data() {
        return {
            category: {
                name: 'asdfasdf',
                description: '<h1>fine</h1>'
            }
        }
    },
    methods: {
        
    }
}
</script>

<style lang="css">
@import "~vue2-editor/dist/vue2-editor.css";

/* Import the Quill styles you want */
@import '~quill/dist/quill.core.css';
@import '~quill/dist/quill.bubble.css';
@import '~quill/dist/quill.snow.css';
</style>