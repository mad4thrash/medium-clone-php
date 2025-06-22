<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryTab extends Component
{
    /**
     * Create a new component instance.
     */

    public $categories;

    public function __construct()
    {
        $this->categories = Category::get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view(
            'components.category-tab',
            [
                'categories' => $this->categories
            ]
        );
    }
}
