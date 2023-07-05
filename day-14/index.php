<html>
<body>
    <form action="<?php $_PHP_SELF ?>" method="GET">
        name: <input type="text" name="name"/>
        age: <input type="number" name="age"/>
        <button>Submit</button>
    </form>
    <?php

        if($_GET["name"]||$_GET["age"])
        {
            echo "Welcome" . $_GET["name"]."<br/>";
            echo "you are" . $_GET["age"]." year old.";
            exit();
        }
        ?>
</body>
</html>
</body>
</html>