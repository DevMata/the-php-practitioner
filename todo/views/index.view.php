<?php require('partials/head.php'); ?>
    <h1>Submit your name</h1>

    <form action="/todo/names" method="POST">
        <input type="text" name="name"/>
        <button type="submit">Submit</button>
    </form>
<?php require("partials/footer.php"); ?>