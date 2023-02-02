<?php

namespace App\Models;
use App\Policies\TutorialPolicy;
use Database\Factories\TutorialFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use DB;

class Tutorial extends Model
{
    use HasFactory;

    // public function getMenu(){
    //     $menu=DB::select('select * from tutorials where');
    // }
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'title', 'video', 'title_description'
    ];
    protected static function newFactory()
{
    return TutorialFactory::new();
}
}
