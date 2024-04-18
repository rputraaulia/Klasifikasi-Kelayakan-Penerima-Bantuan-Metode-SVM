
<section class="p-t-20">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h3 style="color:aliceblue" class="title-5 m-b-35">
    
             

<?php
// run_python.php

// Replace 'path/to/python' with the actual path to your Python interpreter.
$pythonInterpreter = 'C:\Users\User\AppData\Local\Programs\Python\Python311\python.exe';

// Replace 'path/to/example.py' with the actual path to your Python script.
$pythonScript = 'C:/xampp/htdocs/svm/uploads/Test.py';

// Construct the command to run the Python script.
$command = $pythonInterpreter . ' ' . $pythonScript;

// Execute the command and capture the output.
$output = shell_exec($command);

// Display the output.
echo $output;
?>

        </h3>
        </div>
        </div>
        </div>
    

</section>
<!-- END DATA TABLE-->
