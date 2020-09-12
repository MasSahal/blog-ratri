<?php namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{
	protected $table = "posts";
	protected $primaryKey = "post_id";
	protected $allowedFields = [
		'category_id',
		'post_date',
		'post_title',
		'post_content'
	];
	protected $returnType ="object";

} 