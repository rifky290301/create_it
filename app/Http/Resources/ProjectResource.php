<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'id' => $this->id,
            'nama' => $this->nama,
            'slug' => $this->slug,
            'instansi' => $this->instansi,
            'email' => $this->email,
            'nomor_wa' => $this->nomor_wa,
            'jenis_proyek_id' => $this->jenis_proyek_id,
            'jenis_proyek' => $this->jenisProyek->nama_proyek,
            'tujuan_pembuatan' => $this->tujuan_pembuatan,
            'deskripsi' => $this->deskripsi,
            'deadline' => $this->deadline,
            'desain' => $this->desain,
            'catatan' => $this->catatan,
            'pertanyaan' => $this->pertanyaan,
            'published' => $this->created_at->format('d F, Y'),

            'link' => route('projects.show', [$this->slug]),
        ];
    }
}
