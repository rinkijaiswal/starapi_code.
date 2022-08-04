
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="<?= base_url('create') ?>">
            <input value="<?= set_value('title') ?>" type="text" name="title" placeholder="Enter Title" /><br/><br/>
            <input value="<?= set_value('description') ?>" type="text" name="description" placeholder="Enter Description" /><br/><br/>
            <input value="<?= set_value('price') ?>" type="text" name="price" placeholder="Enter Price" /><br/><br/>
            <button type="submit" >Submit</button>
        </form>
    </body>
    <a href='/read'> Read</a>
</html>
