<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
	use HasFactory;
    protected $table = 'empleados';
	public $timestamps = false;
    
    protected $fillable =
	[
		'nombre',
		'telefono',
		'id_departamento',
		'id_puesto'
	];

	public function departamento()
	{
		return $this->hasOne(Departamento::class, 'id');
	}

	public function puesto()
	{
		return $this->hasOne(Puesto::class, 'id');
	}
}