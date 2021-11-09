<!DOCTYPE html>
<html>
    <head>
        <style>
            table,tr,td{
                border: 2px solid red;
            }
        </style>
        <title>
            Table veya list olustur.
        </title>
    </head>
<body>
<?php if(isset($_GET['id'])&&$_GET['id']=='table'):?>
        <table >
            <tr>
                <td>Name</td>
                <td>Surname</td>
                <td>Age</td>
            </tr >
            <tr>
                <td>Aizat</td>
                <td>Esenbekova</td>
                <td>20</td>
            </tr>
       </table>
<?php elseif (isset($_GET['id'])&& $_GET['id']=='list'):?>
        <ul>
            <li> Elma </li>
            <li> Muz</li>
            <li>Mandalina</li>
        </ul>
<?php endif?>
</body>
</html>