<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="class">
        <div class="header"><img class="logo" src="logo.png" alt=""></div>
        <hr>
        <div class="nav">
            <div class="left-nav">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="logout.php">Đăng xuất</a></li>
            </div>
            <div class="right-nav">
                <form method="GET" action="bai2.php">
                    <input type="text" name="search_query" placeholder="Nhập tên sản phẩm...">
                    <button type="submit">Tìm kiếm</button>
                </form>
            </div>
        </div>
        <div class="banner">
        </div>
        <div class="title"> Sản phẩm</div>
        <div class="card-grid">       
            <?php
            $products = array(
                array("id" => 1, "name" => "Watch", "price" => 29.99, "image" => "watch.png"),
                array("id" => 2, "name" => "Wallet", "price" => 14.99, "image" => "wallet.png"),
                array("id" => 3, "name" => "Headphones", "price" => 19.99, "image" => "headphones.png"),
                array("id" => 4, "name" => "Digital Camera", "price" => 269.99, "image" => "camera.png"),
            );

            function timSanPHAM($query, $products) {
                $results = array();
                foreach ($products as $product) {
                    if (stripos($product['name'], $query) !== false) {
                        $results[] = $product;
                    }
                }
                return $results;
            }
            if (isset($_GET['search_query']) && !empty($_GET['search_query'])) {
                $search_query = $_GET['search_query'];
                $sanpham = timSanPHAM($search_query, $products);
                if (empty($sanpham)) {
                    echo "<p>Không tìm thấy sản phẩm nào phù hợp.</p>";
                } else {
                    foreach ($sanpham as $product) {
                        echo "<div class='card'>";
                        echo "<div class='thumb'><img src='{$product['image']}' alt='{$product['name']}'></div>";
                        echo "<div class='name'>{$product['name']}</div>";
                        echo "<div class='price'>{$product['price']} $</div>";
                        echo "</div>";
                    }
                }
            }  else {
                foreach ($products as $product) {
                    echo "<div class='card'>";
                    echo "<div class='thumb'><img src='{$product['image']}' alt='{$product['name']}'></div>";
                    echo "<div class='name'>{$product['name']}</div>";
                    echo "<div class='price'>{$product['price']} $</div>";
                    echo "</div>";
                }
            }
            ?>
        </div>
        <div class="footer">Nguyễn Đình Đại PH56191
        </div>
    </div>
</body>
</html>
