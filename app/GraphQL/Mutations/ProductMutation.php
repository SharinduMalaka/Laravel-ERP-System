namespace App\GraphQL\Mutations;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

class ProductMutation {
    public function store($_, array $args) {
        $product = Product::create([
            'categoryID' => $args['input']['categoryID'],
            'productName' => $args['input']['productName'],
            'price' => $args['input']['price'],
            'stock' => $args['input']['stock'],
            'brandName' => $args['input']['brandName'],
        ]);

        if (isset($args['input']['productImage'])) {
            $image = $args['input']['productImage'];
            $imagePath = $image->store('product_images', 'public');

            ProductImage::create([
                'productID' => $product->productID,
                'imagePath' => $imagePath,
            ]);
        }

        return $product;
    }
}
