<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php echo $this->tag->getTitle(); ?>

        <?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="Your invoices">
        <meta name="author" content="SlickAccount Team">
    </head>
    <body>
        <?php echo $this->getContent(); ?>        
    </body>
</html>

