<?php $this->load->view('main/header'); ?>

<?php $this->load->view('main/nav'); ?>

<div class="container">
    <h2><?= $question_heading ?>:</h2>
    <p><?= $question_text ?>:</p>            
    <ul class="list-group">
        <?php
        foreach ($res as $key => $list) {?>
        <li class="list-group-item"><a href="<?php echo base_url() ?>main/q7_stats/<?=$key?>"><?=$list?></a></li>
        <?php
        }?>
    </ul>
</div><!-- /.container -->
<?php $this->load->view('main/footer'); ?>
        