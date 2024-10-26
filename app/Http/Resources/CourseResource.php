<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
          'name' => $this->name,
          'location'  => $this->location,
          'start_at' => $this->start_at,
          'end_at' => $this->end_at,
          'degree_obtalned' => $this->degree_obtalned
        ];
    }
}
