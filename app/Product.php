<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Product extends Model
    {
        use SoftDeletes;

        protected $fillable = [
            'name', 'desc', 'image', 'release_date', 'price',
            'ticker', 'content', 'condition', 'colorway', 'style', 'category_id'

        ];

        public function category()
        {
            return $this->belongsTo(Category::class);
        }
    }
