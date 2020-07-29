<?php include('header.php');?> 

    <div class="container">
    <br><br>
        
        <?php echo form_open('home/save',['class'=>'form-horizontal']); ?>
        <fieldset>
            <div class="container"></div>
                <div class="jumbotron">
                    <h1 class="display-5">Let's add that movie!🎥😍</h1>
            </div>  
            <br>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Movie</label>
                        <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter movie title">-->
                        <?php echo form_input(['name'=>'TITLE', 'class'=>'form-control','placeholder'=>'Enter the Movie Title','value'=>set_value('TITLE')]); ?>
                        <small id="emailHelp" class="form-text text-muted">I'm pretty sure you won't forget, but just in case y'know?  (*wink)</small>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php echo form_error('TITLE'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Genre</label>
                        <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter movie title">-->
                        <?php echo form_input(['name'=>'GENRE', 'class'=>'form-control','placeholder'=>'Enter the Genre','value'=>set_value('GENRE')]); ?>
                        <small id="emailHelp" class="form-text text-muted">Is it comedy? romance? or maybe HORROR?</small>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php echo form_error('GENRE'); ?>
                    </div>
                </div>
            
            <?php echo form_submit(['value'=>'Save','class'=>'btn btn-primary']); ?>

        </fieldset>
        <?php echo form_close(); ?>
      
    <div class="container">
<?php include('footer.php');?> 



