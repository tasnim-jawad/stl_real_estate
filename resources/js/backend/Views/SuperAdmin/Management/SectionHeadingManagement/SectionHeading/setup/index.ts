
import app_config from "../../../../../../Config/app_config";
import setup_type from "./setup_type";

const prefix: string = "SectionHeading";

const setup: setup_type = {
    prefix,
    permission: ["admin", "super_admin"],

    api_host: app_config.api_host,
    api_version: app_config.api_version,
    api_end_point: "section-headings",

    module_name: "section-heading",
    store_prefix: "section_heading",
    route_prefix: "SectionHeading",
    route_path: "section-heading",

    select_fields: [
        "id",
        "section_type",
            "short_title",
            "title",
            "long_title",
            "short_description",
            "description",
            "video_url",
            "primary_image",
            "background_image",
            "side_image",
            "image",
            "special_note",
        "status",
        "slug",
        "created_at",
        "deleted_at",
    ],

    sort_by_cols: [
        "id",
        "section_type",
            "short_title",
            "title",
            "long_title",
            "short_description",
            "description",
            "video_url",
            "primary_image",
            "background_image",
            "side_image",
            "image",
            "special_note",
        "status",
        "created_at",
    ],
    table_header_data: [
        "id",
        "section_type",
            "short_title",
            "title",
            "long_title",
            "short_description",
            "description",
            "video_url",
            "primary_image",
            "background_image",
            "side_image",
            "image",
            "special_note",
        "status",
        "created_at",
    ],
    table_row_data: [
        "id",
        "section_type",
            "short_title",
            "title",
            "long_title",
            "short_description",
            "description",
            "video_url",
            "primary_image",
            "background_image",
            "side_image",
            "image",
            "special_note",
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
