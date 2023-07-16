<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
          'id'=>$this->id,
            'category_name'=>$this->category_name,
            'slug'=>$this->slug,
            'subcategory_count'=>$this->subcategory_count,
            'product_count'=>$this->product_count,
            'created_at'=>$this->created_at->toDayDateTimeString(),

        ];
    }
}
