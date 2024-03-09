<template>
    <LoadingComponent :props="loading" />
    
    <section v-if="concluded === true" class="pt-8 pb-16">
        <div class="row mb-7">
            <div class="col-12 sm:col-12 mb-2"> 
                <div class="flex items-center gap-2 mb-3">
                    <h3 class="font-semibold leading-4 text-[10px]"> Your account has now been verified! You can now login! </h3>
                </div>    
            </div>
        </div>
    </section>

    <section v-if="concluded === false" class="pt-8 pb-16">
        <div class="container max-w-[600px] py-8 p-4 sm:px-8 shadow-xs rounded-2xl bg-white">
            <h2 class="capitalize mb-6 text-center text-[22px] font-semibold leading-[34px] text-heading">
                {{ $t('label.create_account') }}
            </h2>
            <form @submit.prevent="save">
                <div class="row">
                    <div class="col-12 sm:col-12">

                        <div class="db-field-radio-group">

                            <div class="db-field-radio">
                                <div class="custom-radio">
                                    <input value="merchant" v-model="props.form.type" id="merchant" type="radio" class="custom-radio-field">
                                    <span class="custom-radio-span"></span>
                                </div>
                                <label for="merchant" class="db-field-label"> Merchant </label>
                            </div>

                            <div class="db-field-radio">
                                <div class="custom-radio">
                                    <input value="advertiser" v-model="props.form.type" type="radio" id="advertiser" class="custom-radio-field">
                                    <span class="custom-radio-span"></span>
                                </div>
                                <label for="advertiser" class="db-field-label">Advertiser</label>
                            </div>

                        </div>

                        <small class="db-field-alert" v-if="errors.type">
                            {{ errors.type[0] }}
                        </small>
                    </div>
                    <div class="col-12 sm:col-6">
                        <label class="text-sm capitalize mb-1 text-heading">{{ $t('label.first_name') }}</label>
                        <input type="text" v-model="props.form.first_name"
                            class="w-full h-12 rounded-lg border px-4 border-[#D9DBE9]">
                        <small class="db-field-alert" v-if="errors.first_name">
                            {{ errors.first_name[0] }}
                        </small>
                    </div>
                    <div class="col-12 sm:col-6">
                        <label class="text-sm capitalize mb-1 text-heading">{{ $t('label.last_name') }}</label>
                        <input type="text" v-model="props.form.last_name"
                            class="w-full h-12 rounded-lg border px-4 border-[#D9DBE9]">
                        <small class="db-field-alert" v-if="errors.last_name">
                            {{ errors.last_name[0] }}
                        </small>
                    </div>
                    <div class="col-12 sm:col-6">
                        <label class="text-sm capitalize mb-1 text-heading">{{ $t('label.email') }}</label>
                        <input type="email" v-model="props.form.email"
                            class="w-full h-12 rounded-lg border px-4 border-[#D9DBE9]">
                        <small class="db-field-alert" v-if="errors.email">
                            {{ errors.email[0] }}
                        </small>
                    </div>
                    <div class="col-12 sm:col-6">
                        <label class="text-sm capitalize mb-1 text-heading">{{ $t('label.phone') }}</label>
                        <input type="text" v-model="props.form.phone"
                            class="w-full h-12 rounded-lg border px-4 border-[#D9DBE9]">
                        <small class="db-field-alert" v-if="errors.phone">
                            {{ errors.phone[0] }}
                        </small>
                    </div>
                    <div class="col-12 sm:col-6">
                        <label class="text-sm capitalize mb-1 text-heading">{{ $t('label.country') }}</label>
                        <select v-model="props.form.country" class="w-full h-12 rounded-lg border px-4 border-[#D9DBE9]">
                                <option value="" disabled selected hidden>{{ $t('label.select_country_of_residence') }}</option>
                                <option v-for="country in countries" :value="country.id">
                                    {{ country.name }}
                                </option>
                        </select>
                        <small class="db-field-alert" v-if="errors.email">
                            {{ errors.country[0] }}
                        </small>
                    </div>
                    <div class="col-12 sm:col-6">
                        <label class="text-sm capitalize mb-1 text-heading">{{ $t('label.password') }}</label>
                        <input type="password" v-model="props.form.password"
                            class="w-full h-12 rounded-lg border px-4 border-[#D9DBE9]">
                        <small class="db-field-alert" v-if="errors.password">
                            {{ errors.password[0] }}
                        </small>
                    </div>
                    <div class="col-12">
                        <button type="submit"
                            class="w-full h-12 text-center capitalize font-medium rounded-3xl text-white bg-primary">
                            {{ $t('button.sign_up') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</template>

<script>


import LoadingComponent from "../components/LoadingComponent";
import alertService from "../../../services/alertService";

export default {
    name: "RegisterMerchantComponent",
    components: { LoadingComponent },
    data() {
        return {
            loading: {
                isActive: false,
            },
            concluded: false,
            countries: [{ id: "NGN", name: "Nigeria" }],
            props: {
                form: {
                    first_name: "",
                    last_name: "",
                    email: "",
                    password: "",
                    phone: "",
                    country: "",
                    type: "null"
                },
            },
            errors: {},
        };
    },
    computed: {
    },
    mounted() {
       this.verify();
    },
    methods: {
        save: function () {
            try {
                if (this.props.form.type === "null"){
                    alertService.warning("Please pick between a Merchant or An Advertiser in the option within the Form");
                    return;
                }
                if (this.props.form.type === "merchant"){
                    this.loading.isActive = true;
                    this.$store.dispatch("frontendSignupMerchant/signup", this.props.form).then((res) => {
                        this.errors = {};
                        alertService.success(res.data.message, 'bottom-center');
                        this.loading.isActive = false;
                        this.props.form = {
                            first_name: "",
                            last_name: "",
                            email: "",
                            password: "",
                            phone: "",
                            type: "null"
                        };
                    }).catch((err) => {
                        this.loading.isActive = false;
                        this.errors = err.response.data.errors;
                        alertService.error(err.response.data.message);
                    });
                }//
                else if (this.props.form.type === "advertiser") {
                    this.loading.isActive = true;
                    this.$store.dispatch("frontendSignupAdvertiser/signup", this.props.form).then((res) => {
                        this.errors = {};
                        alertService.success(res.data.message, 'bottom-center');
                        this.loading.isActive = false;
                        this.props.form = {
                            first_name: "",
                            last_name: "",
                            email: "",
                            password: "",
                            phone: "",
                            type: "null"
                        };
                    }).catch((err) => {
                        this.loading.isActive = false;
                        this.errors = err.response.data.errors;
                        alertService.error(err.response.data.message);
                    });
                }
            } catch (err) {
                this.loading.isActive = false;
                alertService.error(err);
            }
        },
        verify: function () {
            if (typeof this.$route.query.token !== "undefined" && this.$route.query.token !== "" ) {
                try {
                    this.loading.isActive = true;
                    let token = this.$route.query.token;
                    this.$store.dispatch("frontendSignupMerchant/verify", { code: token }).then((res) => {
                        this.errors = {};
                        this.loading.isActive = false;
                        alertService.success(res.data.message, 'bottom-center');
                        this.concluded = true;
                        //this.$router.push({name: "auth.login"});
                    }).catch((err) => {
                        this.loading.isActive = false;
                        alertService.error(err.response.data.message);
                    });
                } catch (err) {
                    this.loading.isActive = false;
                    alertService.error(err);
                }
            }
        }
    },
    watch: {
        $route() {
            this.verify();
        }
    }
}

</script>
