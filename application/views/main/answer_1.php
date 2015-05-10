<?php $this->load->view('main/header'); ?>

<?php $this->load->view('main/nav'); ?>

<div class="container">
    <h2><?=$question_heading?>:</h2>
    <p><?=$question_text?>:</p>            
    <table class="table table-striped">
        <thead>
            <tr>
                <th>College</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($res as $list) {?>
            <tr>
                <td><?=$list['college_name']?></td>
                <td><?=number_format($list['val'])?></td>
            </tr>
            <?php
            }?>
        </tbody>
    </table>
</div><!-- /.container -->
<?php $this->load->view('main/footer'); ?>
        
