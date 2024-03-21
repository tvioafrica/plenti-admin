<template>
    <LoadingComponent :props="loading" />
    <SmSidebarModalCreateComponent :props="addButton" />

    <div id="sidebar" class="drawer">
        <div class="drawer-header">
            <h3 class="drawer-title">{{ $t('menu.email_sms') }}</h3>
            <button @click="reset" class="fa-solid fa-xmark close-btn"></button>
        </div>
        <div class="drawer-body">
            <form @submit.prevent="save">
                <div class="row">

                    <div class="col-12">
                        <label for="title" class="db-field-title required">{{ $t("label.title") }}</label>
                        <input v-model="form.title" v-bind:class="errors.title ? 'invalid' : ''" type="text" id="title"
                            class="db-field-control">
                        <small class="db-field-alert" v-if="errors.title">{{ errors.title[0] }}</small>
                    </div>

                   <div class="col-12 sm:col-12">

                        <div class="db-field-radio-group">

                            <div class="db-field-radio">
                                <div class="custom-radio">
                                    <input value="1" v-model="form.type_of" id="sms" type="radio" class="custom-radio-field">
                                    <span class="custom-radio-span"></span>
                                </div>
                                <label for="sms" class="db-field-label"> SMS </label>
                            </div>

                            <div class="db-field-radio">
                                <div class="custom-radio">
                                    <input value="2" v-model="form.type_of" type="radio" id="email" class="custom-radio-field">
                                    <span class="custom-radio-span"></span>
                                </div>
                                <label for="email" class="db-field-label">E-Mail</label>
                            </div>

                        </div>

                        <small class="db-field-alert" v-if="errors.type_of">
                            {{ errors.type_of[0] }}
                        </small>
                    </div>

                    <div class="col-12">
                        <label for="description" class="db-field-title required">
                            {{ $t("label.description") }}
                        </label>
                        <textarea v-model="form.content" v-bind:class="errors.content ? 'invalid' : ''"
                            id="content" class="db-field-control"></textarea>
                        <small class="db-field-alert" v-if="errors.content">{{ errors.content[0] }}</small>
                    </div>

                    <div class="col-12">
                        <div class="flex flex-wrap gap-3 mt-4">
                            <button type="submit" class="db-btn py-2 text-white bg-primary">
                                <i class="lab lab-save"></i>
                                <span>{{ $t("label.save") }}</span>
                            </button>
                            <button type="button" class="modal-btn-outline modal-close" @click="reset">
                                <i class="lab lab-close"></i>
                                <span>{{ $t("button.close") }}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
import SmSidebarModalCreateComponent from "../components/buttons/SmSidebarModalCreateComponent";
import LoadingComponent from "../components/LoadingComponent";
import statusEnum from "../../../enums/modules/statusEnum";
import roleEnum from "../../../enums/modules/roleEnum";
import alertService from "../../../services/alertService";
import appService from "../../../services/appService";

export default {
    name: "emailNSmsNotificationCreateComponent",
    components: {
        SmSidebarModalCreateComponent,
        LoadingComponent
    },
    props: ['props'],
    data() {
        return {
            loading: {
                isActive: false
            },
            addButton: {
                title: this.$t("button.add_email_notification")
            },
            form: {
                title: "",
                content: "",
                type_of: ""
            },
            errors: {},
        }
    },
    computed: {
        typeoflist: function () {
           return [{ id: 1, name: "SMS"}, {id: 2, name: "E-Mail"}];
        }
    },
    methods: {
        reset: function () {
            appService.sideDrawerHide();
            this.$store.dispatch('emailSmsNotification/reset').then().catch();
            this.errors = {};
            this.form = {
                title: "",
                content: "",
                type_of: ""
            };
        },
        selectUser: function (e) {
            this.$store.dispatch('user/lists', {
                order_column: 'id',
                order_type: 'asc',
                status: statusEnum.ACTIVE,
                role_id: this.form.role_id,
                branch_id: null,
            });
        },
        save: function () {
            try {
                const fd = new FormData();
                fd.append('title', this.form.title);
                fd.append('type_of', this.form.type_of);
                fd.append('content', this.form.content);

                const tempId = this.$store.getters['emailSmsNotification/temp'].temp_id;
                this.loading.isActive = true;
                this.$store.dispatch('emailSmsNotification/save', {
                    form: fd,
                    search: this.props.search
                }).then((res) => {
                    appService.sideDrawerHide();
                    this.loading.isActive = false;
                    alertService.successFlip((tempId === null ? 0 : 1), this.$t('label.email_sms'));
                    this.form = {
                        title: "",
                        content: "",
                        type_of: ""
                    }                   
                    this.errors = {};                   
                }).catch((err) => {
                    this.loading.isActive = false;
                    this.errors = err.response.data.errors;
                })
            } catch (err) {
                this.loading.isActive = false;
                alertService.error(err)
            }
        }
    },
}

</script>
