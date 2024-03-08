<template>
    <div v-if="templateId === 1">
        <ContactUsComponent />
    </div>
    <div v-if="templateId === 2">
        <RegisterMerchantComponent />
    </div>
</template>

<script>

import ContactUsComponent from "../page/ContactUsComponent";
import RegisterMerchantComponent from "../page/RegisterMerchantComponent";
export default {
    name: "TemplateManagerComponent",
    props: ["templateId"],
    components: { ContactUsComponent, RegisterMerchantComponent },
    data() {
        return {

        }
    },
    mounted() {
    },
    methods: {
    },
    watch: {
    }
}
</script>
