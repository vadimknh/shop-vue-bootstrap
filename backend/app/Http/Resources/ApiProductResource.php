<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApiProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
             'id' => $this->id,
             'title' => $this->title,
             'description' => $this->description,
             'content' => $this->content,
             'preview_image_url' => $this->imageUrl,
             'quantity' => $this->quantity,
             'price' => $this->price,
             'category' => new ApiCategoryResource($this->category),
        ];
    }
}
