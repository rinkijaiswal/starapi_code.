<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Search</h3>
        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($blogs as $blog): ?>
                <tr>
                    <td><?= $blog['id'] ?></td>
                    <td><?= $blog['title'] ?></td>
                    <td><?= $blog['description'] ?></td>
                    <td><?= $blog['price'] ?></td>
                    <td><a href="<?= '/single/',$blog['id'] ?>">View</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
