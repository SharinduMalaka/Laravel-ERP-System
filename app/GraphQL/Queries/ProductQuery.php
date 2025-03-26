namespace App\GraphQL\Queries;

use App\Models\Product;

class ProductQuery {
    public function fetchProducts($_, array $args) {
        $query = Product::with('images'); // Fixed the incorrect colon

        if (!empty($args['query'])) {
            $query->where('productName', 'LIKE', '%' . $args['query'] . '%'); // Fixed the brackets and quote issues
        }
        if (!empty($args['min_price'])) {
            $query->where('price', '>=', $args['min_price']);
        }
        if (!empty($args['max_price'])) {
            $query->where('price', '<=', $args['max_price']);
        }
        if (!empty($args['category_id'])) {
            $query->where('categoryID', $args['category_id']);
        }

        return $query->get();
    }
}
