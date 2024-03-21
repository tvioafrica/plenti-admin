import emailNSmsNotificationComponent from "../../components/admin/emailNSmsNotification/emailNSmsNotificationComponent";
import emailNSmsNotificationListComponent from "../../components/admin/emailNSmsNotification/emailNSmsNotificationListComponent";
import emailNSmsNotificationShowComponent from "../../components/admin/emailNSmsNotification/emailNSmsNotificationShowComponent";

export default [
    {
        path: '/admin/email_sms',
        component: emailNSmsNotificationComponent,
        name: 'admin.email-sms-notification',
        redirect: {name: 'admin.email-sms-notification'},
        meta: {
            isFrontend: false,
            auth: true,
            permissionUrl: 'email_sms',
            breadcrumb: 'email_sms'
        },
        children: [
            {
                path: '',
                component: emailNSmsNotificationListComponent,
                name: 'admin.email-sms-notification',
                meta: {
                    isFrontend: false,
                    auth: true,
                    permissionUrl: 'email_sms',
                    breadcrumb: ''
                },
            },
            {
                path: "show/:id",
                component: emailNSmsNotificationShowComponent,
                name: "admin.email-sms-notification.show",
                meta: {
                    isFrontend: false,
                    auth: true,
                    permissionUrl: "email_sms",
                    breadcrumb: "view",
                },
            },
        ]
    }
]
