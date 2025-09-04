<?php

namespace App\Modules\Management\AtAGlanceManagement\AtAGlance\Actions;

class UpdateData
{
    static $model = \App\Modules\Management\AtAGlanceManagement\AtAGlance\Models\Model::class;

    public static function execute($request,$slug)
    {
        try {
            if (!$data = self::$model::query()->where('slug', $slug)->first()) {
                return messageResponse('Data not found...',$data, 404, 'error');
            }
            $requestData = $request->validated();
            
            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $currentDate = now()->format('Y/m');
                $requestData['icon'] = uploader($icon, 'uploads/at_a_glance/' . $currentDate);
            }

            $data->update($requestData);
            return messageResponse('Item updated successfully',$data, 201);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}