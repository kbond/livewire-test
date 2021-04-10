<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;

class MarkdownInput extends Component
{
    public string $name;
    public string $value = '';

    public function render()
    {
        return view('livewire.markdown-input');
    }

    public function getMarkdownProperty()
    {
        return Str::markdown($this->value);
    }
}
