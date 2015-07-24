<?php
	require_once('../loader.php');
	require_once('./function.php');
	$sql = "SELECT * FROM article,member WHERE article.mid=member.mid  ORDER BY no DESC";
    $data = sql_q($sql,array());
	
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
                                    <td class="active">標題</td>
                                    <td class="active">照片</td>
                                    
                                    <td class="active" colspan="2">操作</td>
                                    
                                </tr>
                                <?php 
                                	foreach ( $data as $dt ){?>
                                    <tr>
                                        <td><?php echo $dt['title']; ?> </td>
                                        <td><img src="../picture/<?php echo $dt['picture_name_small']; ?> "/></td>
                                        
                                        <td><button class="btn open-message" value="<?php echo $dt['no']?>" >詳細</button></td>
                                        <td><button class="btn delete-message" value="<?php echo $dt['no']?>" >刪除</button></td>
                                    </tr>
                                    <tr class="hide_td">
                                        <td>
                                            <table class="table">
                                                <tr class="active">
                                                        <th>欄位</th>
                                                        <th>資料</th>
                                                </tr>
                                                <tr>
                                                    <th> 標題 </th>
                                                    <td><?php echo input_show( $dt['title'],'title' ); ?> </td>
                                                </tr>
                                                <tr>
                                                    <th> 內文 </th>
                                                    <td><?php echo input_show( $dt['content'],'content' ); ?> </td>
                                                </tr>
                                                <tr>
                                                    <th> 發表人 </th>
                                                    <td><?php echo $dt['name']; ?> </td>
                                                </tr>
                                
                                                <tr>
                                                    <th> x </th>
                                                    <td><?php echo $dt['x']; ?> </td>
                                                </tr>
                                                <tr>
                                                    <th> y </th>
                                                    <td><?php echo $dt['y']; ?> </td>
                                                </tr>
                                                <tr>
                                                    <th> 地址 </th>
                                                    <td><?php echo $dt['city'].$dt['area']; ?></td>
                                                    <td><input type="hidden" name="no" class="edi_hidden" value="<?php echo $dt['no']; ?>"></td>
                                                </tr>
                                            </table>
                                        </td>
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
        <div class="dialog-message" title="詳細資料">
            <form class="update_form" action="update.php" method="POST">
                <table class="table table-hover" >
                    <tr class="surre">
                    </tr>
                </table>
            </form>
        </div>
        <div >
            <form class="delete_form" action="delete.php" method="POST">
                <table class="table table-hover" >
                    <tr class="surree">
                    </tr>
                </table>
            </form>
        </div>
    </body>
    <script>
        $( document ).ready(function(){
            $( ".dialog-message" ).dialog({
                autoOpen:false,
                modal: false,
                height:500,
                width: 450,
                buttons:{
                    "編輯資料":function(){
                        $(".update_form").submit();
                    },
                    "關閉":function(){
                        $(this).dialog("close");
                    }
                }
            });
            $( ".open-message" )
                .click(function(){
                    var msg = $(this).parent().parent().next().html();
                    $(".surre" ).html(msg),
                    $( ".dialog-message" ).dialog( "open" );
                });
            $( ".delete-message" )
                .click(function(){
                    var msg = $(this).parent().parent().next().next().html();
                    $(".surree" ).html(msg),
                    $(".delete_form").submit();;
                });
        });
    </script>
</html>

