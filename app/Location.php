<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	// for security concern, only allow these fields for mass assignments
	// Read more at https://laravel.com/docs/5.0/eloquent#mass-assignment
	protected $fillable = ['id','name','description','photo','longitude','latitude'];

	// limit attributes displayed in model's array or JSON
	// https://laravel.com/docs/5.0/eloquent#converting-to-arrays-or-json
	protected $hidden = ['created_at','updated_at'];
}