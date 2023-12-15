<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body class="bg-dark">
    <div class="container mt-5 p-6">
        <div class="row">
            <div class="col-md-4 offset-4 bg-light">
                <h1 class="text-center mb-5 text-primary"> Registration Form</h1>

                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
                        $userName =isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
                        $userEmail =isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
                        $userPass =isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
                        $gender =isset($_POST['gender']) ? $_POST['gender'] : '';
                        $multiCheck =isset($_POST['multicheck']) ? $_POST['multicheck'] : [];
                        $datePicker = isset($_POST['datepicker']) ? $_POST['datepicker'] : '';
                        $timePicker = isset($_POST['timepicker']) ? $_POST['timepicker'] : '';
                        $options = isset($_POST['options']) ? $_POST['options'] : [];
                        $country = isset($_POST['country']) ? $_POST['country'] : '';
                        $userMsg =isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
                        $Subiscribe = isset($_POST['subscribe']) ? 'Yes' : 'No';
                        

                        echo "<div class='alert alert-success'>User Name: $userName</div>";
                        echo "<div class='alert alert-success'>User Email: $userEmail</div>";
                        echo "<div class='alert alert-success'>User Password: $userPass</div>";
                        echo "<div class='alert alert-success'>Gender: $gender</div>";
                        echo "<div class='alert alert-success'>Gender:" .  implode('. ', $multiCheck) ."</div>";
                        echo "<div class='alert alert-success'>Date: $datePicker</div>";
                        echo "<div class='alert alert-success'>Time: $timePicker</div>";
                        echo "<div class='alert alert-success'> Selected Option: " .  implode('. ', $options) ."</div>";
                        echo "<div class='alert alert-success'>Country: $country</div>";
                        echo "<div class='alert alert-success'>Message: $userMsg</div>";
                        echo "<div class='alert alert-success'>Subiscription: $Subiscribe</div>";
                        
                    }
                ?>

                <form action="" method="POST">

                            <!-- name -->


                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name"  value="<?= $_POST['name'] ?? '' ?>">
                    </div>


                                <!-- Email -->


                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $_POST['email'] ?? '' ?>">
                    </div>


                            <!-- Password -->

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                            <!-- Gender -->

                    <div class="form-group">
                        <div>Gender:</div>
                        <input type="radio" id="male" name="gender" value= "male" <?php echo isset($_POST['gender']) && $_POST['gender'] == 'male' ? 'checked' : ''; ?> >
                        <label for="male">Male</label>

                        <input type="radio" id="female" name="gender" value= "female"  <?php echo isset($_POST['gender']) && $_POST['gender'] == 'female' ? 'checked' : ''; ?>>
                        <label for="female">Female</label>
                    </div>


                                <!-- Multi Select checkbox -->
                    
                    <div class="form-group">
                        <input type="checkbox" id="check1" value="checkBox1" name="multicheck[]" <?php echo in_array('checkBox1', $multiCheck ?? []) ? "checked" : ""  ?> >
                        <label for="check1">Checkbox1</label>

                        <input type="checkbox" id="check2" value="checkBox2" name="multicheck[]" <?php echo in_array('checkBox2', $multiCheck ?? []) ? "checked" : ""  ?> >
                        <label for="check2">Checkbox2</label>

                        <input type="checkbox" id="check3" value="checkBox3" name="multicheck[]" <?php echo in_array('checkBox3', $multiCheck ?? []) ? "checked" : ""  ?> >
                        <label for="check3">Checkbox3</label>
                    </div>
                


                                    <!-- Date Picker -->

                    <div class="form-group">
                        <label for="datepicker">Date Of Birth : </label>
                        <input type="text" class="form-control" id="datepicker" name="datepicker" value="<?= isset($_POST['datepicker']) ?? '' ?>">
                    </div>


                                <!-- Time Picker -->

                    <div class="form-group">
                        <label for="timepicker">Pick a Time : </label>
                        <input type="text" class="form-control" id="timepicker" name="timepicker" value="<?= $_POST['timepicker'] ?? '' ?>" >
                    </div>

                                    <!-- Multi Option -->

                    <div class="form-group">
                        <label for="options">Select Options </label>
                        <select name="options[]" id="options" class="form-control" multiple>
                            <option value="option1" <?php echo in_array('option1', $options ?? []) ? "selected" : ""  ?>>Option 1</option>
                            <option value="option2"<?php echo in_array('option2', $options ?? []) ? "selected" : ""  ?> >Option 2</option>
                            <option value="option3"<?php echo in_array('option3', $options ?? []) ? "selected" : ""  ?> >Option 3</option>
                        </select>
                    </div>


                                <!-- Dropdown Select -->


                    <div class="form-group">
                        <label for="country">Country</label>
                        <select name="country" id="country" class="form-control">
                            <option value="bangladesh" <?php echo isset($_POST['country']) && $_POST['country'] == 'bangladesh' ? 'checked' : ''; ?>>Bangladesh</option>
                            <option value="usa"<?php echo isset($_POST['country']) && $_POST['country'] == 'usa' ? 'checked' : ''; ?>>United State</option>
                            <option value="canada"<?php echo isset($_POST['country']) && $_POST['country'] == 'canada' ? 'checked' : ''; ?>>Canada</option>
                        </select>
                    </div>

                                <!-- Message -->

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="4"><?= isset($_POST['message']) ? $_POST['message'] : '' ?></textarea>
                    </div>

                            <!-- CheckBox -->

                    <div class="form-group">
                        <input type="checkbox" id="newsletter" name="subscribe" <?php echo isset($_POST['subscribe']) && $_POST['subscribe'] == 'on' ? 'checked' : 'Not Subscribe'; ?> >
                        <label for="newsletter">Subscribe</label>
                    </div>

                                <!-- BUtton -->

                    <div class="text-right">
                        <button type="reset" class="btn btn-primary">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#options').select2();
        });


        flatpickr("#datepicker", {
            dateFormat: "d-m-Y"
        });

        flatpickr("#timepicker", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
        });
    </script>
</body>
</html>