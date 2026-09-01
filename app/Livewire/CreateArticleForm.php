<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateArticleForm extends Component
{
    #[Validate('required|min:5')]
    public $title;

    #[Validate('required|min:10')]
    public $description;

    #[Validate('required|numeric|min:0')]
    public $price;

    #[Validate('required')]
    public $category;

    public function store()
    {
        $this->validate();

        Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id(),
        ]);

        $this->reset();

        session()->flash(
            'success',
            'Annuncio creato correttamente!'
        );
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}