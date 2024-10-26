<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LanguageResource extends JsonResource
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
            'read' => 
            ($this->read == 1) ? "جيد" :
            (($this->read == 2) ? "جيد جدا" : 
            (($this->read == 3) ? "ممتاز" : ""))
            ,
            'write' => 
            ($this->write == 1) ? "جيد" :
            (($this->write == 2) ? "جيد جدا" : 
            (($this->write == 3) ? "ممتاز" : ""))
            ,
            
            'speak' =>
            ($this->speak == 1) ? "جيد" :
            (($this->speak == 2) ? "جيد جدا" : 
            (($this->speak == 3) ? "ممتاز" : ""))
            ,
            'understand' => 
            ($this->understand == 1) ? "جيد" :
            (($this->understand == 2) ? "جيد جدا" : 
            (($this->understand == 3) ? "ممتاز" : ""))
            ,
            
        ];
    }
}
