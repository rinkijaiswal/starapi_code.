
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            <tbody>
                <tr>
                    <td><?= $blog['id'] ?></td>
                    <td><?= $blog['title'] ?></td>
                    <td><?= $blog['description']?></td>
                    <td><?= $blog['price']?></td>
                </tr>
            </tbody>
            </thead>
        </table>
    </body>
</html>
