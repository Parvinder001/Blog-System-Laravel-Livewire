<?php

namespace App\Livewire;
use App\Models\Article;
use Livewire\Component;

class ShowBlog extends Component
{
    public function render()
    {
        $article = Article::orderby('created_at','Desc')->get();
        return view('livewire.show-blog',['articles'=>$article]);
    }
}
