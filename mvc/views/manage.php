<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="header"><h1><?php echo $ass ?></h1></div>
    <div class="content">
        <div class="content_header">
            <h2>Manage</h2>
            <button>new</button>
        </div>
        <div class=tablecontent>
            content show here
            <br/>
            <table>
                <tr class="row">
                    <td id="id">Id</td>
                    <td id="img">Thumb</td>
                    <td id="title">Title</td>
                    <td id="status">Status</td>
                    <td id=action>Action</td>
                </tr>
                <tr class="row" >
                    <td id="id">1</td>
                    <td id="img"><img style="width:150px; height:100px" hrep=#></td>
                    <td id="title"><textarea name="a" id="titles" cols="30" rows="10"></textarea></td>
                    <td id="status">4</td>
                    <td id=action><a href="google.com">Show</a> | <a href="google.com">Edit</a> | <a href="google.com">Delete</a> </td>
                </tr>
              
            </table>

        </div>
    </div>
    <div class="footer" ></div>
</body>
</html>