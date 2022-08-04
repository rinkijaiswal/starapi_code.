<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="<?= base_url('update/'.$id) ?>">
            <input value="<?= set_value('title',$blog['title']) ?>" type="text" name="title" placeholder="Enter Title" /><br/><br/>
            <input value="<?= set_value('description',$blog['description']) ?>" type="text" name="description" placeholder="Enter Description" /><br/><br/>
            <input value="<?= set_value('price',$blog['price']) ?>" type="text" name="price" placeholder="Enter Price" /><br/><br/>
            <button type="submit" >Update</button>
        </form>
    </body>
    
</html>
