<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url() ?>">Final Project</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li <?php if($this->uri->segment(2) == ""){echo 'class="active"'; }?>><a href="<?php echo base_url() ?>">Home</a></li>
                        <li <?php if($this->uri->segment(2) == "q1"){echo 'class="active"'; }?>><a href="<?php echo base_url() ?>main/q1">Quesion 1</a></li>
                        <li <?php if($this->uri->segment(2) == "q2"){echo 'class="active"'; }?>><a href="<?php echo base_url() ?>main/q2">Quesion 2</a></li>
                        <li <?php if($this->uri->segment(2) == "q3"){echo 'class="active"'; }?>><a href="<?php echo base_url() ?>main/q3">Quesion 3</a></li>
                        <li <?php if($this->uri->segment(2) == "q4"){echo 'class="active"'; }?>><a href="<?php echo base_url() ?>main/q4">Quesion 4</a></li>
                        <li <?php if($this->uri->segment(2) == "q5"){echo 'class="active"'; }?>><a href="<?php echo base_url() ?>main/q5">Quesion 5</a></li>
                        <li <?php if($this->uri->segment(2) == "q6"){echo 'class="active"'; }?>><a href="<?php echo base_url() ?>main/q6">Quesion 6</a></li>
                        <li <?php if($this->uri->segment(2) == "q7"){echo 'class="active"'; }?>><a href="<?php echo base_url() ?>main/q7">Quesion 7</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>