import AdvertisersComponent from "../../components/admin/advertisers/AdvertisersComponent";
import AdvertisersListComponent from "../../components/admin/advertisers/AdvertisersListComponent";
import AdvertisersShowComponent from "../../components/admin/advertisers/AdvertisersShowComponent";
import AdvertisersOrderDetailsComponent from "../../components/admin/advertisers/AdvertisersOrderDetailsComponent";
import DeliveredOrderShowComponent from "../../components/admin/advertisers/deliveredOrder/DeliveredOrderShowComponent";

export default [
    {
        path: "/admin/advertisers",
        component: AdvertisersComponent,
        name: "admin.advertisers",
        redirect: { name: "admin.advertisers.list" },
        meta: {
            isFrontend: false,
            auth: true,
            permissionUrl: "advertisers",
            breadcrumb: "advertisers",
        },
        children: [
            {
                path: "",
                component: AdvertisersListComponent,
                name: "admin.advertisers.list",
                meta: {
                    isFrontend: false,
                    auth: true,
                    permissionUrl: "advertisers",
                    breadcrumb: "",
                },
            },
            {
                path: "show/:id",
                component: AdvertisersShowComponent,
                name: "admin.advertisers.show",
                meta: {
                    isFrontend: false,
                    auth: true,
                    permissionUrl: "advertisers",
                    breadcrumb: "view",
                },
            },
            {
                path: "show/:id/:orderId",
                component: AdvertisersOrderDetailsComponent,
                name: "admin.advertisers.order.details",
                meta: {
                    isFrontend: false,
                    auth: true,
                    permissionUrl: "advertisers",
                    breadcrumb: "order_details",
                },
            },
            {
                path: "delivered-order/show/:id/:orderId",
                component: DeliveredOrderShowComponent,
                name: "admin.advertisers.delivered-order.details",
                meta: {
                    isFrontend: false,
                    auth: true,
                    permissionUrl: "advertisers",
                    breadcrumb: "delivered_order_details",
                },
            },
        ],
    },
];
