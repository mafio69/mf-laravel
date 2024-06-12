<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Produkty extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;
    protected $table = 'produkty';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nazwa_produktu',
        'producent',
        'actual',
        'jednostka_ceny',
        'waga',
        'srednica',
        'dlugosc',
        'szerokosc',
        'wysokosc',
        'grubosc',
        'typ_pakowania',
        'jednostki_zakupu',
        'jednostki_magazynowe',
    ];
}
