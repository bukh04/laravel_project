<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\UpdateRequest;
use App\Models\Products;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Products $product)
    {
        $data = $request->validated();
        $this->service->update($product, $data);
        return redirect()->route('product.show', $product->id);
    }
}
