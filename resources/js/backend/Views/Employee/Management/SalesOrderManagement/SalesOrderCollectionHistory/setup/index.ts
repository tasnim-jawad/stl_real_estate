
import app_config from "../../../../../../Config/app_config";
import setup_type from "./setup_type";

const prefix: string = "SalesOrderCollectionHistory";

const setup: setup_type = {
    prefix,
    permission: ["admin", "super_admin"],

    api_host: app_config.api_host,
    api_version: app_config.api_version,
    api_end_point: "sales-order-collection-histories",

    module_name: "sales-order-collection-history",
    store_prefix: "sales_order_collection_history",
    route_prefix: "SalesOrderCollectionHistory",
    route_path: "sales-order-collection-history",

    select_fields: [
        "id",
        "sales_order_id",
            "amount",
        "status",
        "slug",
        "created_at",
        "deleted_at",
    ],

    sort_by_cols: [
        "id",
        "sales_order_id",
            "amount",
        "status",
        "created_at",
    ],
    table_header_data: [
        "id",
        "sales_order_id",
            "amount",
        "status",
        "created_at",
    ],
    table_row_data: [
        "id",
        "sales_order_id",
            "amount",
        "status",
        "created_at",
    ],

    layout_title: prefix + " Management",
    page_title: `${prefix} Management`,

    all_page_title: "All " + prefix,
    details_page_title: "Details " + prefix,
    create_page_title: "Create " + prefix,
    edit_page_title: "Edit " + prefix,
};

export default setup;
