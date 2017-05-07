<h1><?php echo $title; ?></h1>

<form action="" method="post">

    <label for="todo">Todo item</label>
    <input type="text" id="todo" name="todo">

    <button type="submit">Save todo</button>


</form>

<ul>

    <?php foreach($todos->result() as $t ): ?>

        <li><?php echo $t->todo; ?></li>

    <?php endforeach; ?>

</ul>


