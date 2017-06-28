<?php 
  //链接数据库
  include "connect_db.php";
  $id=$_GET['id'];
  $sql="SELECT id,stu_name,stu_id FROM stu_user WHERE id='{$id}'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>湖理小助手后台管理系统</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      /*导航高度*/
    	.breadcrumb{
    		line-height: 23px;
    	}
    	table, th, td{
  		border: 1px solid #ccc;
  		}
    	table{
  			width: 100%;
  		}

  		th,td{
  			height: 39px;
  			padding-left: 5px;
        font-size: 15px;
  		}
      th{
        width: 200px;
      }
      .search{
        width: 50%;
        margin:20px 0;
      }
      thead{
        background-color: #eee;
      }
      .error{
        color: red;
        font-weight: normal;
      }
    </style>
  </head>
  <body >
	<div>
		<ol class="breadcrumb">
		  <li><a href="main.php">首页</a></li>
		  <li class="active">修改学生信息</li>
		</ol>
	</div>
	<div>
		<h3>修改学生信息</h3>
    <form id="commentForm" method="post" action='stu_manage_edit_subi.php?id=<?php echo $id ?>'>
      <table>
        <tr>
          <th>用户名</th>
          <td><label><?php echo $row['stu_name']; ?></label></td>
        </tr>
        <tr>
          <th>请输入要绑定的学号</th>
          <td><input type="text" name="stu_id" value="<?php echo $row['stu_id']; ?>"></td>
        </tr>
        <tr align="right">
          <td colspan="2">
          <input type="submit" name="提交" class="btn btn-primary" value="确认修改" id="submit" >
          </td>
        </tr>
      </table>
    </form>
	</div>


	<script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      // 手机号码验证         
      $.validator.addMethod("phoneCheck", function(value, element,param) 
        {         
          var length = value.length;     
          var mobile = /^(([1])+\d{10})$/;     
          return this.optional(element) || (length == 11 && mobile.test(value));         
        }, "请输入正确的手机号码");
        //学号验证
                $.validator.addMethod("idCheck", function(value, element,param) 
                {         
                  var length = value.length;     
                  var id = /^(([1])+\d{10})$/;     
                  return this.optional(element) || (length == 11 && id.test(value));         
                }, "请输入正确的学号");

      var r=$("#commentForm").validate({
          rules:{
            tel:{
              required:true,
              minlength:11,
              maxlength:11,
              phoneCheck:true
            },
            stu_id:{
              required:true,
              minlength:11,
              maxlength:11,
              idCheck:true,
            }
            },//rules
          messages: {
            tel:{
              required:"手机号码不能为空",
              minlength:"请输入11位手机号码",
              maxlength:"请输入11位手机号码",
              phoneCheck:"请正确输入您的手机号码"
            },
            stu_id:{
              required:"学号不能为空",
              minlength:"请输入11位学号",
              maxlength:"请输入11位学号",
              idCheck:"请输入正确的学号",
            }
           }//messages
        });

    });
    </script>
  </body>
</html>
