<?php

namespace app\trait;

use Yii;

trait ApiResponse
{
    private function successResponse($message = "", $data = [], $status = 200)
    {
        $result = [
            'message'   => $message,
            'data'      => $data
        ];
        // setting format, data and status code to response
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        $response->data = $result;
        $response->statusCode = $status;

        return $response;
    }

    private function errorResponse($message = "", $data = [], $status = 422)
    {
        $result = [
            'message'   => $message,
            'data'      => $data
        ];
        // setting format, data and status code to response
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        $response->data = $result;
        $response->statusCode = $status;

        return $response;
    }

    private function baseResponse($message = "", $data = [], $status)
    {
        $result = [
            'message'   => $message,
            'data'      => $data
        ];
        // setting format, data and status code to response
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        $response->data = $result;
        $response->statusCode = $status;

        return $response;
    }
}
