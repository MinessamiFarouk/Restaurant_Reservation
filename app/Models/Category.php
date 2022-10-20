<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $fillable = ['name', 'image', 'description'];
    
    use HasFactory;

    public function menus()
    {
        return $this->BelongsToMany(Menu::class, "category_menu_r");
    }
}
