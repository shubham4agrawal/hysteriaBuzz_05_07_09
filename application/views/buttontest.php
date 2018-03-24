<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/node_modules/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <title>Testing Phase</title>
</head>
<body>
    <div class="container">
        <div class="rows">
            <div class="col-md-12">
                <h2>testing button colour</h2>
                <div class="container">
                    <button class="btn btn<?php if(isset($table_status)){
                                                    if($table_status == 1){ 
                                                        echo "-info";
                                                    }elseif($table_status==2){ 
                                                        echo "-danger";
                                                    }elseif($table_status==3){ 
                                                        echo "-success";
                                                    }
                                                }?>">Table Status</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>