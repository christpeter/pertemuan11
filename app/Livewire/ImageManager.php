<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageManager extends Component
{
    use WithFileUploads;

    public $selectedImage;
    public $image;

    public function render()
    {
        return view('livewire.image-manager', [
            'images' => Image::all(),
        ]);
    }

    public function selectImage($id)
    {
        $this->selectedImage = Image::find($id);
    }

    public function updateImage()
    {
        $this->validate([
            'image' => 'image|max:1024', 
        ]);

        if ($this->selectedImage && $this->image) {
            Storage::disk('public')->delete($this->selectedImage->image_path);

            $path = $this->image->store('images', 'public');
            $this->selectedImage->update(['image_path' => $path]);

            $this->reset(['image', 'selectedImage']);
        }
    }

    public function deleteImage($id)
    {
        $image = Image::find($id);

        if ($image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }
    }
}
