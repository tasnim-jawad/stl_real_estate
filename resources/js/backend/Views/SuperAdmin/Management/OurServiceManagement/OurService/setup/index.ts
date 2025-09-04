import app_config from "../../../../../../Config/app_config";
import setup_type from "./setup_type";

const prefix: string = "OurService";

const setup: setup_type = {
  prefix,
  permission: ["admin", "super_admin"],

  api_host: app_config.api_host,
  api_version: app_config.api_version,
  api_end_point: "our-services",

  module_name: "our-service",
  store_prefix: "our_service",
  route_prefix: "OurService",
  route_path: "our-service",

  select_fields: [
    "id",
    "title",
    "description",
    "url",
    "image",
    "status",
    "slug",
    "created_at",
  ],

  sort_by_cols: ["id", "title", "image", "status", "created_at"],
  table_header_data: ["id", "title", "image", "status", "created_at"],
  table_row_data: ["id", "title", "image", "status", "created_at"],

  layout_title: prefix + " Management",
  page_title: `${prefix} Management`,

  all_page_title: "All " + prefix,
  details_page_title: "Details " + prefix,
  create_page_title: "Create " + prefix,
  edit_page_title: "Edit " + prefix,
};

export default setup;
