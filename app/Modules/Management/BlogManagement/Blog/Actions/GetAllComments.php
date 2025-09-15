<?php

namespace App\Modules\Management\BlogManagement\Blog\Actions;

class GetAllComments
{
    static $model = \App\Modules\Management\BlogManagement\Blog\Models\BlogCommentsModel::class;

    public static function execute($blogId)
    {
        try {

            $pageLimit = request()->input('limit') ?? 10;
            $orderByColumn = request()->input('sort_by_col') ?? 'id';
            $orderByType = request()->input('sort_type') ?? 'desc';
            $status = request()->input('status') ?? 'active';
            $fields = request()->input('fields') ?? '*';
            $start_date = request()->input('start_date');
            $end_date = request()->input('end_date');
            $with = ['blog.blog_category'];
            $condition = [];

            $data = self::$model::query();

            if (request()->has('search') && request()->input('search')) {
                $searchKey = request()->input('search');
                $data = $data->where(function ($q) use ($searchKey) {
                    $q->where('comment', 'like', '%' . $searchKey . '%');
                    $q->orWhere('name', 'like', '%' . $searchKey . '%');
                    $q->orWhere('email', 'like', '%' . $searchKey . '%');
                    $q->orWhere('website', 'like', '%' . $searchKey . '%');
                });
            }

            if ($start_date && $end_date) {
                if ($end_date > $start_date) {
                    $data->whereBetween('created_at', [$start_date . ' 00:00:00', $end_date . ' 23:59:59']);
                } elseif ($end_date == $start_date) {
                    $data->whereDate('created_at', $start_date);
                }
            }

            if ($status == 'trased') {
                $data = $data->trased();
            }

            $data = $data->where('blog_id', $blogId);

            if (request()->has('get_all') && (int)request()->input('get_all') === 1) {
                $data = $data
                    ->with($with)
                    ->select($fields)
                    ->where($condition)
                    ->where('status', $status)
                    ->limit($pageLimit)
                    ->orderBy($orderByColumn, $orderByType)
                    ->get();
                return entityResponse([
                    "comments" => $data,
                    "total" => $data->count(),
                ]);
            } else if ($status == 'trased') {
                $data = $data
                    ->with($with)
                    ->select($fields)
                    ->where($condition)
                    ->orderBy($orderByColumn, $orderByType)
                    ->paginate($pageLimit);

                return entityResponse([
                    "comments" => $data->items(),
                    "total" => $data->total(),
                    "current_page" => $data->currentPage(),
                    "last_page" => $data->lastPage(),
                    "per_page" => $data->perPage(),
                    "active_data_count" => self::$model::active()->count(),
                    "inactive_data_count" => self::$model::inactive()->count(),
                    "trased_data_count" => self::$model::trased()->count(),
                ]);
            } else {
                $data = $data
                    ->with($with)
                    ->select($fields)
                    ->where($condition)
                    ->where('status', $status)
                    ->orderBy($orderByColumn, $orderByType)
                    ->paginate($pageLimit);
            }

            return entityResponse([
                "comments" => $data->items(),
                "total" => $data->total(),
                "current_page" => $data->currentPage(),
                "last_page" => $data->lastPage(),
                "per_page" => $data->perPage(),
                "active_data_count" => self::$model::active()->count(),
                "inactive_data_count" => self::$model::inactive()->count(),
                "trased_data_count" => self::$model::trased()->count(),
            ]);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
