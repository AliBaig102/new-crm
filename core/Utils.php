<?php

trait Utils
{
    public function response(string $status,string $message, $data=null): array
    {
        return [
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];
    }
}