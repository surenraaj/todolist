<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ToDo List</title>
</head>
<body>
    <h1 class="top-heading">TO DO LIST</h1>
    <div class="container">
        <form action="handle_action.php" method="post">
            <div class="input-container">
                <input type="text" name="inputbox" id="inputbox">
                <button type="submit" name="add" id="add">ADD</button>
            </div>
            <ul class="list">
                <?php
                    $itemlist = get_items();
                    while ($row = $itemlist->fetch_assoc()) {
                ?>
                <li class="item">
                    <p><?php echo $row['item']; ?></p>
                    <div class="icon-container">
                        <button type="submit" name="checked" id="check" value="<?php echo $row['id']; ?>"><img src="\todolist\assests\check.svg"></button>
                        <button type="submit" name="deleted" id="delete" value="<?php echo $row['id']; ?>"><img src="\todolist\assests\delete.svg"></button>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <hr>
            <ul class="list">
            <?php
                $itemlist = get_itemss();
                while ($row = $itemlist->fetch_assoc()) {
            ?>
                <li class="item fade">
                    <p class="deleted_text"><span><?php echo $row['item']; ?></span></p>
                    <div class="icon-container">
                        <button type="submit" name="unchecked" class="" id="check" value="<?php echo $row['id']; ?>"><img src="\todolist\assests\check.svg"></button>
                        <button type="submit" name="deleted" class="" id="delete" value="<?php echo $row['id']; ?>"><img src="\todolist\assests\delete.svg"></button>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </form>
    </div>
</body>
</html>