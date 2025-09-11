
import app_config from "../../../../../../Config/app_config";
import setup_type from "./setup_type";

const prefix: string = "WhyChooseU";

const setup: setup_type = {
    prefix,
    permission: ["admin", "super_admin"],

    api_host: app_config.api_host,
    api_version: app_config.api_version,
    api_end_point: "why-choose-uses",

    module_name: "why-choose-u",
    store_prefix: "why_choose_u",
    route_prefix: "WhyChooseUs",
    route_path: "why-choose-us",

    select_fields: [
        "id",
        "title",
            "description",
            "image",
        "status",
        "slug",
        "created_at",
        "deleted_at",
    ],

    sort_by_cols: [
        "id",
        "title",
            "description",
            "image",
        "status",
        "created_at",
    ],
    table_header_data: [
        "id",
        "title",
            "description",
            "image",
        "status",
        "created_at",
    ],
    table_row_data: [
        "id",
        "title",
            "description",
            "image",
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
