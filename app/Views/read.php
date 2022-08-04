<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <form action="<?= base_url('/search') ?>" method="post">
                <input type="text" name="search"/>
                <button>Search</button>
            </form>
        </div>
        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
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
                    <td><a href="<?= '/update/',$blog['id'] ?>">Edit</a></td>
                    <td><a href="<?= '/delete/',$blog['id'] ?>">Delete</a></td>
                    <td><a href="<?= '/single/',$blog['id'] ?>">View</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
