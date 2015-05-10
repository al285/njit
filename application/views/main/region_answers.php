<?php $this->load->view('main/header'); ?>

<?php $this->load->view('main/nav'); ?>

<div class="container">
    <h2><?=$question_heading?>:</h2>
    <p><?=$question_text?>:</p>
    <h3>Endowment</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>College</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($endowments as $list) {?>
            <tr>
                <td><?=$list['college_name']?></td>
                <td><?=number_format($list['val'])?></td>
            </tr>
            <?php
            }?>
        </tbody>
    </table>
    <hr />
    <h3>Total Current Assets</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>College</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($current_assets as $list) {?>
            <tr>
                <td><?=$list['college_name']?></td>
                <td><?=number_format($list['assets'])?></td>
            </tr>
            <?php
            }?>
        </tbody>
    </table>
    <hr />
    <h3>Total current liabilities</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>College</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($current_liabilities as $list) {?>
            <tr>
                <td><?=$list['college_name']?></td>
                <td><?=number_format($list['liabilities'])?></td>
            </tr>
            <?php
            }?>
        </tbody>
    </table>
    <hr />
    <h3>Lowest non-zero tuition</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>College</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($non_zero_tuitions as $list) {?>
            <tr>
                <td><?=$list['college_name']?></td>
                <td><?=number_format($list['tuition'])?></td>
            </tr>
            <?php
            }?>
        </tbody>
    </table>
    <hr />
    <h3>Highest Tuition</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>College</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($highest_tuition as $list) {?>
            <tr>
                <td><?=$list['college_name']?></td>
                <td><?=number_format($list['tuition'])?></td>
            </tr>
            <?php
            }?>
        </tbody>
    </table>
</div><!-- /.container -->
<?php $this->load->view('main/footer'); ?>
        
