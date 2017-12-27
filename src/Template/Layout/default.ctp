<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>        
        
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>

    <?= $this->Html->script('jquery-3.2.1.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>    
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    
</body>
</html>