<?php
	require_once('../loader.php');
	require_once('./function.php');
	
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>庶民生活日記_新增資料</title>
        <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css" />
        <meta ContentType=html/text; charset=utf-8>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
		        <?php require_once('top.php'); ?>
                    <div cass="jumbotron">
                        <form class="update_form" action="finish.php" method="POST">
                            <table class="table table-hover" >
                                <tr class="active">
                                    <th>Type</th>
                                    <th>Data</th>
                                </tr>
                                <tr >
                                    <th>縣/市</th>
                                    <th><input type="text" class="form-control" name="city" placeholder="高雄縣"></th>
                                </tr>
                                
                                <tr >
                                    <th>分類</th>
                                    <td><input type="text" class="form-control" name="category" placeholder="1/美食,2/交通,3/美食,4/旅遊"></td>
                                </tr>
                                <tr >
                                    <th>標題</th>
                                    <td><input type="text" class="form-control" name="title" placeholder="下大雨拉"></td>
                                </tr>
                                
                                <tr >
                                    <th>內文</th>
                                    <td><input type="text" class="form-control" name="content" placeholder="這裡下大雨囉"></td>
                                </tr>
                                <tr >
                                    <th>x</th>
                                    <td><input type="text" class="form-control" name="x" placeholder="22.762036" value="22.762036"></td>
                                </tr>
                                <tr >
                                    <th>y</th>
                                    <td><input type="text" class="form-control" name="y" placeholder="120.370462" value="120.370462"></td>
                                </tr>
                                <tr >
                                    <th>圖片編號</th>
                                    <td><input type="text" class="form-control" name="picture_name" placeholder="預設1s編號" value="1"></td>
                                </tr>
                                <tr >
                                    <th>帳號編號</th>
                                    <td><input type="text" class="form-control" name="mid" placeholder="預設管理員編號" value="1"></td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="no" class="edi_hidden" value="<?php echo $dt['no']; ?>"></td>
                                    <td><button type="submit" class="btn btn-default">送出</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
            </div>
            <?php require_once('footer.php');?>
        </div>
    </body>
</html>

