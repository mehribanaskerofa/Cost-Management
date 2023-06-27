<?= $this->extend('welcome_message')?>


<?= $this->section('content')?>
<form action="/currency" method="post">

    <label for="name">Currency:</label><br>
    <input type="text" id="name" name="name" ><br>
    <input type="submit" value="Submit">

</form>
<?= $this->endSection()?>
