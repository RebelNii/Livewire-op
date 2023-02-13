<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    /**
     * @var \Livewire\TemporaryUploadedFile
     */

    public $image = [];

    public function save(){
        $this->validate([
            'image.*' => 'max:1024'
        ]);

        foreach($this->image as $img){
            $img->store('public');
        }
    }
     
    public function render()
    {
        return view('livewire.image-upload', [
            'images' => collect(Storage::files('public'))
                ->filter(function($file){
                    return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)),  ['png', 'jpeg', 'webp', 'jpg']);
                })
                ->map(fn($file) => Storage::url($file))
            ]);
    }
}
