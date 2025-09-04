
import app_config from "../../../../../../Config/app_config";
import setup_type from "./setup_type";

const prefix: string = "WarehouseProductOut";

const setup: setup_type = {
    prefix,
    permission: ["admin", "super_admin"],

    api_host: app_config.api_host,
    api_version: app_config.api_version,
    api_end_point: "warehouse-product-outs",

    module_name: "warehouse-product-out",
    store_prefix: "warehouse_product_out",
    route_prefix: "WarehouseProductOut",
    route_path: "warehouse-product-out",

    select_fields: [
        "id",
        "warehouse_id",
            "purchase_order_id",
            "date",
        "status",
        "slug",
        "created_at",
        "deleted_at",
    ],

    sort_by_cols: [
        "id",
        "warehouse_id",
            "purchase_order_id",
            "date",
        "status",
        "created_at",
    ],
    table_header_data: [
        "id",
        "warehouse_id",
            "purchase_order_id",
            "date",
        "status",
        "created_at",
    ],
    table_row_data: [
        "id",
        "warehouse_id",
            "purchase_order_id",
            "date",
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
