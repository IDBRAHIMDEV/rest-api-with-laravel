<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'userId' => $this->id,
            'fullname' => $this->name,
            'profile' => $this->profile->label,
            'actesDeGestion' => $this->actes,
            'lastActivity' => $this->updated_at->diffForHumans()
        ];
    }
}
