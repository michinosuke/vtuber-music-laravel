<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use \App\Http\Resources\VideoCollection as VideoResource;
use \App\Models\Artist as ArtistModel;
use \App\Models\Video;

class Artist extends JsonResource
{
    public $preserveKeys = true;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'data' => [
                'videos' => Artist::find($this->id)->songVideo(),
                'music' => Artist::find($this->id)->songMusic()
            ]
        ];
    }
}
