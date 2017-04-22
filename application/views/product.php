<!doctype html>
<html>
    <head>
        <title>Product</title>
    </head>
    <body>
        <?php if ($product): ?>
            <?php echo 'Name: ' . $product['name'] . '<br>'; ?>
            <?php echo 'Price: $' . $product['price']; ?>
        <?php else: ?>
            Sorry, can't find that product
        <?php endif; ?>
    </body>
</html>

