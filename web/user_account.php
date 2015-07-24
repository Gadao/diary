<?php
	require_once('../loader.php');
	require_once('./function.php');
	$sql = "SELECT * FROM member ";
    $data = sql_q($sql,array());
	$arr = array('1'=>'男','2'=>'女');
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>庶民生活日記</title>
        <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css"/>
        <meta ContentType=html/text; charset=utf-8>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="http://malsup.github.io/jquery.blockUI.js"></script>  
        <style type="text/css">
                  .hide_td{
            display: none;
        }
  </style>
    </head>
 <body>
        <div class="container">
            <div class="row">
                <?php require_once('top.php'); ?>
                <?php require_once('side.php'); ?>
                <div class="col-md-9">
                    <div cass="jumbotron">
                        <div class="table-responsive">
                            <table class="table">
                                <tr class="active">
                                    <td class="active">暱稱</td>
                                    <td class="active">帳號</td>
                                    <td class="active">性別</td>
                                    <td class="active">權限</td>
                                </tr>
                                <?php 
                                    foreach ( $data as $dt ){?>
                                    <tr>
                                        <td><?php echo $dt['name']; ?> </td>
                                        <td><?php echo $dt['account']; ?></td>
                                        <td><?php echo $arr[$dt['sex']]; ?></td>
                                        <td><?php if($dt['goods']=='2')
                                                            echo '管理者';else echo '一般會員'; ?></td>
                                    </tr>
                                   
                                    <tr class="hide_td">
                                        <td>
                                            <table class="table">
                                                <tr>
                                                    <td><input type="hidden" name="no" class="edi_hidden" value="<?php echo $dt['no']; ?>"></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                ?>
                            </table>
                            <ul class="pagination">                        
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php require_once('footer.php');?>
        </div>
    </body>
</html>
