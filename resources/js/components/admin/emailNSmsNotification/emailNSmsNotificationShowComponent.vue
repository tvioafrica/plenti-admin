<template>
    <LoadingComponent :props="loading" />
    <div class="db-card">
        <div class="db-card-header">
            <h3 class="db-card-title">{{ $t('menu.email_sms') }}</h3>
        </div>
        <div class="db-card-body">
            <div class="row">               
                <div class="col-12 sm:col-7">
                    <h3 class="text-lg font-medium capitalize mb-2 text-paragraph">{{ emailSmsNotification.title }}</h3>
                    <label class="db-badge mb-3 db-table-badge text-green-600 bg-green-100">
                        {{ emailSmsNotification.type_of }}
                    </label>
                    <p class="db-light-text">
                        {{ emailSmsNotification.content }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import LoadingComponent from "../components/LoadingComponent";
import statusEnum from "../../../enums/modules/statusEnum";
import alertService from "../../../services/alertService";
import appService from "../../../services/appService";
import notificationTypeEnum from "../../../enums/modules/notificationTypeEnum";

export default {
    name: "emailNSmsNotificationShowComponent",
    components: {
        LoadingComponent
    },
    data() {
        return {
            loading: {
                isActive: false
            },
        }
    },
    computed: {
        emailSmsNotification: function () {
            return this.$store.getters['emailSmsNotification/show'];
        }
    },
    mounted() {
        this.loading.isActive = true;
        this.$store.dispatch('emailSmsNotification/show', this.$route.params.id).then(res => {
            this.loading.isActive = false;
        }).catch((error) => {
            this.loading.isActive = false;
        });
    },
    methods: {
        statusClass: function (status) {
            return appService.statusClass(status);
        }
    }
}

</script>
