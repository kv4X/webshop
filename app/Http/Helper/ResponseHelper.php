<?php
namespace App\Http\Helper;


class ResponseHelper
{
    public static function success($data, $status = 200)
    {
        return response()->json([
            'success' => true,
            'data' => $data
        ], $status);
    }

    public static function notFound($status = 404)
    {
        return response()->json([
            'error' => array('message' => 'Item could not be found.', 'status_code' => $status)
        ], $status);
    }

    public static function onDelete($status = 204)
    {
        return response()->json([
            'error' => array('message' => 'Record deleted.', 'status_code' => $status)
        ], $status);
    }
}
