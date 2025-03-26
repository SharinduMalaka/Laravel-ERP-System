// File: app/GraphQL/Queries/ExampleQuery.php
namespace App\GraphQL\Queries;

use Rebing\GraphQL\Support\Query;
use GraphQL\Type\Definition\Type;
use GraphQL;

class ExampleQuery extends Query
{
    protected $attributes = [
        'name' => 'exampleQuery',
    ];

    public function type(): Type
    {
        return Type::string(); // The type to return (in this case, a string)
    }

    public function resolve($root, $args)
    {
        return 'Hello, world!'; // The data the query will return
    }
}
// File: app/GraphQL/Mutations/ExampleMutation.php
namespace App\GraphQL\Mutations;