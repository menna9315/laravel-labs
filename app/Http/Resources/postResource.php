<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class postResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Title' => $this->title,
            'Describtion' => $this->desc,
            'userId' => $this->user_id,
            'usrer'=> new UserResource($this->user),
        ];
    }
}
