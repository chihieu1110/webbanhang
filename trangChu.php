
<?php
    require("ketNoiDatabase.php");
    $sql = "SELECT * FROM `sanpham`";
    $query = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <script>
    function xoasanpham(){
        var conf = confirm(`Bạn có chắc chắn xóa sản phẩm hay không ?`);
        return conf;
    }
</script>
    <style>
        #productList {
            font-family: Roboto;
            border-collapse: collapse;
            width: 100%;
        }

        #productList td, #productList th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #productList tr:nth-child(even){background-color: #f2f2f2;}

        #productList tr:hover {background-color: #ddd;}

        #productList th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #2b8bbd;
            color: white;
        }
        button{
            background-color: #36cf57;
            padding:8px 16px;
            border-radius: 12px;
            font-weight: bold;
           
        } button a{
            color: #36cf57;
            font-weight: bold;
           
        }
        a{
            text-decoration: none;
        }
        
    </style>
 
</head>
<body>
<div class="zn-container">
<div class="zn-container">
        <div id="znid-954965236277" class="zn-element-wrapper 
                
              " data-type="banner" data-border-enable="true" data-effect="none" data-shadow-enable="false">
            <div class="zn-element zn-lg  ">
                <div id="" class="zn-banner " data-element-animation="" data-scroll-animation="">
                    <div class="zn-children-container">
                        <div class="zn-children">
                            <div class="zn-child">
                                <div class="zn-template">
                                    <div id="znid-275035747659" class="zn-element-wrapper 
                
              " data-type="heading" data-background-type="none" data-border-enable="false" data-shadow-enable="false" data-text-shadow-enable="false">
                                        <div class="zn-element zn-lg  ">
                                            <h1 id="" class="zn-heading " data-element-animation="" data-scroll-animation="">
                                                <div>
                                                    <div>Quản lý danh sách sản phẩm</div>
                                                </div>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="scripts.js"></script>
    <button style='font-size:18px'><a href="themsanpham.php">Thêm sản phẩm</a> <i class='fas fa-plus' aria-hidden="true"></i></button>
    <table id="productList">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Hành động</th>
        </tr>
        <?php 
            while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $row["masp"] ?></td>
            <td><?= $row["tensp"] ?></td>
            <td><?= $row["gia"] ?>&nbsp; VNĐ</td>
            <td><img style="width: 200px;height:200px" src='./images/<?= $row["imgURL"] ?>' alt=""></td>
            <td><a href="suasanpham.php?id=<?= $row['masp']?>">Sửa</a>
                <a  onclick="return xoasanpham()" href="xoasanpham.php?id=<?= $row['masp']?>">xóa</a>  
            </td>
        </tr>
        <?php }?>
    </table>
    
</body>
</html>

