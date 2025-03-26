<!DOCTYPE html>
<html>
<head>
    <title>GraphQL Playground</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/graphql-playground-react/1.7.20/static/css/index.css">
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/graphql-playground-react/1.7.20/static/js/middleware.js"></script>
    <script>
        window.addEventListener('load', function () {
            GraphQLPlayground.init(document.body, { endpoint: '/graphql' })
        })
    </script>
</body>
</html>
    
    Now, you can access the GraphQL Playground by visiting the following URL in your web browser: 
    http://localhost:8000/graphql-playground 
    You should see the following screen: 
    Conclusion 
    Congratulations! You have successfully installed and configured GraphQL in Laravel. You can now start building your GraphQL API with Laravel. 
    Feel free to ask me if you have any questions. 
    Source link