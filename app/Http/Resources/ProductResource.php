<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            "id"=>$this->id,
            "product name"=>$this->name,
            "product price"=>$this->price,
            "product brand"=>$this->brand,
            "category id"=>$this->category,
            "owner"=>$this->creator_id,
            // "category name"=>$this->category->name ? $this->category->name: null,

            // "category resource"=> new CategoryResource($this->category),
        ];
    }
}

