<?= $this->extend('welcome_message')?>


<?= $this->section('content')?>
<form action="/payment" method="post">

    <label for="name">Payment Type:</label><br>
    <input type="text" id="name" name="payment" ><br>
    <input type="submit" value="Submit">
</form>
<?= $this->endSection()?>
