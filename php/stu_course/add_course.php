<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>湖理小助手后台管理系统</title>
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .breadcrumb{
        line-height: 23px;
      }
      table, th, td{
    border: 1px solid #ccc;
    }
    table{
      width: 100%;
    }
    th{
      height: 39px;
      padding-left: 5px;
      font-size: 15px;
    }
    td{
      height: 39px;
      padding:0 5px;
    }
    th{
      background-color: #eee;
    }
    .btn{
      margin: 5px;
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
      <li><a href="../main.php">首页</a></li>
      <li class="active">添加课程信息</li>
    </ol>
  </div>
  <div>
    <h3>添加学生信息</h3>
    <form id="commentForm" method="post" action="add_course_sub.php">
      <table>
        <tr>
          <th style="width: 80px">课程编号</th>
          <th>课程名称</th>
          <th>开课学院</th>
          <th>开课专业</th>
          <th>学分</th>
          <th>学时</th>
          <th>课程属性</th>
          <th>课程类型</th>          
        </tr>
        <tr>
          <td>
          <input type="text" name="c_id" id="c_id" style="width: 80px">
          </td>
          <td>
          <input type="text" name="c_name" id="c_name">
          </td>
          <td>
          <select name="c_dep" id="c_dep" style="height: 26px;width: 150px">
            <option value="计算机学院">计算机学院</option>
          </select>
          </td>
          <td>
          <select name="c_major" id="c_major" style="height: 26px">
            <option value="计算机科学与技术">计算机科学与技术</option>
          </select>
          </td>
          <td>
          <input type="text" name="c_grade" id="c_grade" style="width: 50px">
          </td>
          <td>
          <input type="text" name="c_time" id="c_time" style="width: 50px">
          </td>
          <td>
          <select type="text" name="c_attr" id="c_attr" style="height: 26px">
            <option value="必修">必修</option>
            <option value="任选">任选</option>
            <option value="限选">限选</option>
          </select>
          </td>
          <td>
          <select type="text" name="c_type" id="c_type" style="height: 26px;width: 200px">
            <option value="公共基础课">公共基础课</option>
            <option value="学科基础课">学科基础课</option>
            <option value="专业课">专业课</option>
            <option value="专业方向课">专业方向课</option>
            <option value="实验实训">实验实训</option>
            <option value="见习实习">见习实习</option>
            <option value="论文设计">论文设计</option>
            <option value="实践教学环节">实践教学环节</option>
            <option value="学科考赛">学科考赛</option>
            <option value="社科类校选课">社科类校选课</option>
            <option value="艺术类校选课">艺术类校选课</option>
          </select>
          </td>
        </tr>
        <tr align="right">
          <td colspan="8">
          <input type="submit" name="提交" class="btn btn-primary" value="添加课程信息" id="submit" >
          </td>
        </tr>
      </table>
    </form>
  </div>


  <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        var r=$("#commentForm").validate({
          rules:{
            c_id:{
              required:true,
              minlength:8,
              maxlength:8,
            },
            c_name:{
              required:true,
              minlength:1,
              maxlength:25,
            },
            c_grade:{
              required:true,
              minlength:1,
              maxlength:5,
            },
            c_time:{
              required:true,
              minlength:1,
              maxlength:3,
            }
            },//rules
          messages: {
            c_id:{
              required:"",
              minlength:"",
              maxlength:"",
            },
            c_name:{
              required:"",
              minlength:"",
              maxlength:"",
            },
            c_grade:{
              required:"",
              minlength:"",
              maxlength:"",
            },
            c_time:{
              required:"",
              minlength:"",
              maxlength:"",
            }
           }//messages
        });
    });
    </script>
  </body>
</html>
