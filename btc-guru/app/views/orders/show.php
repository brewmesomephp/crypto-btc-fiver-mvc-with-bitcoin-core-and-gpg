<?php $title = 'Order view | '.$_SERVER['HTTP_HOST'] ?>

<div class="large-12 columns">
    <?php if($this->fl('success')): ?>
        <div data-alert class="alert-box success">
            <?= $this->fl('success') ?>
        </div>
    <?php endif ?>

    <?php if(isset($error)): ?>
        <div data-alert class="alert-box alert">
            <?= $this->e($error) ?>
        </div>
    <?php endif ?>

    <h3 class="subheader">Order view</h3>

    <?php
    $forAdmin = false;
    require '../app/views/orders/_order_infos.php';
    ?>

    <hr/>

    <?php require '../app/views/orders/_show_' . \Sovrin\OrderModel::stateDescription($order->state) . '.php'; ?>

    <a href="?c=orders">Back to orders</a>
</div>
