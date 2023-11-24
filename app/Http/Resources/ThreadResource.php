<?php

namespace App\Http\Resources;

class ThreadResource extends BaseResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'author' => UserResource::make($this->author),
            'title' => $this->title,
            'body' => $this->body,
        ];
    }
}
