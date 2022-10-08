<template>
    <div>
        <form @submit.prevent="createProduct()">
            <div class="flex justify-between">
                <h1 class="font-bold text-2xl">Create Product</h1>
                <button type="submit" class="bg-yellow-400 text-sm font-bold py-1.5 px-2 active:shadow-lg hover:bg-yellow-300">Save</button>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-4">
                <div class=" lg:col-span-2">
                    <!-- part-1 -->
                    <div class="dashboard-container">
                        <div class="font-semibold text-lg mb-4 text-gray-600">Basic information</div>
                        <div class="child:mt-4">
                            <div>
                                <label for="name" class="block text-sm font-semibold mb-1 text-gray-600">Name*</label>
                                <input type="text" id="name" class="focus:outline-yellow-500/30 py-1.5
                                px-2 w-full border border-gray-300 text-sm" v-model="product.name" required>
                            </div>

                            <div>
                                <label for="des" class="block text-sm font-semibold mb-1 text-gray-600">Description</label>
                                <VueEditor id="des" v-model="product.description"/>
                            </div>

                            <div>
                                <label for="m-des" class="block text-sm font-semibold mb-1 text-gray-600">Short description</label>

                                <textarea id="m-des" class="focus:outline-yellow-500/30 py-1.5
                                px-2 w-full border border-gray-300 text-sm" v-model="product.shortDescription"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- part-2 -->
                    <div class="mt-4 dashboard-container">
                        <div class="font-semibold text-lg mb-4 text-gray-600">Info</div>
                        <div>
                            <label for="name" class="block text-sm font-semibold mb-1 text-gray-600">Product SKU</label>
                            <input type="text" id="price" class="focus:outline-yellow-500/30 py-1.5
                            px-2 w-full border border-gray-300 text-sm" v-model="product.SKU">
                        </div>
                    </div>

                    <!-- part-3 -->
                    <div class="mt-4 dashboard-container px-0">
                        <div class="font-semibold text-lg mb-4 text-gray-600 px-5">Inventory</div>
                        <div class="mt-4 border-t">
                            <div class="grid grid-cols-7 border-b px-5 py-2 child:text-sm">
                                <div>Image*</div>
                                <div>Quantity*</div>
                                <div>Price*</div>
                                <div>Discount*</div>
                                <div>Size*</div>
                                <div>Color*</div>
                                <div>Order*</div>
                            </div>
                            <div class="grid grid-cols-7 gap-x-1 border-b px-5 py-2 items-center" v-for="(variant,i) in product.variants" :key="i">
                                <div class="w-16">
                                    <label :for="'img'+i">
                                        <div class="relative w-16 h-16 cursor-pointer border border flex justify-center items-center hover:bg-gray-200/30">
                                            <div v-if="variant.imageObjURL" class="w-16 h-16 hover-wrapper:flex">
                                                <img class="w-16 h-16 object-cover" :src="variant.imageObjURL"/>
                                                <span class="absolute inset-0 w-16 h-16 bg-gray-200/30 hidden justify-center items-center cover-wrapper">
                                                    <i class="fa-solid fa-cloud-arrow-up text-[20px]"></i>
                                                </span>
                                            </div>
                                            <i v-else class="fa-solid fa-cloud-arrow-up text-[20px]"></i>
                                        </div>
                                        <input :id="'img'+i" type="file" class="hidden" @change="getFile($event, i)"/>
                                    </label>
                                </div>
                                <!--stock quantity-->
                                <div>
                                    <input type="number" v-model="variant.quantity" min="0" class="focus:outline-yellow-500/30 py-1.5
                                    px-2 w-full border border-gray-300 text-sm" placeholder="0" required/>
                                </div>
                                <!--price-->
                                <div>
                                    <input type="number" min="0" v-model="variant.price" class="focus:outline-yellow-500/30 py-1.5
                                    px-2 w-full border border-gray-300 text-sm" placeholder="0.00" required/>
                                </div>
                                <!--discount price-->
                                <div>
                                    <input type="number" min="0" v-model="variant.discountPrice" class="focus:outline-yellow-500/30 py-1.5
                                    px-2 w-full border border-gray-300 text-sm" placeholder="0.00" required/>
                                </div>
                                <!--size-->
                                <div>
                                    <select class="focus:outline-yellow-500/30 py-1.5
                                    px-2 w-full border border-gray-300 text-sm" v-model="variant.size" required>
                                        <option class="bg-gray-200 text-gray-500" disabled>Size</option>
                                        <option v-for="(size,i) in sizes" :key="i">{{size}}</option>
                                    </select>
                                </div>
                                <!--color-->
                                <div>
                                    <input type="color" class="focus:outline-yellow-500/30 py-1.5
                                    px-2 w-full border border-gray-300 text-sm" v-model="variant.color" required/>
                                </div>
                                <!--order-->
                                <div class="flex gap-x-2">
                                    <input type="number" min="0" class="focus:outline-yellow-500/30 py-1.5
                                    px-2 w-full border border-gray-300 text-sm" placeholder="1" v-model="variant.order" required/>
                                    <button type="button" @click="removeVariant(i)" class="w-8 h-8 border active:bg-gray-300/50 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor"><path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="dashboard-button" @click="addVariant()">Add Variants</button>
                    </div>

                    <!-- part-4 -->
                    <div class="mt-4 dashboard-container">
                        <div class="font-semibold text-lg mb-4 text-gray-600">Search engine optimization</div>
                        <p class="text-sm text-gray-500">
                            Provide information that will help improve the snippet and bring your product to the top of search engines.
                        </p>
                        <div class="child:mt-4">
                            <div>
                                <label for="title" class="block text-sm font-semibold mb-1 text-gray-600">Page title</label>
                                <input type="text" id="title" class="focus:outline-yellow-500/30 py-1.5
                                px-2 w-full border border-gray-300 text-sm" v-model="product.SEO.title">
                            </div>

                            <div>
                                <label for="m-des" class="block text-sm font-semibold mb-1 text-gray-600">Meta description</label>

                                <textarea id="m-des" class="focus:outline-yellow-500/30 py-1.5
                                px-2 w-full border border-gray-300 text-sm" v-model="product.SEO.meta"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="h-min flex flex-col gap-y-6">
                    <div class="dashboard-container">
                        <div class="font-semibold text-lg mb-4 text-gray-600">Visibility</div>
                        <div class="flex items-center mb-4">
                            <input id="publish" v-model="product.visibility" type="radio" value="publish" name="publish-radio"
                                   class="w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300">
                            <label for="publish" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Publish</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="hidden" v-model="product.visibility" type="radio" value="hidden" name="publish-radio"
                                   class="w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300">
                            <label for="hidden" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hidden</label>
                        </div>
                    </div>

                    <div class="dashboard-container z-10">
                        <div class="font-semibold text-lg mb-4 text-gray-600">Categories</div>
                        <div>
                            <v-select multiple label="name" v-model="product.categories" :options="options"></v-select>
                        </div>
                    </div>

                    <div class="dashboard-container">
                        <div class="font-semibold text-lg mb-4 text-gray-600">Tags</div>
                        <div>
                            <v-select multiple v-model="product.tags" :taggable="true"></v-select>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import { VueEditor } from "vue2-editor/dist/vue2-editor.core.js";
export default {
    components: { VueEditor },
    data() {
        return {
            product: {
                name: null,
                description: null,
                shortDescription: null,
                SKU: null,
                variants: [{quantity: null, price: null, size: null, color: "#ffffff", order: null, discountPrice: null, imageObjURL: null}],
                SEO: {title: null, meta: null},
                visibility: 'publish',
                categories: [{ name: 'Vue.js', language: 'JavaScript' }, { name: 'Rails', language: 'Ruby' }],
                tags: ['JavaScript'],
            },
            options: [
                { name: 'Vue.js', language: 'JavaScript' },
                { name: 'Rails', language: 'Ruby' },
                { name: 'Sinatra', language: 'Ruby' },
                { name: 'Laravel', language: 'PHP' },
                { name: 'Phoenix', language: 'Elixir' }
            ],
            sizes: ['XS', 'SM', 'MD', 'LG', 'XL']
        }
    },
    mounted() {},
    methods: {
        addVariant() {
            this.product.variants.push({
                quantity: null,
                price: null,
                size: null,
                color: "#ffffff",
                order: null,
                discountPrice: null,
                imageObjURL: null
            });
        },
        removeVariant(index) {
            if (index != 0) this.product.variants.splice(index, 1);
        },
        createProduct() {
            console.log(this.product);
            this.$router.push('/product');
        },
        getFile(event, index) {
            if (event) {
                this.product.variants[index].image = event.target.files[0];
                this.product.variants[index].imageObjURL = URL.createObjectURL(event.target.files[0]);
            }
        }
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
