<template>
    <section class="pt-16 pb-12 flex flex-col items-center justify-center text-center">
        <img class="mb-8 w-full max-w-[220px]" :src="setting.image_success_registration" alt="success">
        <h3 v-if=" this.$route.query.type === 'registration' " class="capitalize text-[26px] font-medium leading-[40px] mb-2">{{ $t('message.success_reg_page') }}</h3>
        <h3 v-if=" this.$route.query.type === 'verify' " class="capitalize text-[26px] font-medium leading-[40px] mb-2">{{ $t('message.success_ver_page') }}</h3>
        <p v-if=" this.$route.query.type === 'registration' " class="text-lg font-normal leading-[34px] mb-8">{{ $t('message.success_description_one') }}</p>
        <p v-if=" this.$route.query.type === 'verify' " class="text-lg font-normal leading-[34px] mb-8">{{ $t('message.success_description_two') }}</p>
        <router-link v-if=" this.$route.query.type === 'verify' " :to="{name : 'auth.login'}"
                     class="w-full max-w-[250px] py-3 rounded-3xl capitalize text-base font-medium leading-6 text-center bg-primary text-white">
            Login Now
        </router-link>
        <router-link v-if=" this.$route.query.type === 'registration' " :to="{name : 'frontend.home'}"
                     class="w-full max-w-[250px] py-3 rounded-3xl capitalize text-base font-medium leading-6 text-center bg-primary text-white">
            Go Back to Home
        </router-link>
    </section>
</template>

<script>
export default {
    name: "SuccessRegComponent",
    computed: {
        setting: function () {
            return this.$store.getters['frontendSetting/lists'];
        }
    }
}
</script>
