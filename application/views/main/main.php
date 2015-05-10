<?php $this->load->view('main/header'); ?>

<?php $this->load->view('main/nav'); ?>

<div class="container">

    <div class="starter-template">
        <h1>Final Project - College Data Project</h1>
        <h2>Intoduction</h2>
        <p class="lead">
            This program runs using college data imported into a mysql database. Program is written in CodeIgniter which follow MVC approach.
        </p>
        <h2>Directory Structure</h2>
        <p class="lead">
            <code>application/controllers</code> is used for business logic.<br />
            <code>application/models</code> is used for data layer/queries.<br />
            <code>application/views</code> is used for views.<br />
            <code>assets</code> is contain assets files (js/css/images).<br />
            <code>sql</code> is contain sql file export from database.<br />
        </p>
    </div>

</div><!-- /.container -->
<?php $this->load->view('main/footer'); ?>
        