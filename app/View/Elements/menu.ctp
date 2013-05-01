<div class="navbar-wrapper">
    <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
    <div class="container">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). 
                     Include responsive CSS to utilize. -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand btnToBox" href="#"><span class="serif">I</span> D.S.P. de TI</a>
                <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <?php
                        if (isset($itensMenu) && !empty($itensMenu)) {
                            foreach($itensMenu as $item) {
                                echo '<li>';

                                echo $this->Html->link($item['label'], $item['href']);
                                echo '</li>';
                            }
                        }
                        ?>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
    </div> <!-- /.container -->
</div><!-- /.navbar-wrapper -->