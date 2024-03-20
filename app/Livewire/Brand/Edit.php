<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

class Edit extends Component
{
    use WithFileUploads;

    public $brand, $app_name, $logo, $footer_links;

    public function mount(Brand $brand)
    {
        $this->app_name = $brand->app_name;
        $this->footer_links = $brand->footer_links;
    }

    public function save()
    {
        $validatedData = $this->validate([
            'app_name' => ['required', 'string'],
            'footer_links' => ['string', 'nullable'],
            'logo' => ['file', 'mimes:jpg,png,jpeg', 'nullable'],
        ]);

        if ($this->logo) {
            $validatedData['logo'] = $this->logo->store('documents', 'public');
        }
        $this->brand->update($validatedData);

        session()->flash('success', 'Settings updated successfully.');
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.brand.edit');
    }
}
