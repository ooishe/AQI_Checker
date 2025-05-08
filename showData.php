<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(203, 195, 213);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 15px;
        }
        h2 {
            color: darkslateblue;
        }
        table {
            border-collapse: collapse;
            width: 40%;
            background-color: #fff;
            border: 5px solid #ddd;
        }
        td {
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }
        th {
            text-align: center;
            padding: 12px 15px;
            background-color: #9370db;
            color: white;
        }
    </style>
</head>
<body>

<h2>Registration Details</h2>

<table>
    <tr>
        <th>Field</th>
        <th>Info</th>
    </tr>
    <tr>
        <td>Full Name</td>
        <td><?php echo htmlspecialchars($_POST['fname']); ?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?php echo isset($_POST['gen']) ? ($_POST['gen'] === 'm' ? 'Male' : 'Female') : 'Not specified'; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo htmlspecialchars($_POST['umail']); ?></td>
    </tr>
    <tr>
        <td>Date of Birth</td>
        <td><?php echo htmlspecialchars($_POST['bday']); ?></td>
    </tr>
    <tr>
        <td>Country</td>
        <td><?php echo htmlspecialchars($_POST['count']); ?></td>
    </tr>
    <tr>
        <td>Background color</td>
        <td><?php echo htmlspecialchars($_POST['bgcolor']); ?></td>
    </tr>
    <tr>
        <td>Feedback</td>
        <td><?php echo nl2br(htmlspecialchars($_POST['comm'])); ?></td>
    </tr>
</table>

<form id="confirm" action="", style="margin-left: 30px;">

    <div style="text-align: center;">
        <input type= "submit" value="Confirm" name="confirm" style="background-color: lightsteelblue; font-size: large; border-radius: 5%; padding: 2px 7px; cursor: pointer;" onclick="">
    </div>

</form>

</body>
</html>
