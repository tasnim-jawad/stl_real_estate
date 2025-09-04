import app_config from "../../../../../../Config/app_config";
import setup_type from "./setup_type";

const prefix: string = "VideoGallery";

const setup: setup_type = {
  prefix,
  permission: ["admin", "super_admin"],

  api_host: app_config.api_host,
  api_version: app_config.api_version,
  api_end_point: "video-galleries",

  module_name: "video-gallery",
  store_prefix: "video_gallery",
  route_prefix: "VideoGallery",
  route_path: "video-gallery",

  select_fields: ["id", "title", "video", "status", "slug", "created_at"],

  sort_by_cols: ["id", "title", "video", "status", "created_at"],
  table_header_data: ["id", "title", "video", "status", "created_at"],
  table_row_data: ["id", "title", "video", "status", "created_at"],

  layout_title: prefix + " Management",
  page_title: `${prefix} Management`,

  all_page_title: "All " + prefix,
  details_page_title: "Details " + prefix,
  create_page_title: "Create " + prefix,
  edit_page_title: "Edit " + prefix,
};

export default setup;
