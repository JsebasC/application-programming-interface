<?php

namespace App\Http\Resources\V1;

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
        //return parent::toArray($request);
        return [
            'title' =>$this->title,
            'slug'=> $this->slug,
            'exceprt' => $this->excerpt,
            'content'=>$this->content,
        ];
    }
}
