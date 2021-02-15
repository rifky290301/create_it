<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // colom inilah yang akan di keluarkan atau di return
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            // karena 1 subject bisa banyak note
            'subject' => $this->subject->name,
            'subjectId' => $this->subject->id,
            'description' => $this->description,
            'published' => $this->created_at->format('d F, Y'),
            // 2  hours ago
            // 'published' => $this->created_at->difForHumans()
            // link untuk show controller
            'link' => route('notes.show', [$this->slug]),
        ];
    }
}
