<?php

namespace App\Filters;
class ProductFilter extends QueryFilter
{
    public function category_id($id=null)
    {
        return $this->builder->when($id,function ($query) use($id)
            {
                $query->where('category_id', $id);
            });
    }

    public function search_field($search_string='')
    {
        return $this->builder
            ->where('title', 'LIKE', '%'.$search_string.'%');
    }
}
//return $this->builder
//->where('title', 'LIKE', '%'.$search_string.'%')
//->orWhere('content', 'LIKE', '%'.$search_string.'%');    search in title and content!!!

