<template>
    <div   style="margin-top: 60px;border-radius: 30px; width: 40%; margin-left: 40px; box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 12px 0px; float: left; display: inline-block;
">
        <div  style="    padding: 30px 40px;
">
            <div >

                <el-form
                    label-width="100px"
                    style="max-width: 460px; "

                >
                    <el-form-item label="Name">
                        <el-input v-model="form.name" placeholder="Name"/>
                    </el-form-item>
                    <el-form-item label="Bedrooms">
                        <el-input-number v-model="form.bedrooms" size="max"  controls-position="right"  placeholder="Bedrooms" :min="1" ></el-input-number>
                    </el-form-item>
                    <el-form-item label="Bathrooms">
                        <el-input-number v-model="form.bathrooms" size="max"  controls-position="right"  placeholder="Bathrooms" :min="1" ></el-input-number>
                    </el-form-item>
                    <el-form-item label="Storeys">
                        <el-input-number v-model="form.storeys"  controls-position="right" placeholder="Storeys" :min="1" ></el-input-number>
                    </el-form-item>
                    <el-form-item label="Garages">
                        <el-input-number v-model="form.garages"   controls-position="right" placeholder="Garages" :min="1" ></el-input-number>
                    </el-form-item>
                    <el-form-item label="Price">
                        <el-input-number v-model="form.price.min" placeholder="MIN" size="mini" :step="500"  :min="0" :max="form.price.max"></el-input-number>
                        <el-input-number style="margin-left: 20px" v-model="form.price.max" placeholder="MAX" size="mini" :step="500"  :min="form.price.min" ></el-input-number>
                    </el-form-item>
                    <el-form-item style="float: right;">
                        <el-button  type="success" @click="submit" round>Search</el-button>
                    </el-form-item>

                </el-form >
            </div>
        </div>
    </div>
    <div v-if="data" >

    <div   style=" display: inline-block; width: 45%; margin-top: 60px;border-radius: 30px; padding: 30px;  margin-right: 40px; box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 12px 0px; float: right;
">
            <el-table
                v-loading="loading"
                v-if="data"
                      :data="data"
                      height="350"
                      style="width: 100%">
                <el-table-column
                    prop="name"
                    label="Name"
                    width="180">
                </el-table-column>
                <el-table-column
                    prop="price"
                    label="Price"
                    width="180">
                </el-table-column>
                <el-table-column
                    prop="bedrooms"
                    label="Bedrooms">
                </el-table-column>
                <el-table-column
                    prop="bathrooms"
                    label="Bathrooms">
                </el-table-column>
                <el-table-column
                    prop="storeys"
                    label="Storeys">
                </el-table-column>
                <el-table-column
                    prop="garages"
                    label="Garages">
                </el-table-column>
            </el-table>
        </div>
    </div>
</template>

<script>


import route from "ziggy-js/src/js";

export default {
    name: "FormComponent",
    data() {
        return {
            data:null,
            loading:true,
            form:{
                name:null,
                bedrooms: null,
                price:{
                    min: null,
                    max: null,
                },
                bathrooms: null,
                storeys: null,
                garages: null
            }
        };
    },
    methods:{
        submit(){
            axios.post(route('apartment.search'), this.form).then(async (response) => {
                this.loading = true;
                this.data = response.data;
                await new Promise(resolve => setTimeout(resolve, 1000));
                this.loading =false;

            })
        }
    }
};
</script>
