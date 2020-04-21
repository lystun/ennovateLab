<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'photo' => $this->photo,
            'user' => $this->user,
            'article' => $this->article,
            'category' => $this->category->name,
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
